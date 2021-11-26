<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interior</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/about.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/services.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/element.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/font-awesome.min.css') }}" />
	<link href="{{ asset('assets/https://fonts.googleapis.com/css?family=Philosopher') }}" rel="stylesheet">
   <script src="{{ asset('assets/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	@livewireStyles
</head>

<body>
<section id="header" class="clearfix">
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	<a class="navbar-brand" href="index.html"> <i class="fa fa-home"></i> Interior</a>
	</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="/">HOME</a></li>
					<li><a href="/about">ABOUT</a></li>
					<li><a href="/services">SERVICES</a></li>
					<li><a href="/blog">BLOG</a></li>
					<li><a href="/contact">CONTACT</a></li>
					<li><a href="/gracecomponent">Grace</a></li>
				
					<li>



		        	<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">DROPDOWN <b class="caret"></b></a>
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-2">
					 <div class="header_1">
					  <h2><a href="#"><img src="{{ asset('assets/images/slide1.jpg')}}" height="155" class="img_responsive"></a></h2>
					  <p><a href="#">Sed Dignissim Lacinia</br> Vestibulum Lacinia</a></p>
					 </div>
					</li>
					<li class="col-sm-2">
					<div class="header_1">
					  <h2><a href="#"><img src="{{ asset('assets/images/off1.jpg') }}" height="155" class="img_responsive"></a></h2>
					  <p><a href="#">Sed Dignissim Lacinia</br> Vestibulum Lacinia</a></p>
					 </div>	
					</li>
					<li class="col-sm-2">
					<div class="header_1">
					  <h2><a href="#"><img src="{{ asset('assets/images/off2.jpg') }}" height="155" class="img_responsive"></a></h2>
					  <p><a href="#">Sed Dignissim Lacinia</br> Vestibulum Lacinia</a></p>
					 </div>	
					</li>
					<li class="col-sm-2">
					<div class="header_1">
					  <h2><a href="#"><img src="{{ asset('assets/images/off3.jpg') }}" height="155" class="img_responsive"></a></h2>
					 <p><a href="#">Sed Dignissim Lacinia</br> Vestibulum Lacinia</a></p>
					 </div>	
					</li>
					<li class="col-sm-2">
					<div class="header_1">
					  <h2><a href="#"><img src="{{ asset('assets/images/slide2.jpg') }}" height="155" width="100%"></a></h2>
					  <p><a href="#">Sed Dignissim Lacinia</br> Vestibulum Lacinia</a></p>
					 </div>	
					</li>
					<li class="col-sm-2">
					<div class="header_1">
					  <h2><a href="#"><img src="{{ asset('assets/images/slide3.jpg') }}" height="155" width="100%"></a></h2>
					  <p><a href="#">Sed Dignissim Lacinia</br> Vestibulum Lacinia</a></p>
					 </div>	
					</li>
				</ul>
			</li>
		
			@if (Route::has('login'))
	<!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
		@auth
			 <li>
				 <x-app-layout>

                 </x-app-layout>
				  <li>
		@else
			<li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

			@if (Route::has('register'))
			<li>	<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
			@endif
		@endauth
	</div>
@endif
</li>
			
			        <!-- <li class="well_1 clearfix"><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li class="well_1 clearfix"><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li class="well_1 clearfix"><a href="#"><i class="fa fa-twitter"></i></a></li> -->
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</section>


{{ $slot }}


<section id="footer_main">
 <div class="container">
  <div class="row">
   <div class="footer_main_1 clearfix">
    <div class="col-sm-8">
	 <div class="footer_main_2">
	  <p>© 2021 Your Website Name. All Rights Reserved. Design by<a href="htt"> Denis (237) 676736394</a></p>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="footer_main_3">
	  <ul>
	       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		   <li><a href="#"><i class="fa fa-youtube"></i></a></li>
	  </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<script src="{{asset('assets/js/classie.js') }}"></script> 
<script src="{{ asset('assets/js/cbpAnimatedHeader.js') }}"></script>
@livewireScripts
</body>
</html>