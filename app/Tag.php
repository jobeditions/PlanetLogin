<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];
    public function abonnements(){
        return $this->belongsToMany('App\Abonnement');
    }
    public function announces(){
        return $this->belongsToMany('App\Announce');
    }
}
