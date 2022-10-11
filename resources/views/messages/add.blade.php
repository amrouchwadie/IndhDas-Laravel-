@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')

<div class="container">
    <div class="content">
    <h1>{{ __('CONTACT US') }}</h1>
    <ul class="page-breadcrumb">
       
        <li>{{ __('MESSAGE') }}</li>
		
    </ul>
    </div>
    </div>
    </div>
    </section>
    <br>

    <section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="35.7444212"
					data-lng="-5.8017708"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="images/icons/map-marker.png"
					data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div>
		<div class="auto-container">
			<div class="inner-container">
				<h2>	{{ __('Contact our support for more information') }}  <br> {{ __('on') }} <span>{{ __('INDH') }}</span></h2>
				
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">{{ __('Please contact us using the information below. For more information please visit the appropriate page on our site.') }} </div>
							<ul class="list-style-five">
								<li><span class="icon fa fa-building"></span> {{ __('Fahs-Anjra Prefecture,') }}<br> {{ __('Al Quds Avenue,') }} <br> {{ __('Tangier') }}</li>
								<li><span class="icon fa fa-fax"></span> +(212)539351802/05</li>
								<li><span class="icon fa fa-envelope-o"></span>contact@indh-fahsanjra.ma</li>
							</ul>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!--Contact Form-->
							<div class="contact-form">
                                <form action="{{route('messages.create',app()->getLocale())}}" method="post" enctype="multipart/form-data">  
									{{ csrf_field() }}
									<div class="form-group">
										<input type="text" name="name" id="name" value="" placeholder="{{ __('Full Name') }} " required>
									</div>
									
									<div class="form-group">
										<input type="email" name="email" id="email" value="" placeholder="{{ __('Electronique E-mail') }}" required>
									</div>
									
							
									
									<div class="form-group">
										<textarea name="message" id="message"  placeholder="{{ __('Message') }}"></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" class="theme-btn">{{ __('Send Now') }}</button>
									</div>                                        
									
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	
	<!-- Contact Info Section -->
	

    @endsection