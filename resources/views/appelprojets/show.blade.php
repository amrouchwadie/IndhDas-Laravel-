@extends('layouts.main-app')
<head>
    <link rel="stylesheet" href="../assets/css/style-email.css">
</head>
@section('styles')

@endsection

@section('content')




<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="content-page wide-md m-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal" style="text-align: center">{{__('Project Ideas Contest')}}
                            </h2>
                            <div class="nk-block-des">
                                <p class="lead" style="text-align: center">{{$appelprojets->titre}}</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                              
                                <table class="email-wraper">
                                    <tr>
                                        <td class="py-5">
                                            <table class="email-header">
                                                <tbody>
                                                    <tr>
                                                     
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="email-body">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-3 p-sm-5">
                                                      
                                                            <p style="text-align: right;font-size: 110%">{{$appelprojets->description}}.</p>
                                                       
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table style="margin-left: auto; margin-right: auto;">
                                                <tbody>
                                                <tr>
                                                <td style="width: 33.3333%;text-align: center;">
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

                                                        
                                                    </td>
                                                <td style="width: 33.3333%;">&nbsp;</td>
                                                <td style="width: 33.3333%;text-align: center;">
                                                <b>  {{__('Announcement of Contest')}}</b>  
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
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


























@endsection