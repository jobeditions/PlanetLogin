<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;
use Cart; 

class ShopController extends Controller
{
    public function addItems()
    {
       
       $product=Abonnement::find(request()->product_id);
        //dd(request()->all());
        $panier = Cart::add($product->id,$product->title,$product->pricenew,request()->Qty);

        dd($panier);
    
    }
}
