<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = 'users';

    protected $fillable = [
        'name',
        'role',
        'nickname',
        'phone',
        'telephone',
        'email',
        'password',
    ];
}