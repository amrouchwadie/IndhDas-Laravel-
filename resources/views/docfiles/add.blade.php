@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')
<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">{{__('Add File')}} </h3>
                <hr>
                
                    <form action="{{route('docfiles.index',app()->getLocale())}}" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}       
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>{{__('Name')}}</b></label>
                            <input type="text" placeholder="Name" class="form-control" id="name" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>{{__('File')}}</b></label>
                            <input type="file" placeholder="file" class="form-control" id="file" name="file" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{__('Document')}}</b></label>
                    <select name="document_id" class="form-control" id="document_id">

                        <option selected>{{__('Document')}}</option>
                    @foreach ($documents as $document )
                  
                        <option value="{{$document->id}}" >{{$document->name}}</option>
                      
                    @endforeach
                </select>
                        </div>
                    <br>

                        
                        <button type="submit" class="btn btn-success">{{__('Add')}}</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>

@endsection