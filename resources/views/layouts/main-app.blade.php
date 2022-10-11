<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Das - Division des affairs sociale</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="/images/favicon.ico" />
        <!-- Bootstrap CSS -->
  
     </head>

    
    @yield('styles')
  </head>
  <body >
   
        @include('layouts.navigation') 
      
        <div class="page-body">
            <div class="container-fluid">        
              <div class="page-title">
                
                   
                    
                                    
                             
        @if(Session::has('success'))
          <div class="alert alert-success mt-2">{{Session::get('success')}}</div>
        @endif
      
       
        @yield('content')

   
    @yield('scripts')

   


  </body>
</html>