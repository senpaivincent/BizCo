<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //In order for Laravel to use 'inventory' table instead of 'inventories'
    public $table = 'inventory';

    protected $fillable = [
        'users_id',
        'product', 
        'variant', 
        'description', 
        'quantity',
    ];
}
