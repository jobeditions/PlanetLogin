<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Session;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function index()
    {
        //Cart::destroy();
        return view('vente.paiement');
    }

    public function pay()
    {
        
        //dd(request()->all());
        //Cart::destroy();
       Stripe::setApiKey("sk_test_akAjq6p4K7SAq9MqtmFvjHLY");
        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'eur',
            'description' => 'vente numerique',
            'source' => request()->stripeToken
        ]);
        Session::flash('success', 'Purchase successfull. wait for our email.');
        Cart::destroy();
        //Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);
        return redirect('/');
        
    }
}
