@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')


<div class="container">
<div class="content">
<h1>INFORMATION</h1>
<ul class="page-breadcrumb">
   
    <li>Info</li>
    <li>Media/Youtube</li>
</ul>
</div>
</div>
</div>
</section>
<br>
@foreach ($projects as $project)

<div class="container">
<h3 style="text-align: right"> {{$project->titre}}</h3></div>
<hr>
<div class="container">
    <div class="row">
      <div class="col" style="text-align: right">
     <h6 style="text-align: left">  {{$project->description}}</h6> 
      </div>
      <div class="col">
        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/i-kCb7vwMYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$project->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                    
      </div>
    </div>
</div>

@endforeach

@endsection