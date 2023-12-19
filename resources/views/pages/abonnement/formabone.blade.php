@extends('layouts.app')

@section('content')
    <div class="section-header">
        
        <h1>Ajout abonnement</h1>
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
            <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
        </div>
    @endif

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
            <div class="breadcrumb-item">Abonnements</div>
        </div>
    </div>

    <div class="">

        <a href="{{route('abonnements.index')}}" class="btn btn-warning">Retour</a>
     </div>

    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Creer Abonnement') }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('abonnements.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nom">Nom Client</label>
                                <input id="nomcl" type="text"
                                    class="form-control @error('nomcl') is-invalid @enderror" value="{{ old('nomcl') }}"
                                    name="nomcl" autocomplete="nomcl" autofocus>
                                @error('nomcl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nom">Nom Abonnement</label>
                                <input id="nomab" type="text"
                                    class="form-control @error('nomab') is-invalid @enderror" value="{{ old('nomab') }}"
                                    name="nomab" autocomplete="nomab" autofocus>
                                @error('nomcl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-8 col-md-12 col-sm-12">
                                <label for="date">Date début</label>
                                <textarea id="date_debut" type="text" placeholder="" class="form-control @error('date_debut') is-invalid @enderror"
                                    name="date_debut" value="{{ old('date_debut') }}" autocomplete="date_debut"></textarea>
                                <div class="invalid-feedback">
                                    @error('date_debut')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group col-lg-8 col-md-12 col-sm-12">
                                <label for="date_fin">Date fin</label>
                                <textarea id="date_fin" type="text" placeholder="" class="form-control @error('date_fin') is-invalid @enderror"
                                    name="date_fin" value="{{ old('date_fin') }}" autocomplete="date_fin"></textarea>
                                <div class="invalid-feedback">
                                    @error('date_fin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="row mt-4">
                            <div class="form-group col-lg-4 col-md-12 col-sm-12"></div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <button type="submit" style="font-size:1.3em;"
                                    class="btn btn-primary btn-lg btn-block ">
                                    Creer Abonnement
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
