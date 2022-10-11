
@extends('layouts.main-app')

@section('styles')
<head>
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/photoswipe.css">
</head>
@endsection

@section('content')



            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>{{ __('Project Detail') }}</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">{{ __('Projects') }}</li>
                    <li class="breadcrumb-item active">{{ __('Details') }}</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->

            <div class="row">
              <div class="col-xl-6 set-col-12 box-col-12">
                <div class="card">
                  <div class="blog-box blog-shadow">@if ($newscontents->pic == true)
                    <img src="{{URL::to('photos/'.$newscontents->pic)}}" itemprop="thumbnail" alt="Image description">
                    @else
                        
                    @endif
                    
                    <div class="blog-details">
                      <p>
                       <?php
              setlocale(LC_TIME, 'French');
              echo $newscontents->created_at->formatLocalized('%d %b %Y');
?>
                    </p>
                      <h4>{{$newscontents->titre}}</h4>
               
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 set-col-12 box-col-12">
                <div class="card">
                  <div class="blog-box blog-list row">
                    <div class="col-sm-0"></div>
                    <div class="col-sm-8">
                      <div class="blog-details">
                        <div class="blog-date" style="text-align: right">{{$newscontents->created_at}} :{{ __('Published in') }}<span> </span> </div>
                        <h4 style="text-align: right"> <b> {{$newscontents->titre}}</b></h4>
                       
                        <table style="border-collapse: collapse; width: 100%; height: 90px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-size: 120%">
                          <tbody>
                          <tr style="height: 18px;">
                          <td style="width: 83.0966%; height: 60px; text-align: right;">{{$newscontents->location}}</td>
                          <td style="width: 16.9034%; height: 60px; text-align: right;"><b>{{ __('Location') }}</b> </td>
                          </tr>
                          <tr style="height: 18px;">
                          <td style="width: 83.0966%; height: 60px; text-align: right;">{{$newscontents->annee}}</td>
                          <td style="width: 16.9034%; height: 60px; text-align: right;"><b>{{ __('Year programmed') }}</b> </td>
                          </tr>
                          <tr style="height: 18px;">
                          <td style="width: 83.0966%; height: 60px; text-align: right;">{{$newscontents->projet}}</td>
                          <td style="width: 16.9034%; height: 60px; text-align: right;"><b>{{ __('Project management') }}</b> </td>
                          </tr>
                          <tr style="height: 18px;">
                          <td style="width: 83.0966%; height: 60px; text-align: right;">{{$newscontents->objectif}}</td>
                          <td style="width: 16.9034%; height: 60px; text-align: right;"><b>{{ __('Objectifs') }}</b> </td>
                          </tr>
                          <tr style="height: 18px;">
                          <td style="width: 83.0966%; height: 60px; text-align: right;">{{$newscontents->benificier}}</td>
                          <td style="width: 16.9034%; height: 60px; text-align: right;"><b>{{ __('Beneficiaries') }}</b></td>
                          </tr>
                          </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
         
              </div>
        
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 style="text-align: right"
                    > {{ __('Pictures') }}</h5>
                  </div>
                  <div class="card-body">
                    <div class="row my-gallery gallery" id="aniimated-thumbnials" itemscope="">
                      <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a href="{{URL::to('photos/'.$newscontents->pic1)}}" itemprop="contentUrl" data-size="1600x950">
                          <div>
                            
                            @if ($newscontents->pic1 == true)
                            <img src="{{URL::to('photos/'.$newscontents->pic1)}}" itemprop="thumbnail" alt="Image description">
                            @else
                                
                            @endif
                          
                          </div></a>
                        <figcaption itemprop="caption description"> 1</figcaption>
                      </figure>
                      <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a href="{{URL::to('photos/'.$newscontents->pic2)}}" itemprop="contentUrl" data-size="1600x950">
                          <div>

                            @if ($newscontents->pic2 == true)
                            <img src="{{URL::to('photos/'.$newscontents->pic2)}}" itemprop="thumbnail" alt="Image description">
                            @else
                                
                            @endif
                            
                          
                          </div></a>
                        <figcaption itemprop="caption description">  2</figcaption>
                      </figure>
                      <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a href="{{URL::to('photos/'.$newscontents->pic3)}}" itemprop="contentUrl" data-size="1600x950">
                          <div>
                            
                            @if ($newscontents->pic3 == true)
                            <img src="{{URL::to('photos/'.$newscontents->pic3)}}" itemprop="thumbnail" alt="Image description">
                            @else
                                
                            @endif
                          
                          </div></a>
                        <figcaption itemprop="caption description">  3</figcaption>
                      </figure>
                      <figure class="col-md-3 col-6 img-hover hover-1" itemprop="associatedMedia" itemscope=""><a href="{{URL::to('photos/'.$newscontents->pic4)}}"" itemprop="contentUrl" data-size="1600x950">
                          <div>
                            
                            @if ($newscontents->pic4 == true)
                            <img src="{{URL::to('photos/'.$newscontents->pic4)}}" itemprop="thumbnail" alt="Image description">
                            @else
                                
                            @endif
                          
                          </div></a>
                        <figcaption itemprop="caption description"> 4</figcaption>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
              <!--
              Background of PhotoSwipe.
              It's a separate element, as animating opacity is faster than rgba().
              -->
              <div class="pswp__bg"></div>
              <!-- Slides wrapper with overflow:hidden.-->
              <div class="pswp__scroll-wrap">
                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                <div class="pswp__container">
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                  <div class="pswp__item"></div>
                </div>
                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                <div class="pswp__ui pswp__ui--hidden">
                  <div class="pswp__top-bar">
                    <!-- Controls are self-explanatory. Order can be changed.-->
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                    <!-- element will get class pswp__preloader--active when preloader is running-->
                    <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                  </div>
                  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                  <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>



        <script src="/assets/js/scrollbar/simplebar.js"></script>
        <script src="/assets/js/scrollbar/custom.js"></script>
      <script src="/assets/js/sidebar-menu.js"></script>
    <script src="/assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="/assets/js/photoswipe/photoswipe.js"></script>
    <script src="/assets/js/tooltip-init.js"></script>
























@endsection