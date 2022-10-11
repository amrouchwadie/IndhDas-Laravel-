
@extends('layouts.app')

@section('content')

<a href="{{ route('filesapppros.create')}}" class="btn btn-primary">Ajouter fichiers</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">announce</th>
        <th scope="col">formulaire</th>
        <th scope="col">list premaire</th>
        <th scope="col">projet funded</th>
        <th scope="col">action</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($filesapppros as $filesapppro)
            
      
        <tr>
        <th scope="row">{{$filesapppro->id}}</th>
        <td>{{$filesapppro->announce}}</td>
        <td>{{$filesapppro->formulaire}}</td>
        <td>{{$filesapppro->firstpick}}</td>
        <td>{{$filesapppro->projectfunds}}</td>

      </tr>
      @endforeach
   
    </tbody>
  </table>

@endsection