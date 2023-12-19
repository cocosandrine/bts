@extends('layouts.app')

@section('content')
    <div class="section-header">
        <h1>Creer facture</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Creation & Edition</a></div>
            <div class="breadcrumb-item">Clients</div>
        </div>
    </div>

    <div class="">
        <a href="" class="btn btn-warning">Retour</a>
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

                            <div class="form-group col-lg-3 col-md-12 col-sm-12">
                                <label for="reffac">Ref facture</label>
                                <input id="reffac" type="text" placeholder="Ex: CODE001"
                                    class="form-control @error('reffac') is-invalid @enderror"
                                    value="{{ old('CodeClient') }} CD001" name="reffac" autocomplete="reffac" autofocus
                                    disabled>
                                @error('reffac')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nomcl">Nom client </label>
                                <input id="nomcl" type="text" placeholder=""
                                    class="form-control @error('nomcl') is-invalid @enderror" value="{{ old('nomcl') }}"
                                    name="nomcl" autocomplete="nomcl" autofocus>
                                @error('nomcl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nomab">Nom abonnement </label>
                                <input id="nomab" type="text" placeholder=""
                                    class="form-control @error('nomab') is-invalid @enderror" value="{{ old('nomab') }}"
                                    name="nomab" autocomplete="nomab" autofocus>
                                @error('nomab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-5 col-md-12 col-sm-12 ">
                                <label for="nomser">Nom service </label>
                                <input id="nomser" type="text" placeholder=""
                                    class="form-control @error('nomser') is-invalid @enderror" value="{{ old('nomser') }}"
                                    name="nomser" autocomplete="nomser" autofocus>
                                @error('nomser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <label for="Date">Date abonnement et service</label>
                                <input id="Date" type="date" placeholder=""
                                    class="form-control @error('DateEnre') is-invalid @enderror"
                                    value="{{ old('Date') }}" name="Date" autocomplete="Date" autofocus>
                                @error('DateEnre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <label for="datefac">Date facture</label>
                                <input id="datefac" type="date" placeholder=""
                                    class="form-control @error('datefac') is-invalid @enderror"
                                    value="{{ old('datefac') }}" name="Date" autocomplete="datefac" autofocus>
                                @error('datefac')
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
                                    Creer Facture
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
