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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in, {{Auth::user()->name}}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
