@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')
<div class="container">
    <div class="content">
    <h1>CONCOURS DES IDEES</h1>
    <ul class="page-breadcrumb">
       
        <li>Concours des Idées</li>
        <li>Détaille</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <br>
    <h2 style="color: brown;text-align: center"><b>ANONOUNCE CONCOURS</b> 
       
    </h2>


    @foreach ($appelprojets as $appelprojet)
    

    <div class="container">
        <div class="row">
            <h3 style="text-align: right">{{$appelprojet->titre}}</h3>
            <hr>
            <div class="col-8" style="text-align: right;font-size:150%">
           <span ><b> {{$appelprojet->description}} </b></span>    
            </div>
    
            <div class="col-4">
                <h6>   {{$appelprojet->datedebut}}  <span style="color: red"> <b>: {{__('Start date')}} </b></span> </h6> 
                <br>
    
    
             <h6>  {{$appelprojet->datefin}}    <span style="color: red"><b>: {{__('End date')}} </b> </span>  </h6> 
    
    
            </div>
     
          </div>
          <br>
          <a href="{{ route('appelprojets.display',['language' => app()->getLocale(),'id' => $appelprojet->id]) }}" class="btn btn-primary"><b>{{__('Consult')}}</b></a>
        </div>
        <hr>
        <br>
        @endforeach





@endsection