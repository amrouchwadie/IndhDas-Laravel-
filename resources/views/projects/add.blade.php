@extends('layouts.main-app')

@section('styles')

@endsection
@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ __('Add a Project') }} </h3>
                <hr>
                
                    <form action="{{route('projects.index',app()->getLocale())}}" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}       
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{ __('Title') }}</b></label>
                            <input type="text" placeholder="{{ __('Title') }}" class="form-control" id="titre" name="titre" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{ __('Subject') }}</b></label>
                            <textarea type="text" placeholder="{{ __('Subject') }}" class="form-control" id="description" name="description" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="label"><b>{{ __('Youtube Video Link') }}</b></label>
                            <input type="text" placeholder="{{ __('Youtube Video Link') }}" class="form-control" id="link" name="link" >
                        </div>

                        
                        <button type="submit" class="btn btn-success" onclick="return Swal.fire(
                            'Donnée enregistrer!',
                         
                          )" >{{ __('Add') }}</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>

@endsection
