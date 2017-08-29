<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announce extends Model
{
    protected $fillable = [
        'image','description','title', 'pricenew','priceold'
    ];
}
