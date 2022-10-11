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
                
                    <form action="{{route('filespics.index',app()->getLocale())}}" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}       
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
               
                        <div class="form-group">
                            <label for="label"><b>{{__('File')}}</b></label>
                            <input type="file" placeholder="picture" class="form-control" id="picture" name="picture"  accept="image/*" multiple>
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>{{__('picture')}}</b></label>
                            
                            
                    <select name="files_id"  class="form-control" id="files_id" >

                    
                    @foreach ($files as $file)
                        
                    
                            
                 
                        <option value="{{$file->id}}"  selected>{{$file->name}}</option>
                    
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
<script>
    
</script>
@endsection