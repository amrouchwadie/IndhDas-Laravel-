@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Message</th>
        <th>Plus</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
    
      <tr>
        <th scope="row">1</th>
        <td>{{$message->name}}</td>
        <td>{{$message->email}}</td>
        <td>{{\Illuminate\Support\Str::limit($message->message, 8)}}</td>
        <td>     <a class="btn btn-primary" href="{{ route('messages.show',['language' => app()->getLocale(),'id' => $message->id]) }}">  Detaills</a></td>
      </tr>
            
      @endforeach
    </tbody>
  </table>

@endsection