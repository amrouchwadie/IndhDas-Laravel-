@extends('layouts.main-app2')

@section('styles')

@endsection


@section('content')
<div class="container">
    <div class="content">
    <h1>CONCOURS DES IDEES</h1>
    <ul class="page-breadcrumb">
       
        <li>Concours des Idées</li>
        <li>Détaille</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <br>


    <h3 style="text-align: center;color:brown;font-family: Arial, Helvetica, sans-serif"> <b>{{$appelprojets->titre}}</b></h3> 


   
                                                
                                                <table style="border-collapse: collapse; width: 101.42%; height: 144px;" border="1">
                                                    <tbody>
                                                        <tr>
                                                            <td>>
                                                          
                                                                <p style="text-align: center;font-size: 110%">{{$appelprojets->description}}.</p>
                                                           
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table style="margin-left: auto; margin-right: auto;">
                                                    <tbody>
                                                    <tr>
                                                    <td style="width: 48.8162%; text-align: center;">
                                                    
                                                        <b>{{__('Nomination form')}}</b> 
                                                        <hr>
                                                    @if ($appelprojets->formulaire == true)
                                                    <a  class="btn btn-danger sm-btn" role="button" href="{{URL::to('formulaire/'.$appelprojets->formulaire)}}"> 
                                                        <span style="color: white"><b>{{__('Download')}}</b></span>  
                                                        </a>
                                                    @else
                                                    <b> {{__('Not yet defined')}}</b>  
                                                    @endif
                                                        <br>    <br>
                                                        @if ($appelprojets->formulaire == true)
                                                        
                                                        <iframe class="word" src="https://docs.google.com/gview?url={{URL::to('formulaire/'.$appelprojets->formulaire)}}&embedded=true" width="400" height="400" style="border: 1px solid black;" ></iframe>
                                                        @else

                                                        @endif


                                                        <br>
                                                        

                                                    </td>
                                                    <td style="width: 3.07766%;">&nbsp;</td>
                                                    <td style="width: 48.106%; text-align: center;">   <b>  {{__('Announcement of Contest')}}</b>  
                                                        <hr>
                                                        @if ($appelprojets->announce == true)
                                                        <a class="btn btn-danger sm-btn" role="button" href="{{URL::to('announce/'.$appelprojets->announce)}}">
                                                         <span style="color: white"><b>{{__('Download')}}</b> </span>   
                                                        </a>
                                                        @else
                                                          <b>{{__('Not yet defined')}}</b>  
                                                        @endif
                                                        <br>    <br>
                                                        @if ($appelprojets->announce == true)
                                                        <iframe src='{{URL::to('announce/'.$appelprojets->announce)}}' width="400" height="400" style="border: 1px solid black;"/>
                                                            @else
                                                            @endif
                                                        
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                    </table>



                                            
                                       
           

    
@endsection