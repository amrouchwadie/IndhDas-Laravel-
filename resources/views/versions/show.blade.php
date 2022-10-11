@extends('layouts.main-app')

@section('styles')

@endsection

@section('content')
<style>
    /*-- simple responsive container
 /*-- match aspect ratio of iframe source
 /*-- example: 16/9 = 62.5%
 */
 
 .responsive-container {
   position: relative;
   width: 100%;
   max-width: 100%;
   height: 0;
   padding-bottom: calc(75.05% - 38px); /*38px is height of control container below the slides*/
   border: 1px solid #cacaca;
   overflow: hidden;
 }
 
 .responsive-container iframe {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   max-width: 100%;
   height: 100%;
 } 
 </style>
@foreach ($Docverss as $Docvers)

<div class="responsive-container">
  <iframe id="slideshareframe" src="{{URL::to('documents/'.$Docvers->pdf)}}" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen> </iframe>
</div>

  

             
              
    
        
         @endforeach
@endsection