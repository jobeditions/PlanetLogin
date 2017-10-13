<?php

namespace App;

use Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class orders extends Model
{
    
    protected $fillable=['total','delivered'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function orderItems()
    {
        return $this->belongsToMany(Abonnement::class)->withPivot('qty','total');
    }

    public static function createOrder()
    {
        
        $user=Auth::user();
        $order=$user->orders()->create([
        'total'=>Cart::total(),
        'delivered'=>0
        ]);

        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
        $order->orderItems()->attach($cartItem->id,[
        'qty'=>$cartItem->qty,
        'total'=>$cartItem->qty*$cartItem->price
        ]);
        
    }
}
}
