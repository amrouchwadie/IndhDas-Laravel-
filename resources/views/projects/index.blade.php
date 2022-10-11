@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')




 <a href="{{ route('projects.create',app()->getLocale())}}" class="btn btn-primary">{{ __('Add Project') }}</a>
@foreach ($projects as $project)

<div class="container">
<h3 style="text-align: right"> {{$project->titre}}</h3></div>
<hr>
<div class="container">
    <div class="row">
      <div class="col" style="text-align: right">
     <h6>  {{$project->description}}</h6> 
      </div>
      <div class="col">
        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/i-kCb7vwMYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$project->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                    
      </div>
    </div>
</div>
<table>
  <tbody>
  <tr>
  <td><a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  href="{{ route('projects.edit',['language' => app()->getLocale(),'id' =>$project->id]) }}">{{ __('Update') }}</a>  
  </td>
  <td>

    <form action="{{ route('projects.destroy', ['language' => app()->getLocale(),'id' =>$project->id])}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >{{ __('Delete') }}</button>
    </form>


  </td>
  </tr>
  </tbody>
  </table>
{{-- <a class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  href="{{ route('projects.edit',$project->id) }}">editer</a>    --}}

@endforeach
<hr>
@endsection