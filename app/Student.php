<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'middle_name',
        'grade_level',
        'section',
        'password'
    ];
}
