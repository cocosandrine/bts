@extends('layouts.app')

@section('content')
    <div class="section-header">
        <h1>Mofifier Clients</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
            <div class="breadcrumb-item">Clients</div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
        <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
    </div>
@endif




<div class="">

        <a href="{{route('clients.index')}}" class="btn btn-warning">Retour</a>
     </div>

    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Editer Clients') }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('clients.update',$id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            {{-- Code Client --}}
                            <!--<div class="form-group col-lg-3 col-md-12 col-sm-12">
                                <label for="CodeClient">Code Client</label>
                                <input id="CodeClient" type="text" placeholder="Ex: CODE001"
                                    class="form-control @error('CodeClient') is-invalid @enderror"
                                    value="{{-- {{ old('CodeClient') }} --}}CD001" name="CodeClient" autocomplete="CodeClient" autofocus
                                    disabled>
                                @error('CodeClient')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>-->


                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nom">Nom</label>
                                <input id="nomcl" type="text"
                                    class="form-control @error('nomcl') is-invalid @enderror" value="{{ $clients->nomcl}}"
                                    name="nomcl" autocomplete="nomcl" autofocus>
                                @error('nomcl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="adresse">Adresse</label>
                                <input id="adressecl" type="text"
                                    class="form-control @error('adressecl') is-invalid @enderror" value="{{ $clients->adressecl}}"
                                    name="adressecl" autocomplete="adressecl" autofocus>
                                @error('adressecl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="email">Email</label>
                                <input id="mailcl" type="text"
                                    class="form-control @error('mailcl') is-invalid @enderror" value="{{ $clients->mailcl}}"
                                    name="mailcl" autocomplete="mailcl" autofocus>
                                @error('mailcl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="telcl">Téléphone</label>
                                <input id="telcl" type="tel"
                                    class="form-control @error('telcl') is-invalid @enderror" value="{{ $clients->telcl}}"
                                    name="telcl" autocomplete="telcl" autofocus>
                                @error('telcl')
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
                                    Modifier Client
                                </button>
                            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



