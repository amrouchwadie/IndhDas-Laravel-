@extends('layouts.main-app')

@section('styles')

@endsection
<style>
    #area
{
text-align:right;
}

</style>
@section('content')
<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">Ajouter un appel projets </h3>
                <hr>
                
                    <form action="{{route('appelprojets.index',app()->getLocale())}}" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}       
                               
                        <div class="form-group">
                                 <input type="hidden" name="_token" value="{{Session::token()}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="label"><b>titre</b></label>
                            <input type="text" id="area" placeholder="titre" class="form-control" id="titre" name="titre" >
                        </div>

               
                        <div class="form-group">
                            <label for="label"><b>description*</b></label>
                            <textarea type="text" id="area" placeholder="description" class="form-control" id="description" name="description" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="label"><b>date debut</b></label>
                            <input type="date" placeholder="datedebut" class="form-control" id="datedebut" name="datedebut" >
                        </div>

                        <div class="form-group">
                            <label for="label"><b>date fin</b></label>
                            <input type="date" placeholder="datefin" class="form-control" id="datefin" name="datefin" >
                        </div>
                        <br>
                            <div class="row">
                              <div class="col">
                                <label for="label"><b>announce</b></label>
                                <input type="file" placeholder="datefin" class="form-control" id="announce" name="announce" >
                              </div>
                              <div class="col">
                                <label for="label"><b>formulaire</b></label>
                                <input type="file" placeholder="datefin" class="form-control" id="formulaire" name="formulaire" >
                              </div>
                            </div>
                            <br>
                           

                        <br>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>



@endsection