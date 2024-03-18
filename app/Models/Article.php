<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $filltable = [
        'name',
        'description',
        'sell_price',
        'shop_price',
        'shipping',
        'stock',
        'observacions'
    ];

    protected $hidden = [];

    use HasFactory;
}
