<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahalla extends Model
{
    public $table = 'mahalla';
    
    public $fillable = ['title', 'short', 'content', 'img', 'thumb', 'views'];
}
