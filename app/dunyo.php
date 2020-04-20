<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dunyo extends Model
{
    public $table = 'dunyo';
    
    public $fillable = ['title', 'short', 'content', 'img', 'views'];
}
