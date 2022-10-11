
@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')



 <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-3"><a href="{{ route('newss.create',app()->getLocale())}}" class="btn btn-primary">{{ __('Add Sector') }}</a></h5><span>
       
 
       
          <table class="table" >
            <thead>
              <tr>
                <th>#</th>
                <th>{{ __('Name') }}</th>
                <th>action</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($newss as $news)
                <tr>
                    <td>{{$news->id}}</td>
                    <td>{{$news->name}}</td>
                    <td><a href="{{ route('newss.edit',['language' => app()->getLocale(),'id' =>$news->id]) }}" class="btn btn-success">{{ __('Update') }}</a></td>
                    <td>    <form action="{{ route('newss.destroy', ['language' => app()->getLocale(),'id' =>$news->id])}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >{{ __('Delete') }}</button>
                    </form>
                  </td>
                    <td><a href="{{ route('newss.show',['language' => app()->getLocale(),'id' =>$news->id]) }}" class="btn btn-primary">{{ __('Detail') }}</a></td>
                
                  </tr>
                @endforeach
      
    
            </tfoot>
          </table>
        </div>
      </div>



  @endsection