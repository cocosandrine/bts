@extends('layouts.app')

@section('title', 'index ')

@push('style')
<link rel="stylesheet"
href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Page Client</h1>
            </div>

            <div class="section-body">




<h3 class="text-center mt-4">
    @if(request()->input('q'))
    Liste des résultats de << {{request()->input('q') ??''}} >>
    @else
    Liste des clients
    @endif
</h3>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <!--<h4>Liste des clients</h4>-->
            </div>

           <div class="card-body">


            <a href="{{route('create-client')}}" class="btn btn-icon icon-left btn-secondary"><i class="far fa-user"></i>
                Ajout client </a>
            <a href="" class="btn btn-info">Imprimer</a>



   <!-- <form class="col" action="{{Route('search_client')}}">
        <div class="input-group ">
            <input type="search" name="q" class="form-control"
                placeholder="Rechercher un client" minlength="3" required

                value="{{request()->input('q')??''}}" >

            <button class="input-group-text btn-success">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>-->



    <div class="card-body">
        <div class="table-responsive">
            <table class="table-striped table"
                                id="table-1">
        <thead>
            <tr>
            <th class="text-center">#</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>


        </tr>
    </thead>
        <tbody>
            @forelse($clients as $client)
            <tr>
                <td>{{ $client->id}}</td>
                <td>{{ $client->nomcl}}</td>
                <td>{{ $client->adressecl}}</td>
                <td>{{ $client->mailcl}}</td>
                <td>{{ $client->telcl}}</td>

                <td>
                <a href="{{route('update_client',[$client])}}" class="btn btn-primary btn-action mr-1"
                data-toggle="tooltip"
                title="Edit"><i class="fas fa-pencil-alt"></i></a>

                <a href="{{route('delete_client',[$client])}}" class="btn btn-danger btn-action"
                data-toggle="tooltip"
                title="Delete"
                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>

            </td>

            </tr>

            @empty
            <tr>
                <td colspan="6" class="text-center text-danger fs-3">Aucun résultat</td>
            </tr>

            @endforelse
        </tbody>
    </table>
    {{$clients->links()}}
        </div>
    </div>
 </div>
</div>
</div>
</div>
</div>


<!--<style>
    .small{
    display: none!important;
}
</style>-->

</section>
            </div>

@endsection

@push('scripts')
    <!-- JS Libraies -->
    {{-- <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script> --}}
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    {{-- <script src="{{ asset() }}"></script> --}}
    {{-- <script src="{{ asset() }}"></script> --}}
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
