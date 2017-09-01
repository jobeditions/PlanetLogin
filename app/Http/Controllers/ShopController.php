<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;
use App\Announce;
use Gloudemans\Shoppingcart\Facades\Cart;
class ShopController extends Controller
{
    public function addAbonnement()
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
     return redirect()->back();
     
    }

     public function addAnnounce()
     {
        //dd(request()->Qty);
     $produit=Announce::find(request()->product_id);
     $pan = Cart::add([
     'id' => $produit->id,
     'name' => $produit->title,
     'qty' => request()->Qty,
     'price' => $produit->pricenew,
     ]);
     Cart::associate($pan->rowId, 'App\Announce');
     return redirect()->back();
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
    public function rapid_abonnement($id)
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
     return redirect()->back();
    }
    public function rapid_announce($id)
    {   
     //dd(request()->Qty);
     $produit=Announce::find($id);
     $pan = Cart::add([
    'id' => $produit->id,
    'name' => $produit->title,
    'qty' => 1,
    'price' => $produit->pricenew,
     ]);
     Cart::associate($pan->rowId, 'App\Announce');
     return redirect()->back();
       
    }
}
