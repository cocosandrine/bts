
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >

  <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">



    <title>{{ config('app.name', 'Tit') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  {{--   <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">

                    @guest

                        
                    @else

                        <div class="main-wrapper">
                                <div class="navbar-bg"></div>

                            {{--  bar de navigation --}}

                                    @include('layouts.navbar')

                            {{-- End bar de navigation--}}

                                {{-- side bar --}}

                                    <div class="main-sidebar">
                                    @include('layouts.aside')
                                    </div>
                                {{-- end side bar --}}

                    @endguest

                                 {{--  @yield('navside') --}}

                                <div class="main-content">
                                    <section class="section">
                                        @yield('content')
                                    </section>
                                </div>

                            {{--  @yield('footer') --}}
                        </div>
        {{-- </main> --}}
    @extends('layouts.script')
</body>
</html>
