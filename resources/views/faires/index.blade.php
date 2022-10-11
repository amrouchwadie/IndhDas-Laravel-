
@extends('layouts.main-app')

@section('styles')
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
  <title>Cuba - Premium Admin Template</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/todo.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
</head>
<style>
  
</style>
@endsection

@section('content')


    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>{{ __('Todo') }}</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">INDH</li>
              <li class="breadcrumb-item active">{{ __('Todo') }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h5>{{ __('Organize your day') }}</h5>
            </div>
            <div class="card-body">
              <div class="todo">
                <div class="todo-list-wrapper">
                  <div class="todo-list-container">
                  
                    <div class="todo-list-body">
                      <ul>
                      
                        @foreach ($faires as $faire)
                     
                            
                      
                        <li class="task">
                            <div class="task-container">
                              <table >
                                <tbody>
                                <tr>
                                <td style="width: 90%;">
                                  
                                  @if ($faire->checked == true)
                                  <h4 class="task-label" style=" text-decoration: line-through;">{{$faire->description}}</h4>
                                  @else
                                  <h4 class="task-label" >{{$faire->description}}</h4>
                                  @endif
                                  

                                </td>
                                <td style="width: 10%%;"><form action="{{ route('faires.destroy', $faire->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="submit"  onclick="return confirm('Etes-vous sûr de la suppression?');" ><i class="icon"><i class="icon-trash"></i></i></button>
                                </form>
                              </td>

                                <form action="{{route('faires.update',$faire->id)}}" method="POST">
                                  @csrf
                                  @method('PUT')
                                  
                                <td style="width: 5%;"> 
                                  @if ($faire->checked == true)
                                  <input type="hidden" class="form-control" id="description" placeholder="Enter the Tache"
                                  name="description" value="{{$faire->description}}"/>
                                  <input class="action-box large complete-btn" type="checkbox" name="checked" title="Mark Complete" value="{{$faire->checked}}" @checked(true)>
                                
                                  @else
                                  <input type="hidden" class="form-control" id="description" placeholder="Enter the Tache"
                                  name="description" value="{{$faire->description}}"/>
                                  <input type="checkbox" name="checked" class="action-box large complete-btn" title="Mark Complete" value="1" @checked(false)>
                                  
                                  @endif   
                                  {{-- <span class="action-box large complete-btn" title="Mark Complete"><i class="icon-check"></i></i></span></span> --}}
                                </td>
                                <td style="width: 10%;">  <button class="btn btn-success ms-3 add-new-task-btn" id="add-task">{{ __('Check') }}</button></td>
                              </form>
                                </tr>

                                </tbody>
                                </table>
                              
                           
                            </div>
                          </li>
                       
                        @endforeach
                    
               
                      
                  
                    
                    
                     
                      </ul>
                    </div>
                    <div class="todo-list-footer">
                      <div class="add-task-btn-wrapper"><span class="add-task-btn">
                          <button class="btn btn-primary"><i class="icon-plus"></i> {{ __('Add new task') }}</button></span></div>

                     <form action="{{route('faires.store',app()->getLocale())}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}       
                               
                      <div class="form-group">
                               <input type="hidden" name="_token" value="{{Session::token()}}">
                         
                      </div>
                      <div class="new-task-wrapper">
                        <textarea class="form-control" id="description" placeholder="Entrer une Tache"
                        name="description"></textarea>
                        <span class="btn btn-danger cancel-btn" id="close-task-panel">{{ __('Close') }}</span>
                        <button class="btn btn-success ms-3 add-new-task-btn" id="add-task">{{ __('Add') }}</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                <div class="notification-popup hide">
                  <p><span class="task"></span><span class="notification-text"></span></p>
                </div>
              </div>
              <!-- HTML Template for tasks-->
              <script id="task-template" type="tect/template">
                <li class="task">
                <div class="task-container">
                <h4 class="task-label"></h4>
                <span class="task-action-btn">
                <span class="action-box large delete-btn" title="Delete Task">
                <i class="icon"><i class="icon-trash"></i></i>
                </span>
                <span class="action-box large complete-btn" title="Mark Complete">
                <i class="icon"><i class="icon-check"></i></i>
                </span>
                </span>
                </div>
                </li>
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
    <!-- Container-fluid ends                    -->
  </div>
  <!-- footer start-->
  
</div>
</div>
<script src="/assets/js/sidebar-menu.js"></script>
<script src="/assets/js/todo/todo.js"></script>
<script src="/assets/js/tooltip-init.js"></script>
@endsection