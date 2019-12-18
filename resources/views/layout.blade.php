<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet" />
<link href="/css/fonts.css" rel="stylesheet"/>
@yield("head")

</head>
<body>
  <div id="header-wrapper">
    <div id="header" class="container">
      <div id="logo">
        <h1><a href="/">FaceBlog</a></h1>
      </div>
      <div id="menu">
        <ul>
          <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
          <li class="{{ Request::path() === 'Create' ? 'current_page_item' : '' }}"><a href="/posts/create" accesskey="2" title="">Create a post</a></li>
          <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/index" accesskey="3" title="">IDK</a></li>
          <li class="{{ Request::path() === 'posts' ? 'current_page_item' : '' }}"><a href="/posts" accesskey="4" title="">News feed</a></li>

          @if (Auth::check())
          <li class="{{ Request::path() === 'logout' ? 'current_page_item' : '' }}"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" accesskey="5" title="">  {{ __('Logout') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>
          @else
          <li class="{{ Request::path() === 'login' ? 'current_page_item' : '' }}"><a href="/login" accesskey="5" title="">Login/Register</a></li>
          @endif
        </ul>
      </div>
    </div>
  @yield ('header')
</div>
@yield ('content')
<div id="copyright" class="container">
  <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
