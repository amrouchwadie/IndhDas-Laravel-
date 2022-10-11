@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')
<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">Mise a jour le Fielde </h3>
                <hr>
                
                <form action="{{route('newss.update',$newss->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>Nom</b></label>
                            <input type="text" placeholder="Nom Field" class="form-control" id="name" name="name" value="{{$newss->name}}" >
                        </div>
                        
              

                    <br>

                        
                        <button type="submit" class="btn btn-success">Sauvgarde</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>

@endsection