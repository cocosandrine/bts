<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


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

      $type_menu='';
      return back()->with('status','client ajouter avec succès');


    }




    public function index()
    {
        $clients = client::paginate(6);
        /*return view('index', ['type_menu' => '']);*/
        $type_menu='';
        return view('client.index', compact('clients', 'type_menu') );

    }


    public function update_client(client $client){
        /*$client->update(['idcl','nomcl' 'adressecl' 'emailcl'])*/

        $type_menu='';
        return view('client.update', compact('client', 'type_menu' ));
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


public function search()
    {
        $q = request()->input('q');

       $clients = client::where('nomcl', 'like', "%$q%")
                ->orwhere('mailcl', 'like', "%$q%")
                ->paginate(6);

        return view('client.index', compact('clients'));
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_menu='';
        // dump('ok');
        // return view('create', compact('type_menu'));
        return view('client.create', ['type_menu' => '']);
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
