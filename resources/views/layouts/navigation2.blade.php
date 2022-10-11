<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>INDH | FAHS ANJRA</title>
<!-- Stylesheets -->
<link href="/asset/css/bootstrap.css" rel="stylesheet">
<link href="/asset/css/style.css" rel="stylesheet">
<link href="/asset/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="/asset/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/asset/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/asset/js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">
 	
		<!-- Preloader -->
		<div class="preloader"></div>
		 
		<!-- Main Header-->
		<header class="main-header header-style-five">
    	
			<!--Header Top-->
			<div class="header-top">
				<div class="auto-container">
					<div class="inner-container clearfix">
						<div class="top-left">
							<ul class="contact-list clearfix">
								<li><i class="fa fa-envelope-o"></i> contact@indh-fahsanjra.ma</li>
								<li><i class="fa fa-phone"></i><a href="#">+(212)539351802/05</a></li>
						
							</ul>
						</div>
						<div class="top-right">
						
							<!--Cart Box-->
				
							
							<!--Language-->
							<div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-icon"><img src="/asset/images/icons/flag-icon-fr.png" alt=""/></span>Fr</a>
								<ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
									<li><a href="{{route(Route::currentRouteName(), 'ar')}}">العربية</a></li>
									<li><a href="{{route(Route::currentRouteName(), 'ma')}}">Amazigh</a></li>
									<li><a href="{{route(Route::currentRouteName(), 'fr')}}">Français</a></li>
									<li><a href="{{route(Route::currentRouteName(), 'en')}}">English</a></li>
								</ul>
							</div>
							
							
						</div>
						<div class="top-left">
							<ul class="contact-list clearfix">
								<li>
									@if (Auth::user() == true)
									<a href="{{ route('home',app()->getLocale())}}">	<i class="fa fa-users"></i> {{ __('Dashboard') }} </li></a>
									@else
									<a href="{{ route('login',app()->getLocale())}}">	<i class="fa fa-users"></i> {{ __('Login') }} </li></a>
									@endif
								
							  
						
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End Header Top -->
			
			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">
						
						<div class="pull-left logo-box">
							<div class="logo"><a href="index.html"><img src="/asset/images/logo-7.png" width="72%" alt="" title=""></a></div>
						</div>
						   
						   <div class="nav-outer clearfix">
						
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
	
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="current"><a href="{{ route('welcome',app()->getLocale())}}">
											{{ __('HOME') }}</a>
									
										</li>
										<li class="dropdown"><a href="#">{{ __('PROVINCE') }}</a>
											<ul>
												<li><a href="{{ route('provinces.chiffre',app()->getLocale())}}">{{ __('PROVINCE IN FIGURE') }}</a></li>
												<li><a href="{{ route('provinces.mission',app()->getLocale())}}">{{ __('MISSION AND VALUES') }}</a></li>
												<li><a href="{{ route('provinces.ogov',app()->getLocale())}}">{{ __('GOVERNANCES ORGANES') }}</a></li>
												<li><a href="{{ route('provinces.odas',app()->getLocale())}}">{{ __('ORGANIZATIONAL DAS') }}</a></li>
										
											</ul>
										</li>
										<li class="dropdown"><a href="#">{{ __('PROGRAMES') }}</a>
											<ul>
												<li><a href="services.html">INFRASTRUCTURE DE BASE </a></li>
												<li><a href="services-2.html">LUTTE CONTRE LA PRECARITE</a></li>
												<li><a href="services-single.html">INCLUSION ECONOMIQUE DES JEUNES</a></li>
												<li><a href="services-single.html">GENERATION MONTANTS</a></li>
											</ul>
										</li>
										<li ><a href="{{ route('version.home',app()->getLocale())}}">{{ __('PUBLICATIONS') }}</a>
										
										</li>
										<li class="dropdown"><a href="#">{{ __('PROJECTS') }}</a>
											<ul>
												@php
											
													$results = DB::table('news')->get()->where('name');
													$language = app()->getLocale();
													foreach ($results as $result ) {
														$name = $result->name;
														$result = $result->id;
													
											
													
															
													
														 echo "<li><a href='../../mchroe/affiche/$result?language=$language'>".$name.'</a></li>';
													
												
													
												
												}
											
				
												// 	foreach ($results as $key => $value) {
												// 		echo $key->results;
														
												// 	}
			
												@endphp
											
										
											</ul>
											
										</li>
										<li class="dropdown"><a href="#">{{ __('INFO') }}</a>
											<ul>
												<li><a href="#">{{ __('MEDIA') }}</a></li>
												<li><a href="{{ route('projects.home',app()->getLocale())}}">{{ __('YOUTUBE') }}</a></li>
												<li><a href="{{ route('posts.home',app()->getLocale())}}">{{ __('NEWS') }}</a></li>
												
											</ul>
											
										</li>
										
										<li><a href="{{ route('messages.create',app()->getLocale())}}">{{ __('CONTACT US') }}</a></li>
										<li><a href="{{ route('appelprojets.home',app()->getLocale())}}">{{ __('CONTESTS IDEAS') }}</a></li>
									</ul>
								</div>
								
							</nav>
							
							<!--Outer Box-->
							<div class="outer-box">
								
								<!--Search Box-->
								<div class="search-box-outer">
									<div class="dropdown">
										<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
										<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
											<li class="panel-outer">
												<div class="form-container">
													<form method="post" action="blog.html">
														<div class="form-group">
															<input type="search" name="field-name" value="" placeholder="Search Here" required>
															<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
														</div>
													</form>
												</div>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			<!--End Header Upper-->
			
			<!--Sticky Header-->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="index.html" class="img-responsive"><img src="/asset/images/logo-7.png" width="70%" alt="" title=""></a>
					</div>
					
					<!--Right Col-->
					<div class="right-col pull-right">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
								<ul class="navigation clearfix">
									<li class="current"><a href="{{ route('welcome',app()->getLocale())}}">
										{{ __('HOME') }}</a>
								
									</li>
									<li class="dropdown"><a href="#">{{ __('PROVINCE') }}</a>
										<ul>
											<li><a href="{{ route('provinces.chiffre',app()->getLocale())}}">{{ __('PROVINCE IN FIGURE') }}</a></li>
											<li><a href="{{ route('provinces.mission',app()->getLocale())}}">{{ __('MISSION AND VALUES') }}</a></li>
											<li><a href="{{ route('provinces.ogov',app()->getLocale())}}">{{ __('GOVERNANCES ORGANES') }}</a></li>
											<li><a href="{{ route('provinces.odas',app()->getLocale())}}">{{ __('ORGANIZATIONAL DAS') }}</a></li>
									
										</ul>
									</li>
									<li class="dropdown"><a href="#">{{ __('PROGRAMES') }}</a>
										<ul>
											<li><a href="services.html">INFRASTRUCTURE DE BASE </a></li>
											<li><a href="services-2.html">LUTTE CONTRE LA PRECARITE</a></li>
											<li><a href="services-single.html">INCLUSION ECONOMIQUE DES JEUNES</a></li>
											<li><a href="services-single.html">GENERATION MONTANTS</a></li>
										</ul>
									</li>
									<li ><a href="{{ route('version.home',app()->getLocale())}}">{{ __('PUBLICATIONS') }}</a>
									
									</li>
									<li class="dropdown"><a href="#">{{ __('PROJECTS') }}</a>
										<ul>
									@php
										$results = DB::table('news')->get()->where('name');
													foreach ($results as $result ) {
														$result = $result->name;
														# code...
														echo '<li>';
														echo '<a href="">'.$result.'</a>';
														echo '</li>';
													}
	
										@endphp
								{{-- @php
								
								$results =DB::table('news')->where('id')->get('name');

									foreach ($results as $key => $value) {
										echo $value->results;
									}

								@endphp --}}
										</ul>
									</li>
									<li class="dropdown"><a href="#">{{ __('INFO') }}</a>
										<ul>
											<li><a href="#">{{ __('MEDIA') }}</a></li>
											<li><a href="{{ route('projects.home',app()->getLocale())}}">{{ __('YOUTUBE') }}</a></li>
											<li><a href="{{ route('posts.home',app()->getLocale())}}">{{ __('NEWS') }}</a></li>
										</ul>
										
									</li>
									
									<li><a href="{{ route('messages.create',app()->getLocale())}}">{{ __('CONTACT US') }}</a></li>
									<li><a href="{{ route('appelprojets.home',app()->getLocale())}}">{{ __('CONTESTS IDEAS') }}</a></li>
								</ul>
							</div>
						</nav><!-- Main Menu End-->
					</div>
					
				</div>
			</div>
			<!--End Sticky Header-->
			
		</header>
		<!--End Main Header -->
		
		<!--Page Title-->
		
		<section class="page-title" style="background-image:url(images/background/8.jpg)">
			<div class="auto-container">
			
			
		<!--End Page Title-->
		
		<!-- Services Section Three-->
	
		
		<!-- About Section Four -->
	
	<!--End Slide Info Boxed-->
	

    <!--End Main Slider-->
	
	<!-- About Section Four -->

	<!-- End About Section Four -->
	
	<!-- Services Section Ten -->

	<!-- End Services Section Ten -->
	
	<!-- Feature Section -->

	<!-- End Feature Section -->
	
	<!-- Counter Section -->

	<!-- Counter Section -->
	
	<!-- Team Section Two -->

	<!-- End Team Section Two -->
	
	<!-- News Section Two -->

	
	<!--Sponsors Section-->

	<!--End Sponsors Section-->
	
	<!-- Call To Action Section -->

	<!-- End Call To Action Section -->
	
	<!-- Map Section -->

	<!-- End Map Section -->
	
	<!--Main Footer-->

	
</div>
<!--End pagewrapper-->

<script src="/asset/js/jquery.js"></script>
<script src="/asset/js/popper.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<script src="/asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/asset/js/jquery.fancybox.js"></script>
<script src="/asset/js/appear.js"></script>
<script src="/asset/js/owl.js"></script>
<script src="/asset/js/wow.js"></script>
<script src="/asset/js/jquery-ui.js"></script>
<script src="/asset/js/main.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="/asset/js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>