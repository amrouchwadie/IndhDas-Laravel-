@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')
<a href="{{ route('files.cree',['language' => app()->getLocale(),'id' => $files->id])}}" class="btn btn-primary">{{__('Add File')}} </a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">File</th>
        <th scope="col">Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($filespics as $filespic)
            
     
      <tr>
        <th scope="row">{{$filespic->id}}</th>
        <td> 
            <div class="media">
                <img src="{{URL::to('files/'.$filespic->picture)}}" width="10%" class="mr-3" alt=" {{$filespic->picture}}">
                <div class="media-body">
                
              </div>

           </td>
        <td> <a href="{{URL::to('files/'.$filespic->picture)}}" class="btn btn-primary">{{__('Download')}} </a></td>

        <td>  <a href="{{ route('filespics.edit',['language' => app()->getLocale(),'id' => $filespic->id]) }}" class="btn btn-warning">🖋️</a></td>
        <td>    <form action="{{ route('filespics.destroy', ['language' => app()->getLocale(),'id' => $filespic->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >🗑️</button>
          </form>
      </td>
      </tr>
        @endforeach
    </tbody>
  </table>

@endsection