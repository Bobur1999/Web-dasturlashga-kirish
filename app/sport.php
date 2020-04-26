<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sport extends Model
{
    public $table = 'sport';
    
    public $fillable = ['title', 'short', 'content', 'img', 'thumb', 'views'];
}
