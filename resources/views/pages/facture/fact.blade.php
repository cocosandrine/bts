@extends('layouts.app')
@section('content')

<div class="section-header">
    <h1>Page fatures</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
        <div class="breadcrumb-item">Liste des Factures</div>
    </div>
</div>

{{-- Affichage --}}

        <div class="row">
            <div class="col-lg-12 ">
                    @if (session()->has('statut'))
                        <div class="card btn btn-success">
                            {{ session('statut') }}
                        </div>
                    @endif

                <div class="card">

                    <div class="card-header">
                        <a href="" class="btn btn-icon icon-left btn-primary"><i class="far fa-user"></i>
                            Nouvelle Facture</a>
                    </div>

                    <div class="card-body">
                        <div class="">
                            <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">

                                    <div style="place-item:left;" class="col-sm-12 col-md-6">
                                        <div id="table-1_filter" class="dataTables_filter">
                                            <form method="GET" action="" enctype="multipart/form-data">
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
                                                        style="width: 19%;">Nom client</th>


                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="date" style="width: 19%;">Date facture</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="date" style="width: 19%;">Echéance</th>

                                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="total" style="width: 19%;">Total</th>

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
                                            @forelse ($factures as $facture)
                                                <tr>
                                                    <td>7</td>
                                                    <td>{{$facture->client->nomcl}}</td>

                                                        <td style="padding-top:1.5rem;">
                                                            {{$i++}}
                                                        </td>



                                                        <td>
                                                            <a href="" class="btn btn-primary btn-action mr-1"
                                                                data-toggle="tooltip"
                                                                title="Modifier"><i class="fas fa-pencil-alt"></i></a>
                                                        </td>



                                                    <td style="width:1%,">
                                                        <form action="" method="Post" >
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
                                         {!! $factures->appends(Request::all())->links('pagination::bootstrap-5') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection
