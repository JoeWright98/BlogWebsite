@extends ('layout')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection
@section('content')
<body>
<div id="wrapper">
  <div id="page" class="container">
    <h1 class="heading has-text-weight-bold is-size-4">Add Comment</h1>

    <form method="POST" action="/comments">
      @csrf
    <div class="field">
    <label class="label" for="ccont">Content</label>

    <div class="control">
      <textarea class="textarea  @error('ccont') is-danger @enderror" name="ccont" id="ccont"></textarea>
      @error('ccont')
      <p class="help is-danger">{{$errors->first('ccont')}}</p>
      @enderror
    </div>
  </div>


<div class="control">

  <input class="input" value="{{Auth::user()->id}}"  id="id" name="id" type="hidden">

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
