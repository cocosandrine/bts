<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\abonnement;
use App\Models\client;

class AbonneController extends Controller
{
    public function formabone()
    {

        return view('abonnement.formabone');
    }


    public function listeabone()
    {
        $type_menu='';
       $clients= client::with('abonnements')->paginate(10);
        return view('abonnement.listeabone',compact('clients','type_menu'));
    }

public function rech()
{
    $r = request()->input('r');
    $abonnement = abonnement ::where('nomab', 'like', "%$r%")
                ->paginate(6);
                return view('abonnement.listabone', compact('abonnements'));

}

public function update_abonnement(abonnement $abonnement){
    return view('abonnement.update', compact('abonnement'));
}


public function abonnement_traitement(Request $request, abonnement $abonnement)
{
    $data=$request->validate([

    ]);
}
}
