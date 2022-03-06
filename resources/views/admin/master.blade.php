<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Charity</title>

    <!-- Bootstrap core CSS -->

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('admin/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/maps/jquery-jvectormap-2.0.1.css')}}" />
    <link href="{{asset('admin/css/icheck/flat/green.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/floatexamples.css')}}" rel="stylesheet" type="text/css" />
          

    
     <!-- dataTables -->
 
     <link href="{{asset('admin/css/datatables/tools/css/dataTables.tableTools.css')}}" rel="stylesheet">
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('admin/css/toastr.min.css')}}"> 
    <!-- <link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">  -->
</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Charity</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{asset('admin/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{auth()->user()->name}}</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i>Programs/ Projects <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ route('news.index') }}">List</a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Events <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ route('event.index')}}">List</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Slider <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ route('slider.index') }}">List</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> Staff <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ route('staff.index') }}">List</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Message <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ route('message.index') }}">List</a>
                                        </li>
        
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ route('register') }}">List</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>
                       

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('admin/images/img.jpg')}}" alt="">{{auth()->user()->name}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                 
                                    <li><a href="{{URL('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                           
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row">
                    @yield('content')
                </div>

            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

   
    
    <!-- icheck -->
    <script src="{{asset('admin/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('admin/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="{{asset('admin/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/datepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('admin/js/custom.js')}}"></script>

    @yield('scripts')
    <!-- Toastr -->
    <script src="{{asset('admin/js/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}
    
    <script>
         setTimeout(function() {
        $('.alert').fadeOut('slow');}, 4000
      );
    </script>
   
</body>

</html>
