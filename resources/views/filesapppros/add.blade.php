
@extends('layouts.app')

@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">Ajouter des doc pour appel projets </h3>
                <hr>
                
                    <form action="{{route('filesapppros.index')}}" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}       
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>announce</b></label>
                            <input type="file" placeholder="announce" class="form-control" id="announce" name="announce" >
                        </div>
                        
                        <div class="form-group">
                            <label for="label"><b>formulaire*</b></label>
                            <input type="file" placeholder="formulaire" class="form-control" id="formulaire" name="formulaire" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>choix prémaire</b></label>
                            <input type="file" placeholder="firstpick" class="form-control" id="firstpick" name="firstpick" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>found de projet</b></label>
                            <input type="file" placeholder="projectfunds" class="form-control" id="projectfunds" name="projectfunds" >
                        </div>
                       

                        <select name="files_id" class="custom-select" id="files_id">

                            <option selected>files</option>
                        @foreach ($appelprojets as $appelprojets )
                      
                            <option value="{{$appelprojets->id}}" >{{$appelprojets->titre}}</option>
                          
                        @endforeach
                    </select>
                    <br>
                        
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>

@endsection