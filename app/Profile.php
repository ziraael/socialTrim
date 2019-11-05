<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // disabling protection se po jena specifik kur po dergojm t dhana psh (title,description,url) e jo gjithqka.
    protected $guarded = [];
    
    public function user(){
        // this profile belongs to a user
        return $this->belongsTo(User::class);
    }
}
