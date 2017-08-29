<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;
use App\Website;


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
        $website=Website::get();
        return view('home',compact('abonnement','website'));
    }

    public function indexUser()
    {
        return view('user.utilisateur');
    }
}
