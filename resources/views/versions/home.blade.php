@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')

<div class="container">
    <div class="content">
    <h1>PUBLICATIONS</h1>
    <ul class="page-breadcrumb">
       
        <li>PUBLICATION</li>
        <li>DOCUMENTATION</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <br>

	<!-- Testimonial Page Section -->
	<section class="testimonial-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				
				<h2><span>Publication</span></h2>
			</div>
			
			<div class="row clearfix">
				@foreach ($versions as $version)
                <div class="testimonial-block-five col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
					
						<div class="image-outer">
							<div class="image">
								<img src="images/resource/author-6.jpg" alt="" />
							</div>
						</div>
						<div class="text"></div>
			<a href="{{ route('versions.display',['language' => app()->getLocale(),'id' =>$version->id]) }}">		<h5>{{$version->description}}</h5>
						<div class="designation">{{$version->titre}}</div></a>	
					</div>
				</div>
				
                @endforeach
				<!-- Testimonial Block Five -->
			
				<!-- Testimonial Block Five -->
			
				<!-- Testimonial Block Five -->
			
				
				<!-- Testimonial Block Five -->
			
				
			
				
			</div>
			
		</div>

    </section>

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
										<li><a href="">Projet</a></li>
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
	


@endsection