
@extends('layout')
@section('content')

    <body>

          <div id="wrapper">
            	<div id="page" class="container">
                @foreach ($posts as $post)
            		<div id="content">
            			<div class="title">
            				<h2><a href="/posts/{{$post->id}}">{{$post->author}}</a></h2>

            			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

            			<p>{{ $post->abstract}}</p>
            		</div>
                @endforeach
            </div>
      </div>

            @endsection
    </body>
