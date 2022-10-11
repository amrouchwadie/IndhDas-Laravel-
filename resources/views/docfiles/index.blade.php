
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
              <a href="{{ route('docfiles.create',app()->getLocale())}}" class="btn btn-primary">{{__('Add File')}} </a>
          
          </div>
        </div>
      </div>
        <div class="card-body file-manager">
          <h4 class="mb-3">All Files</h4>
          <h6>Recently opened files</h6>
          <ul class="files">
       
    @foreach ($docfiles as $docfile)
          
     
            <li class="file-box">
              <div class="file-top"> <a href="{{URL::to('files/'.$docfile->file)}}"> <i class="fa fa-file-text-o txt-info"></i></a> 
               <a role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v f-14 ellips"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                 
                    <a class="dropdown-item btn-info" href="{{ route('docfiles.edit',['language' => app()->getLocale(),'id' => $docfile->id]) }}" style="text-align: center" > Editer</a>
                    <a class="dropdown-item btn-danger" href="#"> <form action="{{ route('docfiles.destroy', ['language' => app()->getLocale(),'id' => $docfile->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn " data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >Supprimer</button>
                      </form></a>
                  </div>

                </div>
              <div class="file-bottom">
                <h6>{{$docfile->name}} </h6>
                <p class="mb-1">{{$docfile->file}}</p>
                <p> <b>upload : </b>{{$docfile->created_at}}</p>
              </div>
            </li>

    @endforeach
          </ul>
      
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  @endsection