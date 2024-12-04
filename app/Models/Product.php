<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "ay_products";
    protected $fillable = [
        'name',
        'detail',
    ];
}
