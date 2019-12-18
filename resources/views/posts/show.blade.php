
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

                  <p style="margin-top: 1em">
                    @foreach($post->tags as $tag)
                    <a href="/posts?tag={{$tag->tag}}">{{$tag->tag}}</a>
                    @endforeach
            		</div>
            </div>
      </div>

            @endsection
    </body>
