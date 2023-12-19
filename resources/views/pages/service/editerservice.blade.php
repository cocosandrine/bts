@extends('layouts.app')

@section('content')
    <div class="section-header">
        <h1>Mofifier service</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
            <div class="breadcrumb-item">Services</div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
        <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
    </div>
@endif




<div class="">

        <a href="{{route('services.index')}}" class="btn btn-warning">Retour</a>
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

                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nom">Nom service</label>
                                <input id="nomser" type="text"
                                    class="form-control @error('nomser') is-invalid @enderror" value="{{ $services->nomser}}"
                                    name="nomser" autocomplete="nomser" autofocus>
                                @error('nomser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="descser">Description service</label>
                                <input id="descser" type="text"
                                    class="form-control @error('descser') is-invalid @enderror" value="{{ $services->descser}}"
                                    name="adressecl" autocomplete="adressecl" autofocus>
                                @error('adressecl')
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
                                    Modifier Service
                                </button>
                            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



