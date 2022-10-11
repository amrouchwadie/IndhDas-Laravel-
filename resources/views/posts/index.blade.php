@extends('layouts.main-app')

@section('styles')
<head>
    <style>
        table td p {
            word-break: break-all;
        }
    </style>
</head>
@endsection

@section('content')

<div class="container mt-4">
    <div class="row">

             <div class="col-xl-8 text-right">
            <a href="{{ route('posts.create',app()->getLocale())}}" class="btn btn-info"> {{ __('Add News') }} </a>
        </div>
        <div class="col-xl-4">
            <h3 class="text-right font-weight-bold"> {{ __('News') }}</h3>
        </div>

   
    </div>


      <div class="table-responsive mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> id </th>
                    <th style="width:30%;"> {{ __('Title') }} </th>
        
                    <th>action </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <tr>
                            <td> {{ $post->id }} </td>
                            <td style="text-align: right"> {{ $post->title }} </td>
                          
                            <td>   <form action="{{ route('posts.destroy', ['language' => app()->getLocale(),'id' => $post->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" >{{ __('Delete') }}</button>
                              </form></td>
                              <td><a href="{{ route('posts.edit',['language' => app()->getLocale(),'id' => $post->id]) }}" class="btn btn-success">{{ __('Update') }}</a></td>

                              <td><a href="{{ route('posts.show',['language' => app()->getLocale(),'id' => $post->id]) }}" class="btn btn-info">{{ __('Detail') }}</a></td></td>
                        </tr>
                    @endforeach

                @else
                        <tr>
                            <td colspan="3"> <p class="text-danger text-center"> {{ __('No news has been found') }}</p> </td>
                        </tr>
                @endif
            </tbody>
        </table>
      </div>



  </div>



@endsection
