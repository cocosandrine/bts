<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\abonnement;

class AbonneController extends Controller
{
    public function liste_traitement(Request $request){
        $request->validate([

        ]);

    }



    public function formabone()
    {
        return view('formabone');
    }


    public function listeabone()
    {
        
        return view('listeabone');
    }



}
