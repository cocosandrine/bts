@extends('layouts.app')
@section('content')

<div class="section-header">
    <h1>Page Client</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
        <div class="breadcrumb-item">Liste des Clients</div>
    </div>
</div>

{{-- Affichage --}}


        <div class="row">
            <div class="col-lg-12 ">

                <div class="card">

                    <div class="card-header">
                        <a href="{{route('clients.create')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-user"></i>
                            Ajout Client</a>
                            <button onclick="printList()">Imprimer la liste</button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">

                                    @if(session('statut'))
                                  <div class="alert alert-success">
                                   {{ session('statut') }}
                                    </div>
                                    @endif

                                    <div style="place-item:left;" class="col-sm-12 col-md-6">
                                        <div id="table-1_filter" class="dataTables_filter">
                                            <form method="GET" action="{{route('search.clt')}}" enctype="multipart/form-data">
                                                @csrf
                                                @method('GET')
                                                <label>Recherche:
                                                    <input type="search" class="form-control form-control-sm" name="search" placeholder="" aria-controls="table-1">
                                                </label>
                                                <button type="submit" class="btn btn-primary">Rechercher</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="dtOrderExample" class="table table-striped dataTable no-footer" id="table-1" role="grid"
                                            aria-describedby="table-1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                    colspan="1" aria-label="Nom client: activate to sort column ascending"
                                                    style="width:1%;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                        colspan="1" aria-label="Nom: activate to sort column ascending"
                                                        style="width: 19%;">Nom</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Adresse" style="width: 19%;">Adresse</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="email" style="width: 19%;">Email</th>


                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Telephone" style="width: 19%;">Telephone</th>
                                                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                        colspan="1" aria-label="Action: activate to sort column ascending"
                                                        style="width: 1%;">Action</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                        colspan="1" aria-label="Action: activate to sort column ascending"
                                                        style="width: 1%;"></th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $i=1
                                            @endphp
                                            @forelse ($clients as $client)
                                                <tr>
                                                 {{--    <form method="POST" action="{{route('clients.update',$client->id)}}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT') --}}
                                                        <td style="padding-top:1.5rem;">
                                                            {{$i++}}
                                                        </td>
                                                        <td>
                                                            {{$client->nomcl}}
                                                        </td>
                                                        <td>
                                                          {{$client->adressecl}}
                                                        </td>
                                                        <td>
                                                           {{$client->mailcl}}
                                                        </td>
                                                        <td>
                                                            {{$client->telcl}}
                                                        </td>
                                                        <td class="align-middle">
                                                              {{$client->Adresse}}
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary btn-action mr-1"
                                                                data-toggle="tooltip"
                                                                title="Modifier"><i class="fas fa-pencil-alt"></i></a>
                                                        </td>

                                                    {{-- </form> --}}

                                                    <td style="width:1%,">
                                                        <form action="{{ route('clients.destroy',$client->id ) }}" method="Post" >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" data-toggle="tooltip"
                                                            title="Supprimer" class="btn btn-danger btn-action" onclick="return confirm('Etes vous sûr de supprimer? si Oui appuyer sur OK');">
                                                            <i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @empty
                                            @endforelse

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                    </div>

                                    <div class="col-sm-12 col-md-7">
                                         {!! $clients->appends(Request::all())->links('pagination::bootstrap-5') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection
