@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')
<a href="{{ route('documents.cree',['language' => app()->getLocale(),'id' => $documents->id])}}" class="btn btn-primary">{{__('Add File')}} </a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">File</th>
        <th scope="col">Action</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($docfiles as $docfile)
            
     
      <tr>
        <th scope="row">{{$docfile->id}}</th>
        <td>{{$docfile->name}}</td>
        <td> <a href="{{URL::to('files/'.$docfile->file)}}" class="btn btn-primary">{{__('Download')}} </a></td>

        <td>  <a href="{{ route('docfiles.edit',['language' => app()->getLocale(),'id' => $docfile->id]) }}" class="btn btn-warning">🖋️</a></td>
        <td>    <form action="{{ route('docfiles.destroy', ['language' => app()->getLocale(),'id' => $docfile->id])}}" method="post">
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