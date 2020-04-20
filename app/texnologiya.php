<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class texnologiya extends Model
{
    public $table = 'texnologiya';
    
    public $fillable = ['title', 'short', 'content', 'img', 'views'];
}
