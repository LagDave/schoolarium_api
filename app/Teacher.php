<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'middle_name',
        'subject',
        'degree',
        'password'
    ];
}
