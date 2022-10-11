@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">Mise ajour  un appel projets </h3>
                <hr>
                
          
                        <form action="{{route('appelprojets.update',$appelprojets->id)}}" method="post" enctype="multipart/form-data">  
                            @csrf
                            @method('PUT')  
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>titre</b></label>
                            <input type="text" placeholder="titre" class="form-control" id="titre" name="titre" value="{{$appelprojets->titre}}">
                        </div>

               
                        <div class="form-group">
                            <label for="label"><b>description*</b></label>
                            <textarea type="text" placeholder="description" class="form-control" id="description" name="description" value="{{$appelprojets->description}}" >{{$appelprojets->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="label"><b>date debut</b></label>
                            <input type="date" placeholder="datedebut" class="form-control" id="datedebut" name="datedebut" value="{{$appelprojets->datedebut}}" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>date fin</b></label>
                            <input type="date" placeholder="datefin" class="form-control" id="datefin" name="datefin" value="{{$appelprojets->datefin}}" >
                        </div>
                        <br>
                            <div class="row">
                              <div class="col">
                                <label for="label"><b>announce</b></label>
                                <input type="file" placeholder="datefin" class="form-control" id="announce" name="announce" value="{{$appelprojets->announce}}" > {{$appelprojets->announce}}
                              </div>
                              <div class="col">
                                <label for="label"><b>formulaire</b></label>
                                <input type="file" placeholder="datefin" class="form-control" id="formulaire" name="formulaire" value="{{$appelprojets->formulaire}}" >{{$appelprojets->formulaire}}
                              </div>
                            </div>
                            <br>
                            

                        <br>
                        <button type="submit" class="btn btn-success">Sauvgarde</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>



@endsection

