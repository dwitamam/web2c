<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    // Table name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timeStamps = true;

    // relationship (single post belong to user)
    public function user(){
        return $this->belongsTo('App\User');
    }

}
