<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create_client_traitement(Request $request)
    {
      $request->validate([
        'nomcl' => ['required', 'string'],
        'adressecl' => 'required',
        'mailcl' => ['required', 'string', 'email'],
        'telcl' => 'required',
      ]);

      $clients =new Client();
      $clients->nomcl = $request->nomcl;
      $clients->adressecl = $request->adressecl;
      $clients->mailcl = $request->mailcl;
      $clients->telcl = $request->telcl;
      $clients->save();

      return redirect('/create')->with('status','client ajouter avec succès');

    }




    public function index()
    {
        $clients = client::paginate(6);
        return view('index', compact('clients'));
        /*$client = client::all();
        return $client;*/
    }


    public function update_client(client $client){
        /*$client->update(['idcl','nomcl' 'adressecl' 'emailcl'])*/
        return view('update', compact('client'));
    }


    public function update_client_traitement(Request $request, client $client){

        $data=$request->validate([
            'nomcl' => 'required',
            'adressecl' => 'required',
            'mailcl' => 'required',
            'telcl' => 'required',
          ]);


          $client->update($data);

          return redirect('/client')->with('status','client modifié  avec succès');
    }

    
    public function delete_client(client $client){
        $client->delete();
        return redirect('/client')->with('status','client supprimer  avec succès');

}











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
