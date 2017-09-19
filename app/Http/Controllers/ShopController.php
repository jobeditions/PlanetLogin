<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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
     Session::flash('success', 'Le produit est ajouté avec succès au panier');
    
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
     Session::flash('success', 'Le produit est ajouté avec succès au panier');

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
       //Session::flash('success', 'Le produit est supprimée avec succès au panier');
       return redirect()->route('cart.panier');
    }
    public function increment($id,$qty)
    {
       Cart::update($id,$qty + 1);
       Session::flash('success', 'Le panier est mis à jour avec succès');
       return redirect()->route('cart.panier');
    }
    public function decrement($id,$qty)
    {
       Cart::update($id,$qty - 1);
       if($qty==1)
       Session::flash('success', 'Le produit est supprimée avec succès au panier');
       else
       Session::flash('success', 'Le panier est mis à jour avec succès');
       
       return redirect()->back();
    }
    public function rapid_abonnement(request $request)
    {   

    //dd(request()->Qty);
     $product=Abonnement::find($request->id);
     $panier = Cart::add([
    'id' => $product->id,
    'name' => $product->title,
    'qty' => 1,
    'price' => $product->pricenew,
     ]);
     Cart::associate($panier->rowId, 'App\Abonnement');
     //return redirect()->back();
     Session::flash('success', 'Le produit est ajouté avec succès au panier');
     return response()->json(['shopping-item']);
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
     Session::flash('success', 'Le produit est ajouté avec succès au panier');
     return redirect()->back();
       
    }
}
