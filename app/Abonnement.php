<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
    protected $fillable = [
        'image', 'title', 'pricenew','priceold'
    ];
}
