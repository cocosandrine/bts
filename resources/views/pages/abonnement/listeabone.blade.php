@extends('layouts.app')
@section('content')

<div class="section-header">
    <h1>Page Abonnement</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
        <div class="breadcrumb-item">Liste des abonnements</div>
    </div>
</div>

{{-- Affichage --}}

        <div class="row">
            <div class="col-lg-12 ">
                    @if (session()->has('info'))
                        <div class="card btn btn-success">
                            {{ session('info') }}
                        </div>
                    @endif
                <div class="card">

                    <div class="card-header">
                        <a href="" class="btn btn-icon icon-left btn-primary"><i class="far fa-user"></i>
                            Ajout Abonnement</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">

                                    <div style="place-item:left;" class="col-sm-12 col-md-6">
                                        <div id="table-1_filter" class="dataTables_filter">
                                            <form method="GET" action="{{route('search.ab')}}" enctype="multipart/form-data">
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
                                                    colspan="1" aria-label="Nom abonnement: activate to sort column ascending"
                                                    style="width:1%;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1"
                                                        colspan="1" aria-label="nom client: activate to sort column ascending"
                                                        style="width: 19%;">Nom client</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Adresse" style="width: 19%;">Nom abonnement</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="date" style="width: 19%;">date début</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="date" style="width: 19%;">date fin</th>


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
                                                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary btn-action mr-1"
                                                                data-toggle="tooltip"
                                                                title="Modifier"><i class="fas fa-pencil-alt"></i></a>
                                                        </td>

                                                    {{-- </form> --}}

                                                    <td style="width:1%,">
                                                        <form action="{{ route('abonnements.destroy',$client->id ) }}" method="Post" >
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection








































































































































