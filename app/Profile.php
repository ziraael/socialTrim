<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // disabling protection se po jena specifik kur po dergojm t dhana psh (title,description,url) e jo gjithqka.
    protected $guarded = [];
    
    public function profileImage(){
        return ($this->image) ? '/storage/' . $this->image : 'https://cdn5.vectorstock.com/i/thumb-large/92/09/question-mark-human-head-symbol-vector-13549209.jpg';
    }

    public function user(){
        // this profile belongs to a user
        return $this->belongsTo(User::class);
    }
}
