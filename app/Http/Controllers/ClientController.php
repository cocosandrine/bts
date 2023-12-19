<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientRequest;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $clients = client::paginate(10);
        return view('pages.client.index', compact('clients'));

    }
    public function create()
    {

        return view('pages.client.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomcl'=> 'nullable',
            'adressecl'=> 'nullable',
            'mailcl'=> 'nullable',
            'telcl'=> 'nullable',

        ]);
        client::create($request->post());
        $clients=client::paginate(10);
        return view('pages.client.index',compact('clients'))->with('status','client ajouter avec succès');
    }


    public function search(Request $request)
    {

        $clients = client::where([
            ['nomcl', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->search)) {
                    $query->Where('nomcl', 'LIKE', '%' . $s . '%')
                         ->orwhere('mailcl', 'like', '%' . $s .'%')->get();
                }
            }]
        ])->paginate(10);

        return view('pages.client.index',compact('clients'));
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
        $clients= client::where('id',$id)->first();

        return view('pages.client.editerclient',compact('clients','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,client $clients, $id)
    {
        $validated= $request->validate([
            'nomcl'=> 'nullable',
            'adressecl'=> 'nullable',
            'mailcl'=> 'nullable',
            'telcl'=> 'nullable',

        ]);
        $clients = client::find($id);
        $clients->update($request->all());


        return  redirect()->route('clients.index')->with('message', 'L\'élément a été ajouté avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = client::find($id);
        $clients->delete();
        return  redirect()->route('clients.index');
    }
   
}
