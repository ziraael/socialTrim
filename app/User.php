<?php

namespace App;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot(){
        
        parent::boot();

        static::created(
            function($user){
                // e thirr qit User model ky e thirr profile() below edhe ai e thirr create() ndatabaz
                $user->profile()->create([
                    'title' => 'Edito titullin dhe profilin nga menuja!',
                ]);

                Mail::to($user->email)->send(new NewUserWelcomeMail());
            }
        );
    }

    public function posts()
    {
        // this user has many posts
        return $this->hasMany(Post::class)->orderBy('created_at','DESC');
    }

    public function following()
    {
        // belongs to many profiles dmth munet me bo follow many profiles
        return $this->belongsToMany(Profile::class);
    }

    public function profile()
    {
        // this user has one profile
        return $this->hasOne(Profile::class);
    }
}
