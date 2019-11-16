
    
<!-- Mirrored from coderthemes.com/moltran/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:19 GMT -->
<head>
        <meta charset="utf-8" />
        <title>HRMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/hrmslogo.png">

        <link href="{{url('plugins/sweetalert2/sweetalert2.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom Files -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{url('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
         <link href="{{url('plugins/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{url('assets/js/modernizr.min.js')}}"></script>
        
    </head>
    <body>
    <div class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div  class="text-center">
                       <a href="" class="logo"><i class="md md-terrain"></i> <span>HRMS </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <a href="#" class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <li class="hide-phone float-left">
                                <form role="search" class="navbar-form">
                                    <input type="text"  class="form-control search-bar">
                                    <a href="#" class="btn btn-search"><i class="fa fa-search"></i></a>
                                    @if(Session::has('message'))
                                                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                                                    @endif </div> 
                                </form>
                            </li>
                        </ul>
    
                        <ul class="nav navbar-right float-right list-inline">
                            <li class="dropdown d-none d-sm-block">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span class="badge badge-pill badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="media-left pr-2">
                                                <em class="fa fa-user-plus fa-2x text-info"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New user registered</div>
                                                <p class="m-0">
                                                   <small>You have 10 unread messages</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>
                                       <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="media-left pr-2">
                                                <em class="fa fa-diamond fa-2x text-primary"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New settings</div>
                                                <p class="m-0">
                                                   <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="media-left pr-2">
                                                <em class="fa fa-bell-o fa-2x text-danger"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">Updates</div>
                                                <p class="m-0">
                                                   <small>There are
                                                      <span class="text-primary">2</span> new updates available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                       <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                            </li>
                            <li class="dropdown open">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{url('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-settings mr-2"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-lock mr-2"></i> Lock screen</a></li>
                                    <li><a href="{{url('admin/logout')}}" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
          
            <!-- Top Bar End -->
