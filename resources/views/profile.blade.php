
@extends('layout')
@section('content')

    <body>

          <div id="wrapper">
            	<div id="page" class="container">
            		<div id="content">
            			<div class="title">
            				<h2>My Profile</h2>

            				<span class="byline">Hi {{Auth::user()->name}}</span>
                  </div>

            			<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>

            			<p>{{Auth::user()->profile->bio}} </p>


            		</div>


            			</div>
            		</div>


            @endsection
    </body>
