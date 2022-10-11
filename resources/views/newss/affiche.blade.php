@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')



    <div class="container">
        <div class="sec-title-three">
  
               
            
            <h1 style="color: white"><b> Projets</b></h1>
            <ul class="page-breadcrumb">
      
                <li>Secteur</li>
                <li>Detail</li></b>
            </ul>
        </div>
            </div>
  
  
 
</section>


<div class="container-fluid product-wrapper">
    <div class="product-grid">
      <div class="feature-products">
        <div class="row">
          <div class="col-md-6 products-total">
            <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
            <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title=""><i data-feather="list"></i></a></div>
          <div class="col-md-6 text-end">
         
          </div>
        </div>
    
      </div>
      <div class="product-wrapper-grid">
        <div class="row">
          @foreach ($newscontents as $newscontent)
          <div class="col-xl-3 col-sm-6 xl-4">
            <div class="card">
              <div class="product-box">
                <div class="product-img"><img class="img-fluid" src="{{URL::to('photos/'.$newscontent->pic)}}" alt="">
                  <div class="product-hover">
                    <ul>
                    
                      <li>
                        <a href="{{ route('newss.display',['language' => app()->getLocale(),'id' =>$newscontent->id]) }}" class="btn" type="button" ><i class="icon-eye"></i></a>
                      </li>
                   
                    </ul>
                  </div>
                </div>
                <a href="{{ route('newss.contenuaffiche',['language' => app()->getLocale(),'id' =>$newscontent->id]) }}">
                <div class="product-details">
                 <h4 style="text-align: right">{{$newscontent->titre}}</h4>
                  <p style="text-align: right"> {{$newscontent->location}}</p>
            
                </div>
                </a>
              </div>
            </div>
          </div>
     @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
  </div>
  <br>
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