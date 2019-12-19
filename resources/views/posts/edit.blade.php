@extends ('layout')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
<body>
<div id="wrapper">
  <div id="page" class="container">
    <h1 class="heading has-text-weight-bold is-size-4">Edit Post</h1>

    <form method="POST" action="/posts/{{$post->id}}">
      @csrf
      @method('PUT')
      <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
          <input
          class="input"
          type="text"
          name="title"
          id="title"
          value="{{$post->title}}">
          @error('content')
          <p class ="help is-danger">{{$errors->first('content')}}</p>
          @enderror
        </div>
      </div>

      <div class="field">
      <label class="label" for="abstract">Abstract</label>

      <div class="control">
        <textarea class="textarea" name="abs" id="abs">{{$post->abstract}}</textarea>
      </div>
    </div>
    <div class="field">
    <label class="label" for="cont">Content</label>

    <div class="control">
      <textarea class="textarea" name="cont" id="cont">{{$post->content}}</textarea>
    </div>
  </div>
  <div class="control">

    <input class="input" value="{{Auth::user()->name}}"  id="author" name="author" type="hidden">

  </div>
  </div>

  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link" type="submit">Submit</button>
    </div>
  </div>

    </form>
  </div>
</div>
</body>
@endsection
