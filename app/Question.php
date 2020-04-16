<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'message'
      
];

}
