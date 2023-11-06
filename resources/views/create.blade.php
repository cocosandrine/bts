@extends('layout')
@section('content')

<div class="container ms-3 mt-4">
<h1>AJOUTER UN CLIENT</h1>

@if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
            <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
        </div>
    @endif


    <ul>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
    @endforeach
    </ul>


<form action="{{route('create_client_traitement')}}" method="POST" class="form-group" enctype="multipart/form-data">

    @csrf
    <div class="form-group">


        <label for="nom">Nom: </label>
        <input type="text" class="form-control" id="nomcl" name= "nomcl" >

    </div>
    <div class="form-group">
        <label for="nom">Adresse: </label>
        <input type="text" class="form-control" id="prenomcl" name= "adressecl" >

    </div>

    <div class="form-group">
        <label for="nom">Email: </label>
        <input type="email" class="form-control" id="mailcl" name= "mailcl" >

    </div>

    <div class="form-group">
        <label for="nom">Téléphone: </label>
        <input type="tel" class="form-control"  id="telcl" name= "telcl" >
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">AJOUTER UN CLIENT</button>
    <br>
    <br>

    <a href="/client" class="btn btn-danger">Revenir a la liste des clients</a>
</form>
</div>





@endsection

