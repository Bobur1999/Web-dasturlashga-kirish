<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    public $table = 'feedbacks';
    
    public $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status'
    ];

    
}
