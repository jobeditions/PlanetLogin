<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;
use Gloudemans\Shoppingcart\Facades\Cart;
class ShopController extends Controller
{
    public function addItems()
    {
        //dd(request()->Qty);
       
       $product=Abonnement::find(request()->product_id);
       
       //$panier = Cart::add($product->id,$product->title,$product->pricenew,request()->Qty);
     $panier = Cart::add([
    'id' => $product->id,
    'name' => $product->title,
    'qty' => request()->Qty,
    'price' => $product->pricenew,
     ]);
    
     dd($panier);   
    
    }
}
