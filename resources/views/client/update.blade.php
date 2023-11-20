@extends('layouts.app')

@section('title', 'update')

@push('style')
<link rel="stylesheet"
href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
@section('main')<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Page de modification</h1>
        </div>

        <div class="section-body"




    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
            <button class="btn-close position-absolute end-0 ps-5" data-bs-dismiss='alert'></button>
        </div>
    @endif

    <ul>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">{($error)}</li>
    @endforeach
    </ul>


<form action="{{route('update_client_traitement', [$client])}}" method="POST" class="form-group" >

    <input type="text" name="id" style="display:none"; value="{{ $client->idcl}}">


    @csrf
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
    <div class="card-body">
    <div class="form-group">

        <label for="nom">Nom: </label>
        <input type="text" class="form-control" id="nomcl" name= "nomcl" value="{{ $client->nomcl}}" >

    </div>
    <div class="form-group">
        <label for="nom">Adresse: </label>
        <input type="text" class="form-control" id="adressecl" name= "adressecl" value="{{ $client->adressecl}}">

    </div>

    <div class="form-group">
        <label for="nom">Email: </label>
        <input type="text" class="form-control"id="mailcl" name= "mailcl" value="{{ $client->mailcl}}" >

    </div>

    <div class="form-group">
        <label for="nom">Téléphone: </label>
        <input type="tel" class="form-control" name= "telcl" value="{{ $client->telcl}}" >
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">MODIFIER</button>
    <br>
    <a href="/index" class="btn btn-danger">RETOUR</a>
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


