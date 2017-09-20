<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;



class abonnement extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'featured', 'title','number','category_id', 'description','currency','pricenew','priceold'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected $dates = ['deleted_at'];
}
