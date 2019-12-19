@extends ('layout')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
<body>
<div id="wrapper">
  <div id="page" class="container">
    <h1 class="heading has-text-weight-bold is-size-4">New Post </h1>

    <form method="POST" action="/posts">
      @csrf
      <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
          <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{old('title')}}">
          @error('title')
          <p class="help is-danger">{{$errors->first('title')}}</p>
          @enderror
        </div>
      </div>

      <div class="field">
      <label class="label" for="abs">Abstract</label>

      <div class="control">
        <textarea class="textarea @error('abs') is-danger @enderror" name="abs" id="abs">{{old('abs')}}</textarea>
        @error('abs')
        <p class="help is-danger">{{$errors->first('abs')}}</p>
        @enderror
      </div>
    </div>
    <div class="field">
    <label class="label" for="cont">Content</label>

    <div class="control">
      <textarea class="textarea  @error('cont') is-danger @enderror" name="cont" id="cont">{{old('cont')}}</textarea>
      @error('cont')
      <p class="help is-danger">{{$errors->first('cont')}}</p>
      @enderror
    </div>
  </div>
  <div class="field">
  <label class="label" for="tags">Tags</label>

  <div class="select is-multiple control">
    <select
    name="tags[]"
    multiple
    >
  @foreach ($tags as $tag)
  <option value="{{$tag->id}}">{{$tag->tag}}</option>
  @endforeach

</select>
    @error('tags')
    <p class="help is-danger">{{$errors->first('tags')}}</p>
    @enderror

  </div>
</div>

<div class="control">

  <input class="input" value="{{Auth::user()->name}}"  id="author" name="author" type="hidden">

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
