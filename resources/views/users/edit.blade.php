@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')


<div class="container-fluid">
    <div class="user-profile">
      <div class="row">
        <!-- user profile first-style start-->
        <div class="col-sm-12">
          <div class="card hovercard text-center">
            <div class="cardheader"></div>
            <div class="user-image">
              <div class="avatar"><img alt="" src="/assets/images/user/user2.png"></div>
              
            </div>
            <div class="info">
              <div class="row">
                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        <h6><i class="fa fa-envelope"></i>   {{ __('Email Address') }}</h6><span>{{$users->email}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        <h6><i class="fa fa-location-arrow"></i>   {{ __('Password') }}</h6><span>{{$users->password = '*******'}}</span>
                      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                  <div class="user-designation">
                    <a class="btn btn-primary" role="button" href="{{ route('users.show',app()->getLocale())}}"> {{ __('Update your Account Information') }} </a><br><br>
                    <div class="title"><a target="_blank" href="">{{$users->name}}</a></div>
                    <div class="desc">{{ __('SOCIAL ACTION DIVISION') }}</div>
                 
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        <h6><i class="fa fa-calendar"></i>   {{ __('Created at') }}</h6><span>{{$users->created_at}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                          
                        <h6><i class="fa fa-calendar"></i>   {{ __('Update') }}</h6><span>{{$users->updated_at}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            
             
            </div>
          </div>
        </div>
        <!-- user profile first-style end-->
        <!-- user profile second-style start-->
 
        <!-- user profile second-style end-->
        <!-- user profile third-style start-->

        <!-- user profile third-style end-->
        <!-- user profile fourth-style start-->
  
        <!-- user profile fourth-style end-->
        <!-- user profile fifth-style start-->

        <!-- user profile fifth-style end-->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="pswp__bg"></div>
          <div class="pswp__scroll-wrap">
            <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
        
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

              <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<!-- footer start-->

</div>
</div>

@endsection