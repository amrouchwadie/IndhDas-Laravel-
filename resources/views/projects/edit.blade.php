@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')



<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">{{ __('Update a Project') }}  </h3>
                <hr>
                
                    <form action="{{route('projects.update',['language' => app()->getLocale(),'id' =>$projects->id])}}" method="post" enctype="multipart/form-data">  
                        @csrf
                        @method('PUT')
                               
                
                        <div class="form-group">
                            <label for="label"><b>{{ __('Title') }}</b></label>
                            <input type="text" placeholder="{{ __('Title') }}" class="form-control" id="titre" name="titre" value="{{$projects->titre}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{ __('Subject') }}*</b></label>
                            <textarea type="text" placeholder="description" class="form-control" id="description" name="description" value="{{$projects->description}}" > {{$projects->description}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="label"><b>{{ __('Youtube Video Link') }}</b></label>
                            <input type="text" placeholder="Lien" class="form-control" id="link" name="link" value="{{$projects->link}}" >
                        </div>
                    

                        
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>

@endsection

