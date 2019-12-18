
@extends('layout')
@section('content')

    <body>

          <div id="wrapper">
            	<div id="page" class="container">
            		<div id="content">
            			<div class="title">
            				<h2>{{$post->title}}</h2>

            			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

            			<p>{{$post->content}}</p>
            		</div>
            </div>
      </div>

            @endsection
    </body>
