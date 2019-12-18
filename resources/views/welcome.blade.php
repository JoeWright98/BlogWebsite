@extends('layout')

@section('header')
  <div id="header-featured">
    <div id="banner-wrapper">
      <div id="banner" class="container">
        <h2>FaceBlog</h2>
        <p>This is <strong>FaceBlog</strong>  </div>
    </div>
  </div>
</div>

@endsection

@section('content')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            @endsection

    </body>
