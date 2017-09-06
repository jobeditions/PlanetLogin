<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonnement;
use App\Announce;

class PageController extends Controller
{
    public function show($id)

    {
        $abonnements=Abonnement::get();
        $abons=Abonnement::find($id);
        return view('vente.abonnement_offer',compact('abonnements','abons'));
    }
    public function ann_show($id)

    {
        $abonnements=Announce::get();
        $abons=Announce::find($id);
        return view('vente.announce_offer',compact('abonnements','abons'));
    }
}
