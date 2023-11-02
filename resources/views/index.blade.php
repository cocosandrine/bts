@extends("layout")
@section("content")
<h3 class="text-center mt-4">Liste des clients</h3>

<div class="table-wrapper">
    <br>
<a href="/create" class="btn btn-primary">Ajout client </a>
   <br>

   @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
            <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
        </div>
    @endif


<table class="fl-table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>


        </tr>
    </thead>
        <tbody>

            @php
            $ide=1;
            @endphp


            @foreach($clients as $client)
            <tr>
                <td>{{ $ide}}</td>
                <td>{{ $client->nomcl}}</td>
                <td>{{ $client->adressecl}}</td>
                <td>{{ $client->mailcl}}</td>
                <td>{{ $client->telcl}}</td>
              
                <td>
                    <a href="{{route('update_client',[$client])}}" class="btn btn-info">Modifier</a>
                    <a href="{{route('delete_client',[$client])}}" class="btn btn-danger">Supprimer</a>
                </td>
            
            
            </tr>

            @php
            $ide += 1;
            @endphp



            @endforeach
        </tbody>
    </table>
    {{$clients->links()}}

</div>

<style>
    .small{
    display: none!important;
}
</style>

@endsection