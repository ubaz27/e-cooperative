
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Result Engine | BMF Islamiyyah</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href=" {{ asset('dist/img/logo.png') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/owl.transitions.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/notika-custom-icon.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/wave/waves.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dist/css/responsive.css') }}">


<!-- js -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
  


    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('dist/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

     <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="{{ asset('dist/img/logo.png') }}" style="width:40px;height: 40px;" alt="" /> </a><span style="color:white;">e-Cooperative</span>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        {{-- <li><a href="{{ route('book.showPages') }}">Home</a></li> --}}
                                       
                                        
                                    </ul>
                                </li>
                                <!--<li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>-->
                                <!--    <ul id="demoevent" class="collapse dropdown-header-top">-->
                                <!--        <li><a href="inbox.html">Inbox</a></li>-->
                                <!--        <li><a href="view-email.html">View Email</a></li>-->
                                <!--        <li><a href="compose-email.html">Compose Email</a></li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Result</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                           <li><a href="single_entry.php">Signle Upload</a></li>
                                        <li><a href="batch_entry.php">Batch Upload</a></li>
                                        <li><a href="class_entry.php">Per Class</a></li>
                                         <li><a href="prepare.php">Prepare Result</a></li>                                        
                                     
                                         <li><a href="report.php">Report Sheet</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Settings</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="view-classes.php">Classes</a></li>
                                        <li><a href="view-subjects.php">Subjects</a></li>
                                        <!-- <li><a href="compose-email.html">Compose Email</a></li> -->
                                    </ul>
                                </li>
                                                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                          
                      
                        <li><a data-toggle="tab" href="#settings"><i class="notika-icon notika-edit"></i> Settings</a>
                        </li>
                        
                        
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="dashboard.php">Dashboard</a>
                                </li>
                                <li><a href="{{ url('/book') }}">New Site</a>
                                </li>
                                <li><a href="logout.php">log Out </a></li>
                            </ul>
                        </div>
                        <!--<div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">-->
                        <!--    <ul class="notika-main-menu-dropdown">-->
                        <!--        <li><a href="inbox.html">Inbox</a>-->
                        <!--        </li>-->
                        <!--        <li><a href="view-email.html">View Email</a>-->
                        <!--        </li>-->
                        <!--        <li><a href="compose-email.html">Compose Email</a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                
                                  <li><a href="single_entry.php">Single</a>
                                </li>
                                <li><a href="batch_entry.php">Batch</a>
                                </li>
                                <li><a href="class_entry.php">Per Class</a>
                                </li>
                                
                                <li><a href="prepare.php">Prepare Result</a></li>                               
                                <li><a href="report.php">Report Sheets</a></li>
                            </ul>
                        </div>
                        <div id="settings" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="view-classes.php">Classes</a>
                                </li>
                                <li><a href="view-subjects.php">Subjects</a>
                                </li>
                            </ul>
                        </div>

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>