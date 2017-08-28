<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnement=Abonnement::get();
        return view('home',compact('abonnement'));
    }

    public function indexUser()
    {
        return view('user.utilisateur');
    }
}
