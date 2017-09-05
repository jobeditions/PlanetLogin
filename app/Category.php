<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Category extends Model
{
    use SoftDeletes;
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
