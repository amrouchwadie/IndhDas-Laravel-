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
												
										
													echo '<li>';
														
												
													 echo "<a href='../../mchroe/affiche/$result?language=$language'>".$name.'</a>';
													echo '</li>';
											
												
											
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
								<li ><a href="#">{{ __('PUBLICATIONS') }}</a>
								
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
	
	<!--Main Slider-->
    <section class="main-slider style-four">
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url(/asset/images/main-slider/fahs-anjra-intro.gif)">
                <div class="auto-container">
					<div class="content">
						<div class="title">Investir dans le capital Humain</div>
			
						<div class="text" style="color: green;">المبادرة الوطنية للتنمية البشرية
							</div>
						<h1> اقليم فحص انجرة
						</h1>
						<div class="link-box">
							<a href="contact.html" class="theme-btn btn-style-twelve">{{ __('Programes') }} <span class="fa fa-angle-right"></span></a>
							<a href="services.html" class="theme-btn btn-style-thirteen">{{ __('Know more') }}<span class="fa fa-angle-right"></span></a>
						</div>
					</div>
                </div>
            </div>
            
      
		
		</div>
		<!--End Slide Info Boxed-->
		
    </section>
    <!--End Main Slider-->
	
	<!-- About Section Four -->
	<section class="about-section-four">
		<div class="auto-container">
			
			<!-- Sec Title Three -->
			<div class="sec-title-three">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">{{ __('A CHANTIER OF REIGN') }}
						</div>
						<h2>{{ __('Launch of phase III of the INDH') }}
						</h2>
					</div>
			
				</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image-1"><img src="http://indh-ouezzane.ma/wp-content/themes/indh2020/img/mohammed_6.jpg" alt=""></div>
						<div class="image-2"><img src="http://indh-ouezzane.ma/wp-content/themes/indh2020/img/mohammed_6.jpg" alt=""></div>
					</div>
				</div>
				
				<!-- Skills Column -->
				<div class="skills-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							<div class="pull-right">
								<div class="text" style="text-align: justify;">{{ __('His Majesty King Mohammed VI') }}, {{ __('May God Assist Him') }}, {{ __('chaired') }}, {{ __('Wednesday') }} 19 {{ __('September') }} 2018 {{ __('at the Royal Palace in Rabat') }}, {{ __('the launching ceremony of the 3rd phase of the National Initiative for Human Development (INDH) (2019-2023 ).') }} <br> <br>

									{{ __('On this occasion') }}, {{ __('the Minister of the Interior') }}, {{ __('Mr. Abdelouafi Laftit') }}, {{ __('presented before His Majesty the King') }}, {{ __('the results of the first and second phases of the INDH and outlined the main lines of the new vision relating to the 3rd phase.') }},{{ __('of this Initiative which is in line with the Royal Speech addressed to the Nation on the occasion of the 19th anniversary of the accession of the Sovereign to the Throne of His glorious Ancestors.') }}</div>
							</div>
							<!-- Services Block Thirteen -->
							<!-- <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-headphones"></span>
									</div>
									<h5>24/7 full <br> online support</h5>
								</div>
							</div> -->
							
							<!-- Services Block Thirteen -->
							<!-- <div class="services-block-thirteen col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="icon-box alternate">
										<span class="icon flaticon-loading"></span>
									</div>
									<h5>12 years of <br> experience</h5>
								</div>
							</div> -->
							
							<!-- Services Block Thirteen -->
							<!-- <div class="services-block-thirteen col-lg-4 col-md-12 col-sm-12">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-creativity"></span>
									</div>
									<h5>Creative <br> finance idea</h5>
								</div>
							</div> -->
							
						</div>
						
						<!--Skills-->
						<div class="skills">
							
							<!--Skill Item-->
							<!-- <div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Finance</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
								</div>
							</div> -->
							
							<!--Skill Item-->
							<!-- <div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Business</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
								</div>
							</div> -->
							
							<!--Skill Item-->
							<!-- <div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Investment</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
								</div>
							</div> -->
							
						</div>						
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section Four -->
	
	<!-- Services Section Ten -->
	<section class="services-section-ten">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-three centered">
				<div class="title">{{ __('SOCIAL NETWORKS') }}</div>
				<h2>{{ __('Daily news') }} <br> {{ __('our latest news') }}</h2>
			</div>
			<div class="row clearfix">
			
		
				
				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<span class="fa fa-facebook-square"></span>
						</div>
						<h6><a href="#">Facebook</a></h6>
						<div class="text"></div>
					</div>
				</div>
				
				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<span class="fa fa-twitter-square"></span>
						</div>
						<h6><a href="#">Twitter</a></h6>
						<div class="text"></div>
					</div>
				</div>
				
				<!-- Services Block Fourteen -->
		
				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<span class="fa fa-youtube-square"></span>
						</div>
						<h6><a href="#">Youtube</a></h6>
						<div class="text"></div>
					</div>
				</div>
				
				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						<div class="icon-box">
							<span class="fa fa-google-plus-square"></span>
						</div>
						<h6><a href="#">Google</a></h6>
						<div class="text"></div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Services Section Ten -->
	
	<!-- Feature Section -->
	<section class="feature-section">
		<div class="auto-container">
		
			<!-- Sec Title Three -->
			<div class="sec-title-three">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title"><h1> {{ __('PROGRAMES') }} </h1></div>
				
					</div>
					<div class="pull-right">
						<div class="text" style="text-align: justify;">{{ __('Continuing the momentum initiated in 2005') }}, {{ __('INDH Phase III places human capital') }}, {{ __('essential lever of development') }}, {{ __('at the heart of its concerns The action of phase III revolves around four proactive programs including two new programs (3 & 4 to which tackle the main causes of the delay in terms of human development throughout life.') }}</div>
					</div>
				</div>
			</div>
			
			<!--Feature Tabs-->
            <div class="feature-tabs tabs-box">
                <div class="row clearfix">
                	<!--Column-->
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#feature-expert" class="tab-btn"> {{ __('PROGRAME') }} 1 <span>{{ __('CATCHING UP DEFICITS IN BASIC INFRASTRUCTURES AND SOCIAL SERVICES') }}</span></li>
                            <li data-tab="#feature-brand" class="tab-btn active-btn">{{ __('PROGRAME') }} 2<span>{{ __('SUPPORT FOR PEOPLE IN PRECARIOUS SITUATIONS') }}</span></li>
                            <li data-tab="#feature-ideas" class="tab-btn">{{ __('PROGRAME') }} 3<span>{{ __('ENHANCEMENT OF YOUTH INCOME AND ECONOMIC INTEGRATION') }}</span></li>
							<li data-tab="#feature-ps" class="tab-btn">{{ __('PROGRAME') }} 4<span>{{ __('IMPULSE OF THE HUMAN CAPITAL OF THE RISING GENERATIONS') }}</span></li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-7 col-md-12 col-sm-12">
                    	<!--Tabs Container-->
                        <div class="tabs-content">
                        
                            <!-- Tab -->
                            <div class="tab" id="feature-expert">
                            	<div class="content">
									<div class="image">
										<img src="/asset/images/resource/sans titre 11.jpg" alt="">
									</div>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab active-tab" id="feature-brand">
                            	<div class="content">
									<div class="image">
										<img src="/asset/images/resource/sans titre 12.jpg" alt="">
									</div>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="feature-ideas">
                            	<div class="content">
									<div class="image">
										<img src="/asset/images/resource/Sans titre 13.png" alt="">
									</div>
								</div>
							</div>

								<!-- Tab -->
								<div class="tab" id="feature-ps">
									<div class="content">
										<div class="image">
											<img src="/asset/images/resource/43faffb8-0387-4ab0-b5a8-03a8eadf64e9.jpg" alt="">
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Feature Section -->
	
	<!-- Counter Section -->
	<section class="counter-section" style="background-image:url(/asset/images/background/6.jpg)">
		<div class="auto-container">
			<!-- Fact Counter -->
			<div class="fact-counter style-three">
				<div class="row clearfix">
				
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-start"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="3000ms" data-stop="326">0</span>+
								<div class="counter-title">{{ __('Projects') }} </div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-collaboration"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="120">0</span>
								<div class="counter-title">{{ __('Employees') }} </div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-hand-shake-1"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="31">0</span>+
								<div class="counter-title">{{ __('Our Partners') }} </div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-stopwatch"></span>
							</div>
							<div class="count-outer count-box">
								<span class="count-text" data-speed="1500" data-stop="20">0</span>+
								<div class="counter-title">{{ __('Duration of the Projects') }} </div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- Counter Section -->
	
	<!-- Team Section Two -->

	<!-- End Team Section Two -->
	
	<!-- News Section Two -->
	<section class="news-section-two style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-three">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">{{ __('News') }}</div>
						<h2>{{ __('Projects') }}</h2>
					</div>
				
				</div>
			</div>
			
			<div class="row clearfix">
				@foreach($posts as $post)
				<!-- News Block Two -->
				<div class="news-block-two red col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="/asset/images/resource/news-4.jpg" alt="" />
							<div class="overlay-box">
								<a href="/asset/images/resource/news-4.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>{{$post->created_at}}</li>
							
							</ul>
							<h5><a href="blog-single.html">{{ $post->title }}</a></h5>
							<a href="{{ route('posts.display',['language' => app()->getLocale(),'id' => $post->id]) }}" class="theme-btn btn-style-fourteen">{{ __('Know more') }}</a>
						</div>
					</div>
				</div>
				@endforeach
				<!-- News Block Two -->

				
				<!-- News Block Two -->
		
				
			</div>
			
		</div>
	</section>
	
	<!--Sponsors Section-->
	<section class="sponsors-section">
		<div class="auto-container">
			
		
		</div>
	</section>
	<!--End Sponsors Section-->
	
	<!-- Call To Action Section -->
	<section class="call-back-section" style="background-image:url(/asset/images/background/6.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Request Form -->
						<div class="request-form">
							<!--Request Form-->
							<form method="post" action="contact.html">
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<label>{{ __('Electronique E-mail') }} </label>
										<input type="email" name="text" placeholder="{{ __('Enter Email') }}" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<label>{{ __('Full Name') }} </label>
										<input type="text" name="text" placeholder="{{ __('Enter Name') }}" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<label>{{ __('Message') }} </label>
										<textarea type="text" name="text" placeholder="{{ __('Enter Message') }}" required></textarea>
									</div>
							
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<label>&nbsp;</label>
										<button class="theme-btn btn-style-thirteen" type="submit" name="submit-form">{{ __('Send Now') }} <span class="icon fa fa-angle-right"></span></button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>{{ __('Contact DAS') }}</h2>
						<div class="text">{{ __('If you wish to discuss your Association/Cooperation with DAS, please send your messages with this form') }}</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!-- Map Section -->
	<section class="map-section">
		<!--Map Outer-->
		<div class="map-outer">
			<!--Map Canvas-->
			<div class="map-canvas"
				data-zoom="15"
				data-lat="35.7442645"
				data-lng="-5.8007000"
				data-type="roadmap"
				data-hue="#ffc400"
				data-title="Préfecture"
				data-icon-path="/asset/images/icons/map-marker2.png"
				data-content="Préfecture Fahs-Anjra, Avenue Al Quds, Tanger<br><a href='mailto:contact@indh-fahsanjra.ma'>contact@indh-fahsanjra.ma</a>">
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!--Main Footer-->
    <footer class="main-footer style-three">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="/asset/images/logo-7.png" alt="" /></a>
									</div>
									<div class="text"> 

									</div>
									<ul class="list-style-two">
										<li><span class="icon fa fa-phone"></span> +(212) 539-35 18 02 / 05</li>
										<li><span class="icon fa fa-envelope"></span>  contact@indh-fahsanjra.ma</li>
										<li><span class="icon fa fa-home"></span> Préfecture Fahs-Anjra, Avenue  <br> Al Quds, Tanger</li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Lien</h4>
									<ul class="list-link">
										<li><a href="">Acceuil</a></li>
										<li><a href="">Service</a></li>
										<li><a href="">A propos de nos</a></li>
										<li><a href="">Actualité</a></li>
										<li><a href="">Projets</a></li>
										<li><a href="">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					
					<!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>LIENS UTILS
									</h4>
									<ul class="list-link">
										<li><a href="">التعليم والتكوين المهني</a></li>
										<li><a href="">الصحة</a></li>
										<li><a href="">الخدمات الاجتماعية الأساسية</a></li>
										<li><a href="">البنيات التحتية الأساسية</a></li>
										<li><a href="">الشباب والرياضة</a></li>
										<li><a href="">دعم الأنشطة المدرة للدخل</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="row clearfix">
					
					<!-- Copyright Column -->
					
					
				</div>
			</div>
		</div>
	</footer>
	
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