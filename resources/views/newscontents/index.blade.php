
@extends('layouts.main-app')

@section('styles')
<head>

    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/photoswipe.css">
    <!-- Plugins css Ends-->

  </head>
@endsection

@section('content')
<a href="{{ route('newscontents.create',app()->getLocale())}}" class="btn btn-primary">{{ __('Add content') }}</a>

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
             
              <div class="product-details">
               <h4 style="text-align: right">{{$newscontent->titre}}</h4>
                <p style="text-align: right"> {{$newscontent->location}}</p>
          
              </div>
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

@endsection