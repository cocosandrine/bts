@extends('layout')
@section('content')

    <h1>MODIFIER UN CLIENT </h1>
    @if (session('status'))
        <div class="alert alert-success">
            {(session('status'))}
        </div>
    @endif
    <ul>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">{($error)}</li>
    @endforeach
    </ul>


<form action="{{route('update_client_traitement', [$client])}}" method="POST" class="form-group" >

    <input type="text" name="id" style="display:none"; value="{{ $client->idcl}}">


    @csrf
    <div class="form-group">
   
            



        <label for="nom">Nom: </label>
        <input type="text" class="form-control" id="nomcl" name= "nomcl" value="{{ $client->nomcl}}" >

    </div>
    <div class="form-group">
        <label for="nom">Adresse: </label>
        <input type="text" class="form-control" id="adressecl" name= "adressecl" value="{{ $client->adressecl}}">

    </div>

    <div class="form-group">
        <label for="nom">Email: </label>
        <input type="text" class="form-control"id="mailcl" name= "mailcl" value="{{ $client->mailcl}}" >

    </div>

    <div class="form-group">
        <label for="nom">Téléphone: </label>
        <input type="tel" class="form-control" name= "telcl" value="{{ $client->telcl}}" >
    </div>
    <br></br>
    <button type="submit" class="btn btn-primary">MODIFIER UN CLIENT</button>
    <br>
    <a href="/index" class="btn btn-danger">Revenir a la liste des client</a>
</form>




@endsection

