
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
                  <p>This was posted by {{$post->author}}</p>
                  <h2>Comments</h2>
                  @foreach($post->comments as $comment)
                  <p>{{$comment->user->name}} commented: {{$comment->content}}</p>
                  @endforeach
                  <a href="/comments/create">Add Comment</a>  



            		</div>
            </div>
      </div>

            @endsection
    </body>
