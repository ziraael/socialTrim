<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    
    public function User(){
        // this post belongs to a user
        return $this->belongsTo(User::class);
    }
}
