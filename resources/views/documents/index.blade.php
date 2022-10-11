@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')


    <div class="file-content">
      <div class="card">
        <div class="card-header">
          <div class="media">
            <form class="form-inline" action="#" method="get">
              <div class="form-group mb-0">                                      <i class="fa fa-search"></i>
                <input class="form-control-plaintext" type="text" placeholder="Search..." data-bs-original-title="" title="">
              </div>
            </form>
            <div class="media-body text-end">
                <a href="{{ route('documents.create',app()->getLocale())}}" class="btn btn-primary">{{__('Add Document')}} </a>
            
            </div>
          </div>
        </div>

        <div class="card-body file-manager">
          <h4 class="mb-3">All Files</h4>
    
      
          <h6 class="mt-4">Folders</h6>
          <ul class="folder">
         @foreach ($documents as $document)
             
   
            <li class="folder-box">
              <div class="media"><i class="fa fa-folder f-82 txt-warning"></i>
                <div class="media-body ms-3">
                    <a href="{{ route('documents.show',['language' => app()->getLocale(),'id' => $document->id]) }}">      <h5 class="mb-0"> {{$document->name}}</h5></a>
                   <br>
                    <table>
                        <tbody>
                        <tr>
                        <td >    <a href="{{ route('documents.edit',['language' => app()->getLocale(),'id' => $document->id]) }}" class="btn ">🖋️</a></td>
                        <td > <form action="{{ route('documents.destroy', ['language' => app()->getLocale(),'id' => $document->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn " data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >🗑️</button>
                          </form></td>
                        </tr>
                        </tbody>
                        </table>
                
                   
                  
                </div>
                
              </div>
              
            </li>
            @endforeach
        
          </ul>
      
      </div>
    </div>
  </div>

@endsection