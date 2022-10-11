@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')



<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">{{ __('Update your Account') }} </h3>
                <hr>
                
                    <form action="{{route('users.update',app()->getLocale())}}" method="post" enctype="multipart/form-data">  
                        @csrf
                        @method('PUT')
                               
                
                        <div class="form-group">
                            <label for="label"><b>{{ __('Username') }}</b></label>
                            <input type="text" placeholder="{{ __('Username') }}" class="form-control" id="name" name="name" value="{{$users->name}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{ __('Email Address') }}</b></label>
                            <input type="email" placeholder="{{ __('Email Address') }}" class="form-control" id="email" name="email" value="{{$users->email}}" >
                        </div>


                        <div class="form-group">
                            <label for="label"><b>{{ __('Password') }}</b></label>
                            <input type="password" placeholder="{{ __('Password') }}" class="form-control" id="password" name="password" value="{{$users->password}}" >
                        </div>


                        
                        <div class="form-group">
                            <label for="label"><b>{{ __('Confirm Password') }}</b></label>
                            <input type="password" placeholder="{{ __('Confirm Password') }}" class="form-control" id="password1" name="password1" value="{{$users->password}}" >
                        </div>
                    
<br>
                        
                        <button type="submit" class="btn btn-success">{{ __('Update') }}</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>

@endsection