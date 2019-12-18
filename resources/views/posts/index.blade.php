
@extends('layout')
@section('content')

    <body>

          <div id="wrapper">
            	<div id="page" class="container">
                @forelse($posts as $post)
            		<div id="content">
            			<div class="title">
            				<h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>

            			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

            			<p>{{ $post->abstract}}</p>
            		</div>
                @empty
                <p>No posts with that tag yet.</p>
                @endforelse
            </div>
      </div>

            @endsection
    </body>
