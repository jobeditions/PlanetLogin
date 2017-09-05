<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
	protected $fillable = [
        'name','title', 'order',
      ];
    public function abonnements()
    {
        return $this->hasMany('App\Abonnement');
    }
    public function announces()
    {
        return $this->hasMany('App\Announce');
    }
}
