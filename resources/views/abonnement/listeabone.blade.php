@extends('layouts.app')

@section('title', 'listabone  ')

@push('style')
<link rel="stylesheet"
href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Page abonnement</h1>
            </div>

            <div class="section-body">


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div>

           <div class="card-body">


            <!--<a href="" class="btn btn-icon icon-left btn-secondary"><i class="far fa-user"></i>
                Ajout abonnement </a>-->
            <a href="" class="btn btn-info">Imprimer</a>



   <!-- <form class="col" action="{{Route('rech_abonnement')}}">
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
                                    <th>#</th>
                                    <th>Nom client</th>
                                    <th>Nom abonnement</th>
                                    <th>date début </th>
                                    <th>date fin</th>
                                    <th>Actions</th>


                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($clients as  $client )
                                    <tr>
                                        <td>{{$client->id}}</td>
                                        <td>{{$client->nomcl}}</td>
                                        <td>
                                            <ul>
                                                   @forelse ($client->abonnements as $abonnement )
                                                    <li>{{$abonnement->nomab}}</li>
                                                    @empty
                                                        Pas encore abonné
                                                    @endforelse
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                   @forelse ($client->abonnements as $abonnement )
                                                    <li>{{$abonnement->date_debut}}</li>
                                                    @empty
                                                        ---
                                                    @endforelse
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                   @forelse ($client->abonnements as $abonnement )
                                                    <li>{{$abonnement->date_fin}}</li>
                                                    @empty
                                                        ---
                                                    @endforelse
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-action mr-1"
                                            data-toggle="tooltip"
                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="" class="btn btn-danger btn-action"
                                            data-toggle="tooltip"
                                            title="Delete"
                                            data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>

                                        </td>
                                    </tr>



@endforeach

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






































































































































