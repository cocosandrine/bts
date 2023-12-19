@extends('layouts.app')
    @section('title')
        {{ __('Sofdev Enregistrement')}}
    @endsection
        @section('content')

            <section class="section">
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                           {{--  <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> --}}
                        </div>

                        <div class="card card-primary">
                            <div class="card-header"><h4>{{ __('Connecter')}}</h4></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('do-login') }}">
                                    @csrf
                                        <div class="form-group">
                                            <label for="email">{{ __('Addresse EMail') }}</label>
                                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  name="email" tabindex="1"  autocomplete="email" autofocus>
                                                <div class="invalid-feedback">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                        </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">{{ __('Mot  de Passe') }}</label>
                                        <div class="float-right">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Mot de passe oublier?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                        <input id="password" type="password" placeholder="Mot de Passe" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2"  autocomplete="current-password">
                                    <div class="invalid-feedback">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                       {{--  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">{{ __('Se souvenir de moi') }}</label> --}}
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="form-group col-8">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Se Connecter
                                    </button>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            </form>

                            <div class="text-center mb-3">
                                <div class="text-job text-muted">{{ __('Softdev')}}</div>
                            </div>



                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </section>

            <footer class="">
                <div class="simple-footer">
                    Copyright &copy; Softdev 2021
                </div>
            </footer>

        @endsection
{{--
    @section('script')
        @extends('layouts.script')
    @endsection --}}
