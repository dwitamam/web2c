<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{


    // Relationship with Post Model
    public function post(){
        return $this->belongsTo('App\Post');
    }

    // Relationship with User Model
    public function user(){
        return $this->belongsTo('App\User');
    }
}
