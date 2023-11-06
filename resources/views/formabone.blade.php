@extends('layout')
@section('content')

<div class="container ms-3 mt-4">
    <h1>AJOUTER UN ABONNEMENT</h1>

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


    <form action="{{route('liste_traitement')}}" method="POST" class="form-group" enctype="multipart/form-data">

        @csrf
        <div class="form-group">


            <label for="nom">Nom du client: </label>
            <input type="text" class="form-control" id="nomcl" name= "nomcl" >

        </div>
        <div class="form-group">
            <label for="nom">Titre abonnement: </label>
            <input type="text" class="form-control" id="nomab" name= "nomab" >

        </div>

        <div class="form-group">
            <label for="nom">Date Début: </label>
            <input type="date" class="form-control" id="date_debut" name= "date_debut" >

        </div>

        <div class="form-group">
            <label for="nom">Date Fin: </label>
            <input type="date" class="form-control"  id="date_fin" name= "date_fin" >
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">AJOUT D'ABONNEMENT</button>
        <br>
        <br>

        <a href="/listeabone" class="btn btn-danger">RETOUR A LA LISTE</a>
    </form>
    </div>
@endsection
