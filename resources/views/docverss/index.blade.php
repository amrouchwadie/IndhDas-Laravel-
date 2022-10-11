@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')
<a href="{{ route('docverss.create',app()->getLocale())}}" class="btn btn-primary">{{__('Add Document')}} </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
    
        <th >Pdf</th>
        <th >Version</th>
        <th >Action</th>
         <th ></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Docverss as $Docvers)
        
      <tr>
        
        <th scope="row">{{$Docvers->id}}</th>

        
      
        <td><a href="{{URL::to('documents/'.$Docvers->pdf)}}">{{$Docvers->pdf}}</a></td>
        <td>

          <select style="background-color: white;border:0;outline:0" name="version_id" class="form-control" id="version_id" disabled="true">

           
        @foreach ($versions as $version )
      
            <option value="{{$version->id}}" {{ $version->id == $Docvers->version_id  ? 'selected' : '' }} >{{$version->titre}}</option>
          
        @endforeach
    </select>

        </td>
        <td>
          <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  href="{{ route('docverss.edit',['language' => app()->getLocale(),'id' => $Docvers->id]) }}">{{__('Update')}}</a>
        </td>
      
        <td>   
           <form action="{{ route('docverss.destroy', ['language' => app()->getLocale(),'id' => $Docvers->id])}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >{{__('Delete')}}</button>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
<script>

  
$('#version_id').val();
</script>
  @endsection