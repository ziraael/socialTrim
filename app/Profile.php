<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // disabling protection se po jena specifik kur po dergojm t dhana psh (title,description,url) e jo gjithqka.
    protected $guarded = [];
    
    public function profileImage(){
        return ($this->image) ? '/storage/' . $this->image : '/storage/profile/ng1gVIgMt3N92Am3xsgfrwWAzPGSiN5WRkyZzWcJ.jpeg';
    }

    public function user(){
        // this profile belongs to a user
        return $this->belongsTo(User::class);
    }
}
