<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;



class abonnement extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'image', 'title', 'description','pricenew','priceold'
    ];

    protected $dates = ['deleted_at'];
}
