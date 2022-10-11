@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')


<div class="container">
  <div class="sec-title-three">

         
      
      <h1 style="color: white"><b> {{ __('PROGRAMES') }}</b></h1>
      <ul class="page-breadcrumb">

          <li>INDH</li>
     
      </ul>
  </div>
      </div>



</section>

<section class="feature-section">
  <div class="auto-container">
  
    <!-- Sec Title Three -->
    <div class="sec-title-three">
      <div class="clearfix">
        <div class="pull-left">
          <div class="title"><h1> {{ __('PROGRAMES') }} </h1></div>
      
        </div>
        <div class="pull-right">
          <div class="text" style="text-align: justify;">
            {{ __('Continuing the momentum initiated in 2005') }}, {{ __('INDH Phase III places human capital') }}, {{ __('essential lever of development') }}, {{ __('at the heart of its concerns The action of phase III revolves around four proactive programs including two new programs (3 & 4 to which tackle the main causes of the delay in terms of human development throughout life.') }}</div>
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
                          <li data-tab="#feature-expert" class="tab-btn active-btn"> {{ __('PROGRAME') }} 1 <span>{{ __('CATCHING UP DEFICITS IN BASIC INFRASTRUCTURES AND SOCIAL SERVICES') }}</span></li>
                          <li data-tab="#feature-brand" class="tab-btn ">{{ __('PROGRAME') }} 2<span>{{ __('SUPPORT FOR PEOPLE IN PRECARIOUS SITUATIONS') }}</span></li>
                          <li data-tab="#feature-ideas" class="tab-btn">{{ __('PROGRAME') }} 3<span>{{ __('ENHANCEMENT OF YOUTH INCOME AND ECONOMIC INTEGRATION') }}</span></li>
            <li data-tab="#feature-ps" class="tab-btn">{{ __('PROGRAME') }} 4<span>{{ __('IMPULSE OF THE HUMAN CAPITAL OF THE RISING GENERATIONS') }}</span></li>
                      </ul>
                  </div>
                  <!--Column-->
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <!--Tabs Container-->
                      <div class="tabs-content">
                      
                          <!-- Tab -->
                          <div class="tab active-tab" id="feature-expert">
                            <div class="content">
                <div class="image">
                  <img src="/asset/images/resource/sans titre 11.jpg" alt="">
                </div>
              </div>
            </div>
            
            <!-- Tab -->
                          <div class="tab " id="feature-brand">
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

<p class="text-light bg-danger" style="font-size: x-large">
  {{ __('Program No. 1') }}
<br>
{{ __('Redress the shortcomings at the level of infrastructure and basic social services') }}
</p>
<br><br>
<div class="container">
<p class="text-center">
  <span style="font-weight: bold;font-size: large">
  {{ __('Completing the fight against social and territorial inequalities') }} </span><br>  <br> 
  <span style="font-weight: bolder">
  {{ __('Infrastructure development and access to basic social services were the priority of the first and second phases of the National Initiative for Human Development, where 80% of the financial resources were allocated to them. The third phase of the initiative intends to follow up on this effort and contribute to reducing the disparities that still exist at the social level. As well as Al-Turabi, especially at the level of five priority sectors.') }}
</span> 
</p></div><br><br>
<div class="container">
<div class="card-deck">
  <div class="card">
    <img src="data:image/png;base64,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" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center">{{ __('Rural electrification') }}</h5>
      <p class="card-text"></p>

    </div>
  </div>
  <div class="card">
    <img src="https://banner2.cleanpng.com/20180326/suq/kisspng-computer-icons-education-square-academic-cap-gradu-graduation-5ab9153c889567.9625482415220790365595.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center">{{ __('Education') }}</h5>
      <p class="card-text"></p>
   
    </div>
  </div>
  <div class="card">
    <img src="data:image/png;base64,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" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center">{{ __('Roads, village paths, technical installations') }}</h5>
      <p class="card-text"></p>

    </div>
  </div>
  <div class="card">
    <img src="https://media.istockphoto.com/vectors/red-blood-drop-icon-vector-id945296860?k=20&m=945296860&s=170667a&w=0&h=JF2kBUU_z5rwM5xdJ01YvF_SsypVSwhwnIqu8etGOK0=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center">{{ __('Connecting to the drinking water network') }} </h5>
      <p class="card-text"></p>
 
    </div>
  </div>
  <div class="card">
    <img src="https://media.istockphoto.com/vectors/heart-rate-icon-health-monitor-red-heart-rateblood-pressure-vector-vector-id953620854?k=20&m=953620854&s=170667a&w=0&h=PtDCg-q8K8rr3_kupsL-PSbR8vaUKi4ODGko_7ftvB8=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center">{{ __('The health') }} </h5>
      <p class="card-text"></p>
    
    </div>
  </div>
</div>
</div>
@endsection