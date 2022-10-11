<!DOCTYPE html>
<html lang="fr">
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
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
  </head>
  <body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="/assets/images/logo/logo-fr-indh.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
              <li class="mega-menu outside"><a class="nav-link" href="#!"><i data-feather="layers"></i><span></span></a>

              </li>
              <li class="level-menu outside"><a class="nav-link" href="#!"><i data-feather="inbox"></i><span></span></a>
                <ul class="header-level-menu menu-to-be-close">
                  <li><a href="file-manager.html" data-original-title="" title="">                               <i data-feather="git-pull-request"></i><span>File manager    </span></a></li>
                  <li><a href="#!" data-original-title="" title="">                               <i data-feather="users"></i><span>Users</span></a>
                    <ul class="header-level-sub-menu">
                      <li><a href="file-manager.html" data-original-title="" title="">                               <i data-feather="user"></i><span>User Profile</span></a></li>
                      <li><a href="file-manager.html" data-original-title="" title="">                               <i data-feather="user-minus"></i><span>User Edit</span></a></li>
                      <li><a href="file-manager.html" data-original-title="" title="">                               <i data-feather="user-check"></i><span>Users Cards</span></a></li>
                    </ul>
                  </li>
                  <li><a href="kanban.html" data-original-title="" title="">                               <i data-feather="airplay"></i><span>Kanban Board</span></a></li>
                  <li><a href="bookmark.html" data-original-title="" title="">                               <i data-feather="heart"></i><span>Bookmark</span></a></li>
                  <li><a href="social-app.html" data-original-title="" title="">                               <i data-feather="zap"></i><span>Social App                     </span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang">
                      <i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français <span> (FR)</span>
                  </div>
                  <div class="more_lang">

                    <div class="lang" >
                      <a data-attr="rtl" class="active" href="{{route(Route::currentRouteName(), 'ar')}}">
                      <i class="flag-icon flag-icon-ma"></i><span class="lang-txt">العربية <span> (MA)</span></span>
                    </a>
                    </div>
                    <div class="lang" >
                      <a href="{{route(Route::currentRouteName(), 'ma')}}">
                      <i class="flag-icon flag-icon-ma"></i><span class="lang-txt">ⴰⵎⴰⵣⵉⴳⵀ <span></span></span>
                    </a>
                    </div>
                    <div class="lang" >
                      <a href="{{route(Route::currentRouteName(), 'fr')}}">
                      <i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span>
                    </a>
                    </div>
                    <div class="lang">
                      <a href="{{route(Route::currentRouteName(), 'en')}}">
                      <i class="flag-icon flag-icon-gb"></i><span class="lang-txt">English</span>
                    </a>
                    </div>

                  </div>
                </div>
              </li>

              <li>                         <span class="header-search"><i data-feather="search"></i></span></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">
                  @php
                      $results = DB::table('faires')->count();
                      if ($results != null) {
                        echo $results;
                      }else{
                        echo '';
                      }
                  @endphp </span></div>
                <div class="onhover-show-div notification-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Notitications                               </h6>
                  <ul>
                    @php
                         $results = DB::table('faires')->get()->where('description');
													$language = app()->getLocale();
                          foreach ($results as $result ) {
														$descriptions = $result->description;
                          echo "<li class='b-l-primary border-4'>";
                            echo " <p>".$descriptions ."</p>   </li>";
                          }
                    @endphp



                    <li><a class="f-w-700" href="#">Check all</a></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="star"></i></div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown">
                          <li>
                            <div class="row">
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>

              <li class="onhover-dropdown">  <div class="notification-box"><i data-feather="message-square"></i>
            <span class="badge rounded-pill badge-secondary">
              @php
              $results = DB::table('messages')->count();
              if ($results != null) {
                echo $results;
              }else{
                echo '';
              }
          @endphp
                  </span></div>
                <div class="chat-dropdown onhover-show-div">
                  <h6 class="f-18 mb-0 dropdown-title">Messages</h6>
                  <ul class="py-0">
                    @php
                          $results = DB::table('messages')->get()->where('name');
													$language = app()->getLocale();
                          foreach ($results as $result ) {
														$name = $result->name;
														$results = $result->message;
                            $date = $result->created_at;
                            echo "<li>";
                            echo "<div class='media'>";
                            echo "<img class='img-fluid b-r-5 me-2' src='/assets/images/dashboard/profile.jpg' alt=''>";
                            echo " <div class='media-body'>";
                            echo  "<h6>".	$name."</h6>";
                            echo "<p>".$results."</p>";
                            echo "<p class='f-8 font-primary mb-0'>". $date ."</p>";
                            echo "
                        </div>
                      </div>
                    </li>";
                          }
                    @endphp








                    <li class="text-center"> <a class="f-w-700" href="{{route('messages.index',app()->getLocale())}}">View All     </a></li>
                  </ul>
                </div>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media"><img class="b-r-10" src="/assets/images/dashboard/profile.jpg" alt="">
                  <div class="media-body"><span>  {{ Auth::user()->name }}</span>
                    <p class="mb-0 font-roboto">{{ __('User') }}<i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="{{route('users.edit',app()->getLocale())}}"><i data-feather="user"></i><span>{{ __('Account') }} </span></a></li>
                  <li><a href="{{route('messages.index',app()->getLocale())}}"><i data-feather="mail"></i><span>{{ __('Inbox') }}</span></a></li>
                  <li><a href="{{ url(app()->getLocale().'/faires') }}"><i data-feather="file-text"></i><span>{{ __('Todo') }}</span></a></li>
                  <li><a href="{{route('users.show',app()->getLocale())}}"><i data-feather="settings"></i><span>{{ __('Settings') }}</span></a></li>
                  <li><a href="{{ route('logout',app()->getLocale()) }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i data-feather="log-in"> </i><span>   {{ __('Logout') }}
                                       <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </span></a></li>





                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" width="90%" src="/assets/images/logo/logo-fr-indh.png" alt=""><img class="img-fluid for-dark"  width="90%" src="/assets/images/logo/logo-fr-indh-logo.png" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="/assets/images/logo/indh-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="/assets/images/logo/indh-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 >{{ __('General') }}</h6>
                      <p >{{ __('Dashboard, Widgets & Update') }}</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('home',app()->getLocale())}}"><i data-feather="home"></i><span >{{ __('Dashboard') }}              </span></a>

                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('projects.index',app()->getLocale())}}"><i data-feather="airplay"></i><span >{{ __('Projects Videos') }}</span></a>


                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="file"></i><span>{{ __('Archive') }}</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{ route('documents.index',app()->getLocale())}}">{{ __('Documents') }}</a></li>
                      <li><a href="{{ route('docfiles.index',app()->getLocale())}}">{{ __('Files') }}</a></li>


                    </ul>
                  </li>

                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="layout"></i><span>{{ __('Results') }}</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{ route('versions.index',app()->getLocale())}}">{{ __('Publications') }}</a></li>
                      <li><a href="{{ route('docverss.index',app()->getLocale())}}">{{ __('Publications Documents') }}</a></li>
                      <li><a href="{{route('files.index',app()->getLocale())}}">{{ __('Media') }}</a></li>

                    </ul>
                  </li>

                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#"><i data-feather="box"></i><span>{{ __('Projects') }}               </span></a>
                    <ul class="sidebar-submenu">
                     
                      <li><a href="{{ route('newss.index',app()->getLocale())}}">{{ __('Sectors') }}</a></li>
                   
                      <li><a href="{{ route('newscontents.index',app()->getLocale())}}">{{ __('News Project') }}</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('appelprojets.index',app()->getLocale())}}"><i data-feather="git-pull-request"> </i><span>{{ __('Idea Competition') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('posts',app()->getLocale())}}"><i data-feather="file-text"> </i><span>{{ __('News') }}</span></a></li>

                
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('users.index',app()->getLocale())}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span>{{ __('Accounts Management') }}</span></a></li>
               


                <li class="sidebar-main-title">
                    <div>
                      <h6>{{ __('Profil') }}</h6>
                      <p>{{ __('User') }}/ <b>{{ Auth::user()->name }}</b>  </p>
                    </div>
                  </li>




                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('users.edit',app()->getLocale())}}"><i data-feather="user"> </i><span>{{ __('Account') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('messages.index',app()->getLocale())}}"><i data-feather="inbox"> </i><span>{{ __('Received Messages') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href='{{ url(app()->getLocale().'/faires') }}'><i data-feather="globe"> </i><span>{{ __('Todo') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('users.show',app()->getLocale())}}" target="_blank"><i data-feather="settings"></i><span>{{ __('Settings') }}</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('logout',app()->getLocale()) }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
                                   target="_blank"><i data-feather="log-in"></i><span> {{ __('Log out') }}</span></a>
                                   <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                                       @csrf
                                   </form></li>








               </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>

        <script src="/assets/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js-->
        <script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <script src="/assets/js/scrollbar/simplebar.js"></script>
        <script src="/assets/js/scrollbar/custom.js"></script>
        <!-- Sidebar jquery-->
        <script src="/assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <script src="/assets/js/sidebar-menu.js"></script>
        <script src="/assets/js/chart/chartist/chartist.js"></script>
        <script src="/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
        <script src="/assets/js/chart/knob/knob.min.js"></script>
        <script src="/assets/js/chart/knob/knob-chart.js"></script>
        <script src="/assets/js/chart/apex-chart/apex-chart.js"></script>
        <script src="/assets/js/chart/apex-chart/stock-prices.js"></script>
        <script src="/assets/js/notify/bootstrap-notify.min.js"></script>
        <script src="/assets/js/dashboard/default.js"></script>
        <script src="/assets/js/notify/index.js"></script>
        <script src="/assets/js/datepicker/date-picker/datepicker.js"></script>
        <script src="/assets/js/datepicker/date-picker/datepicker.en.js"></script>
        <script src="/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
        <script src="/assets/js/typeahead/handlebars.js"></script>
        <script src="/assets/js/typeahead/typeahead.bundle.js"></script>
        <script src="/assets/js/typeahead/typeahead.custom.js"></script>
        <script src="/assets/js/typeahead-search/handlebars.js"></script>
        <script src="/assets/js/typeahead-search/typeahead-custom.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="/assets/js/script.js"></script>
        <script src="/assets/js/theme-customizer/customizer.js"></script>
        <!-- login js-->
        <!-- Plugin used-->
      </body>
    </html>
