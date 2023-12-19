@extends('layouts.app')

@section('content')
    <div class="section-header">


        <h1>Ajout Clients</h1>
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
            <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
        </div>
    @endif

    
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
            <div class="breadcrumb-item">Clients</div>
        </div>
    </div>

    <div class="">

        <a href="{{route('clients.index')}}" class="btn btn-warning">Retour</a>
     </div>

    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Creer Clients') }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data">

                        @csrf
                        <div class="row">


                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nom">Nom</label>
                                <input id="nomcl" type="text" placeholder="Ex: nom client"
                                    class="form-control @error('nomcl') is-invalid @enderror" value="{{ old('nomcl') }}"
                                    name="nomcl" autocomplete="nomcl" autofocus>
                                @error('nomcl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group col-lg-4 col-md-12 col-sm-12 ">
                                <label for="adresse">Adresse</label>
                                <input id="adressecl" type="text" placeholder=""
                                    class="form-control @error('adressecl') is-invalid @enderror" value="{{ old('adressecl') }}"
                                    name="adressecl" autocomplete="adressecl" autofocus>
                                @error('adressecl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group col-lg-4 col-md-12 col-sm-12 ">
                                <label for="mailcl">Email</label>
                                <input id="mailcl" type="text" placeholder=""
                                    class="form-control @error('mailcl') is-invalid @enderror" value="{{ old('mailcl') }}"
                                    name="mailcl" autocomplete="mailcl" autofocus>
                                @error('mailcl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <label for="tel">Telephone</label>
                                <input id="telcl" type="telcl" placeholder=""
                                    class="form-control @error('telcl') is-invalid @enderror"
                                    value="{{ old('telcl') }}" name="telcl" autocomplete="telcl" autofocus>
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
                                        Creer Client
                                    </button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection









