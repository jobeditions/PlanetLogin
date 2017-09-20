<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Tag extends Model
{
    protected $fillable = ['name','title', 'order',];
    public function abonnements(){
        return $this->belongsToMany('App\Abonnement');
    }
    public function announces(){
        return $this->belongsToMany('App\Announce');
    }
    protected $dates = ['deleted_at'];
}
