@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')


<a href="{{ route('versions.create',app()->getLocale())}}" class="btn btn-success">{{ __('Add Version') }}</a>
<br> <br>





{{-- <div class="row"> --}}

  <div class="container-fluid">
    <div class="row">
@foreach ($versions  as $version)
    

    <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
      <div class="card custom-card p-0">
        <div class="card-header"><img class="img-fluid" src="https://cdn.allthings.how/wp-content/uploads/2021/07/allthings.how-how-to-show-file-extension-in-file-explorer-on-windows-11-file-list-in-folder.png" alt=""></div>
        <div class="card-profile"><img class="rounded-circle" src="/assets/images/avtar/file1.png" alt=""></div>

        <div class="text-center profile-details">
          <h6>{{$version->titre}}</h6>
          <h6>{{$version->description}}</h6>
         
        </div>
        <div class="card-footer row">
          <div class="col-4 col-sm-4">
            
            <h5 class="counter"> <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  href="{{ route('versions.edit',['language' => app()->getLocale(),'id' =>$version->id]) }}">{{ __('Update') }}</a></h5>
          </div>
          <div class="col-4 col-sm-4">
           
            <h5><span class="counter"><form action="{{ route('versions.destroy', ['language' => app()->getLocale(),'id' =>$version->id])}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >{{ __('Delete') }}</button>
            </form></span></h5>
          </div>
          <div class="col-4 col-sm-4">
          
            <h5><span class="counter"><a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  href="{{ route('versions.show',['language' => app()->getLocale(),'id' =>$version->id]) }}">{{ __('Detail') }}</a></span></h5>
          </div>
        </div>
      </div>
    </div>




  
  @endforeach
</div>
  </div>

  
  @endsection