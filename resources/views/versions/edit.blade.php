@extends('layouts.main-app')

@section('styles')

@endsection
@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">{{ __('Update') }} version </h3>
                <hr>
                
                    <form action="{{route('versions.update',['language' => app()->getLocale(),'id' =>$versions->id])}}" method="post" enctype="multipart/form-data">  
                        @csrf
                        @method('PUT')
                               
                
                        <div class="form-group">
                            <label for="label"><b>{{ __('Title') }}</b></label>
                            <input type="text" placeholder="{{ __('Title') }}" class="form-control" id="titre" name="titre" value="{{$versions->titre}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{ __('Description') }}*</b></label>
                            <textarea type="text" placeholder="{{ __('Description') }}" class="form-control" id="description" name="description" value="{{$versions->description}}" > {{$versions->description}}</textarea>
                        </div>

                    
<br>
                        
                        <button type="submit" class="btn btn-success">{{ __('Update') }}</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>

@endsection