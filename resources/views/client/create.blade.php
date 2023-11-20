
@extends('layouts.app')

@section('title', 'create')

@push('style')
<link rel="stylesheet"
href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Page d'ajout client</h1>
        </div>

        <div class="section-body">

@if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
           <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
        </div>
    @endif


    <ul>
    <!--@foreach ($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
    @endforeach-->


    @if($errors)
    @error('nomcl')
    <p>Le champ nom est requis  </p>
    @enderror

    @error('mailcl')
    <p>Le champ email est requis  </p>
    @enderror


    @endif



    </ul>


<form action="{{route('create_client_traitement')}}" method="POST" class="form-group" enctype="multipart/form-data">

    @csrf

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
    <div class="card-body">
    <div class="form-group">


        <label for="nom">Nom: </label>
        <input type="text" class="form-control" id="nomcl" name= "nomcl" >

    </div>
    <div class="form-group">
        <label for="nom">Adresse: </label>
        <input type="text" class="form-control" id="adressecl" name= "adressecl">

    </div>

    <div class="form-group">
        <label for="nom">Email: </label>
        <input type="email" class="form-control" id="mailcl" name= "mailcl" >

    </div>

    <div class="form-group">
        <label for="nom">Téléphone: </label>
        <input type="tel" class="form-control"  id="telcl" name= "telcl" >
    </div>
    <br><br>
    <div>
    <button type="submit" class="btn btn-primary">AJOUTER</button>

    <a href={{url('/client')}} class="btn btn-danger">RETOUR</a>
  </div>
</form>
        </div>
    </section>
</div>
</div>
</div>
</div>

@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
