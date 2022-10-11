@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')


<a href="{{ route('appelprojets.create',app()->getLocale())}}" class="btn btn-success">{{__('Add')}} {{__('Idea Competition')}}</a>

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
      <span >
        <table style="margin-left: 51%">
            <tbody>
            <tr>
            <td >  <a href="{{ route('appelprojets.show',['language' => app()->getLocale(),'id' => $appelprojet->id]) }}" class="btn btn-primary"><b>{{__('Detail')}}</b></a></td>
            <td ><a href="{{ route('appelprojets.edit',['language' => app()->getLocale(),'id' => $appelprojet->id]) }}" class="btn btn-success">{{__('Update')}}</a></td>
            <td >   <form action="{{ route('appelprojets.destroy', ['language' => app()->getLocale(),'id' => $appelprojet->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >{{__('Delete')}}</button>
              </form></td>
            </tr>
            </tbody>
            </table>
    
        
   
    </span>
    </div>
    <br>
    @endforeach
@endsection