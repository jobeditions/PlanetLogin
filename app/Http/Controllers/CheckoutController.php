<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
     public function index()
    {
        //Cart::destroy();
        return view('vente.paiement');
    }
}
