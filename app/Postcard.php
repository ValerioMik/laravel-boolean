<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcard extends Model
{
    protected $fillable = [
        'sender',
        'addres',
        'text',
        'image',
    ];
    
}
