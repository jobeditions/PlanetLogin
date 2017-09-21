<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;



class abonnement extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'featured', 'title','slug','number','category_id', 'description','currency','pricenew','priceold'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    protected $dates = ['deleted_at'];
}
