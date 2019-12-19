
@extends('layout')
@section('content')

    <body>

          <div id="wrapper">
            	<div id="page" class="container">
            		<div id="content">
            			<div class="title">
            				<h2>My Profile</h2>
                    @foreach($profile as profile)
            				<span class="byline">{{$profile->bio}}</span> </div>
                    @endforeach
            			<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
            			<p>Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. </p>

            		</div>


            			</div>
            		</div>
            

            @endsection
    </body>
