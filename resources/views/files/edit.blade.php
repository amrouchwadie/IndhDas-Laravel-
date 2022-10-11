@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')


<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">{{__('Update Document')}}</h3>
                <hr>
                
                <form action="{{route('files.update',['language' => app()->getLocale(),'id' => $files->id])}}" method="post" enctype="multipart/form-data">  
                    @csrf
                    @method('PUT')
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{__('Title')}}</b></label><br>
                         
                            <input type="text" placeholder="name" class="form-control" id="name" name="name" value="{{$files->name}}" >
                        </div>
                        
                      
                    <br>

                        
                        <button type="submit" class="btn btn-success">Sauvgarde</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>


@endsection