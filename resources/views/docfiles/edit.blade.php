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
                
                <form action="{{route('docfiles.update',['language' => app()->getLocale(),'id' => $docfiles->id])}}" method="post" enctype="multipart/form-data">  
                    @csrf
                    @method('PUT')
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{__('Name')}}</b></label>
                            <input type="text" placeholder="Name" class="form-control" id="name" name="name" value="{{$docfiles->name}}"  >
                        </div>


                        <div class="form-group">
                            <label for="label"><b>{{__('File')}}</b></label><br>
                            {{$docfiles->file}}"
                            <input type="file" placeholder="file" class="form-control" id="file" name="file" value="{{$docfiles->file}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{__('Doocuments')}}</b></label>
                    <select name="document_id"  class="form-control" id="document_id">

                        <option selected>{{__('Document')}}</option>
                    @foreach($documents as $document )
                  
                        <option value="{{$document->id}}" {{ $document->id == $docfiles->document_id  ? 'selected' : '' }} readonly>{{$document->name}}</option>
                      
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