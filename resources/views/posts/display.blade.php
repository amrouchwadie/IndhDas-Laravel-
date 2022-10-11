@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')

<div class="container">
    <div class="content">
    <h1>INFORMATION</h1>
    <ul class="page-breadcrumb">
       
        <li>Info</li>
        <li>ACTUALITE</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <br>

    <style>
        .page-wrap {
          max-width: 1000px;
          margin: 20px auto;
          padding: 20px;
        }
        
        .article-header {
          text-align: center;
          @media (max-width: 520px) {
            h2 {
              font-size: 1.2rem;
            }
          }
        }
        
        .classification-header {
          text-transform: uppercase;
          color: red;
          letter-spacing: 0.1rem;
        }
        
        .intro-ps {
          columns: 2;
          margin: 0 0 2rem 0;
          > p:first-child {
            text-indent: 0;
            strong {
              font-size: 125%;
              letter-spacing: -1px;
              line-height: 0;
            }
          }
          @media (max-width: 520px) {
            columns: 1; 
          }
        }
        
        .in-brief {
          text-align: center;
          margin: 0 0 2rem 0;
          
        }
        .in-brief-content {
          columns: 3;
          font-size: 0.8rem;
          text-align: left;
          border: 1px solid #ccc;
          padding: 20px;
          @media (max-width: 520px) {
            columns: 2; 
          }
        }
        
        
        
        .article-header {
          padding: 0 50px;
          margin: 0 0 30px 0;
        }
        .byline {
          font-style: italic;
        }
        .article-body {
          font-size: 0.9rem;
          max-width: 500px;
          margin: 0 auto;
        
        }
        
        figure {
          margin: 1rem 0;
          figcaption {
            font-weight: bold;
            letter-spacing: -0.03rem;
          }
          img {
            margin: 0 0 5px 0;
          }
        }
        img {
          max-width: 100%;
          display: block;
        }</style>
    <div class="page-wrap">
      
        <article>
          
          <header class="article-header">  
            
            <h4 class="classification-header">
              {{ __('Today') }}
            </h4>
            
            <svg viewBox="0 0 560 259" class="header-lockup">
              <text transform="matrix(1 0 0 1 -0.00007 116.14385)"><tspan x="0" y="0" font-family="'Montserrat'" font-size="157px">{{ __('Latest') }}</tspan></text>
              <circle fill="#FFFFFF" cx="128.50781" cy="126.5" r="34.5"/>
              <text transform="matrix(1 0 0 1 114.62256 123)">
                <tspan x="0" y="0" font-family="'Montserrat'" font-size="19px">{{ __('News') }}</tspan>
              </text>
            </svg>
            
            <h2>
            {{$posts->title}}
            </h2>
            <hr>
            <div style="text-align: left" class="byline">
            {{$posts->created_at->todatestring()}}  : نشر في 
            </div>
            
          </header>
          
       
          
          <div style="text-align: right" class="article-body">
            
            <p >{!! html_entity_decode($posts->description) !!} </p>
        </div>
          
        </article>
        
      </div>
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