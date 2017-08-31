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
     $panier = Cart::add([
    'id' => $product->id,
    'name' => $product->title,
    'qty' => request()->Qty,
    'price' => $product->pricenew,
     ]);
     Cart::associate($panier->rowId, 'App\Abonnement');
     return redirect()->route('cart.panier');
    }

    public function panier()
    {
        //Cart::destroy();
        return view('vente.panier');
    }
    public function deleteItems($id)
    {
       Cart::remove($id);
       return redirect()->route('cart.panier');
    }
    public function increment($id,$qty)
    {
       Cart::update($id,$qty + 1);
       return redirect()->route('cart.panier');
    }
    public function decrement($id,$qty)
    {
       Cart::update($id,$qty - 1);
       return redirect()->route('cart.panier');
    }
    public function rapid_add($id)
    {   

    //dd(request()->Qty);
     $product=Abonnement::find($id);
     $panier = Cart::add([
    'id' => $product->id,
    'name' => $product->title,
    'qty' => 1,
    'price' => $product->pricenew,
     ]);
     Cart::associate($panier->rowId, 'App\Abonnement');
     Cart::associate($panier->rowId, 'App\Announce');
     return redirect()->back();
       
    }
}
