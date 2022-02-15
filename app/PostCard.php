<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCard extends Model
{
    protected $fillable = [
        'sender',
        'address', 
        'text', 
        'image',
    ];
}
