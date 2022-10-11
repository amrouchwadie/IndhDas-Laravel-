@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')


<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">{{__('Update Files')}}</h3>
                <hr>
                
                <form action="{{route('filespics.update',['language' => app()->getLocale(),'id' => $filespics->id])}}" method="post" enctype="multipart/form-data">  
                    @csrf
                    @method('PUT')
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
          

                        <div class="form-group">
                            <label for="label"><b>{{__('picture')}}</b></label><br>
                            {{$filespics->picture}}"
                            <input type="file" placeholder="picture" class="form-control" id="picture" name="picture" value="{{$filespics->picture}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{__('Files')}}</b></label>
                    <select name="files_id"  class="form-control" id="files_id">

                        <option selected>{{__('Files')}}</option>
                    @foreach($files as $file )
                  
                        <option value="{{$file->id}}" {{ $file->id == $filespics->files_id  ? 'selected' : '' }} readonly>{{$file->name}}</option>
                      
                    @endforeach
                </select>
                        </div>
                    <br>

                        
                        <button type="submit" class="btn btn-success">Sauvgarde</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>



@endsection