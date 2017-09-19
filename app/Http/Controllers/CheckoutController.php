<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Cart;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Token;

class CheckoutController extends Controller
{
    public function index()
    {
        //Cart::destroy();
        return view('vente.paiement');
    }

    //This function was created for Stripe Checkout Payments

    //public function pay()
    //{
        
        
     //  Stripe::setApiKey("sk_test_akAjq6p4K7SAq9MqtmFvjHLY");

     //   $charge = Charge::create([
     //       'amount' => Cart::total() * 100,
     //       'currency' => 'eur',
     //       'description' => 'vente numerique',
     //        'source' => request()->stripeToken
     //   ]);
     //   Session::flash('success', 'Purchase successfull. wait for our email.');
     //   Cart::destroy();
     //   Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);
     //    return redirect()->back();
        
    //}
    public function checkout_process(Request $request)
    {
        
        Stripe::setApiKey('sk_test_akAjq6p4K7SAq9MqtmFvjHLY');

        try {

        $token = Token::create(array(
                "card" => array(
                "number" => $request->cc_number,
                "exp_month" => $request->cc_month,
                "exp_year" => $request->cc_year,
                "cvc" => $request->cc_cvc
            )
        ));

        $charge = Charge::create(array(
            
            'amount' => Cart::total() * 100,
            'currency' => 'eur',
            'description' => 'vente numerique',
            'source' => $token
        ));
      
       Cart::destroy();
       Mail::to($request->email)->send(new \App\Mail\PurchaseSuccessful);
       Session::flash('success', 'Purchase successfull. wait for our email.');
       return redirect()->back();
       } catch (\Exception $ex) {
        return $ex->getMessage();}
      
    }
    

}
