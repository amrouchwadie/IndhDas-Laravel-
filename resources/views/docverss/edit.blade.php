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
                
                <form action="{{route('docverss.update',['language' => app()->getLocale(),'id' => $Docverss->id])}}" method="post" enctype="multipart/form-data">  
                    @csrf
                    @method('PUT')
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{__('Title')}}</b></label><br>
                            {{$Docverss->pdf}}"
                            <input type="file" placeholder="file" class="form-control" id="pdf" name="pdf" value="{{$Docverss->pdf}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{__('Version')}}</b></label>
                    <select name="version_id" class="form-control" id="version_id">

                        <option selected>{{__('Version')}}</option>
                    @foreach ($versions as $version )
                  
                        <option value="{{$version->id}}" {{ $version->id == $Docverss->version_id  ? 'selected' : '' }} >{{$version->titre}}</option>
                      
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