@extends('layouts.main-app2')

@section('styles')

@endsection

@section('content')

<div class="container">
    <div class="content">
    <h1>INFORMATION</h1>
    <ul class="page-breadcrumb">
       
        <li>ACTUALITE</li>
        <li>NOUVEAUTE</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <br>

    <section class="case-section-three">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
			
				<h2>Actualité</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Case Block -->
                @foreach ($posts as $post)
                    
         
				<div class="case-block-two col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow pulse" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image-outer">
							<div class="image">
								<img src="/asset/images/resource/news-4.jpg" alt="" />
								<div class="overlay-box">
									<a href="/asset/images/resource/news-4.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
								</div>
							</div>
						</div>
						<div class="lower-content">
							<div class="category">{{ $post->created_at }}</div>
							<h4><a href="{{ route('posts.display',['language' => app()->getLocale(),'id' => $post->id]) }}">{{ $post->title }}</a></h4>
						</div>
					</div>
				</div>
                @endforeach
				<!-- Case Block -->
		
				
				<!-- Case Block -->
			
				
				<!-- Case Block -->
		
				
			</div>
			
			<!--Styled Pagination-->
            <ul class="styled-pagination text-center">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-double-right"></span></a></li>
            </ul>                
            <!--End Styled Pagination-->
			
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