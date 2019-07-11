<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buttons</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                    
                            </header>
                    
                    
                    
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>
                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                                        <span class="fa fa-fw fa-comment"></span>
                                    </a>
                                </div>
                    
                            </div>
                    
                    
                    
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="table.html">Tables</a></li>
                                    <li class='dropdown '>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Form Elements <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="form-general.html">General</a></li>
                                            <li><a href="form-validation.html">Validation</a></li>
                                            <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                            <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                        <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Live Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-gamepad"></i>&nbsp;
            Buttons
          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                    <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                    <span class="label label-danger user-label">16</span>
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading">Archie</h5>
                                    <ul class="list-unstyled user-info">
                                        <li><a href="">Administrator</a></li>
                                        <li>Last Access : <br>
                                            <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header">Menu</li>
                                  <li class="nav-divider"></li>
                                  <li class="">
                                    <a href="dashboard.html">
                                      <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                                    </a>
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-building "></i>
                                      <span class="link-title">Layouts</span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="boxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-boxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-fixed-mini-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-menu.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header-mini-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-header.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a>
                                      </li>
                                      <li>
                                        <a href="fixed-menu-boxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-menu.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a>
                                      </li>
                                      <li>
                                        <a href="fixed-mini-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a>
                                      </li>
                                      <li>
                                        <a href="fxhmoxed.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a>
                                      </li>
                                      <li>
                                        <a href="no-header-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a>
                                      </li>
                                      <li>
                                        <a href="no-header.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Header </a>
                                      </li>
                                      <li>
                                        <a href="no-left-right-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a>
                                      </li>
                                      <li>
                                        <a href="no-left-sidebar-main-search.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a>
                                      </li>
                                      <li>
                                        <a href="no-left-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a>
                                      </li>
                                      <li>
                                        <a href="no-main-search.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Main Search </a>
                                      </li>
                                      <li>
                                        <a href="no-right-sidebar.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a>
                                      </li>
                                      <li>
                                        <a href="sm.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-tasks"></i>
                                      <span class="link-title">Components</span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="bgcolor.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
                                      </li>
                                      <li>
                                        <a href="bgimage.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
                                      </li>
                                      <li>
                                        <a href="button.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
                                      </li>
                                      <li>
                                        <a href="icon.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
                                      </li>
                                      <li>
                                        <a href="pricing.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
                                      </li>
                                      <li>
                                        <a href="progress.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="">
                                    <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Forms
                        	  </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="form-general.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form General </a>
                                      </li>
                                      <li>
                                        <a href="form-validation.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form Validation </a>
                                      </li>
                                      <li>
                                        <a href="form-wizard.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a>
                                      </li>
                                      <li>
                                        <a href="form-wysiwyg.html">
                                          <i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="table.html">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Tables</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="typography.html">
                                      <i class="fa fa-font"></i>
                                      <span class="link-title">
                                    Typography
                                  </span>  </a>
                                  </li>
                                  <li>
                                    <a href="maps.html">
                                      <i class="fa fa-map-marker"></i><span class="link-title">
                                    Maps
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="chart.html">
                                      <i class="fa fa fa-bar-chart-o"></i>
                                      <span class="link-title">
                                    Charts
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="calendar.html">
                                      <i class="fa fa-calendar"></i>
                                      <span class="link-title">
                                    Calendar
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="javascript:;">
                                      <i class="fa fa-exclamation-triangle"></i>
                                      <span class="link-title">
                                      Error Pages
                                    </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="403.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;403</a>
                                      </li>
                                      <li>
                                        <a href="404.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;404</a>
                                      </li>
                                      <li>
                                        <a href="405.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;405</a>
                                      </li>
                                      <li>
                                        <a href="500.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;500</a>
                                      </li>
                                      <li>
                                        <a href="503.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;503</a>
                                      </li>
                                      <li>
                                        <a href="offline.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;offline</a>
                                      </li>
                                      <li>
                                        <a href="countdown.html">
                                          <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="grid.html">
                                      <i class="fa fa-columns"></i>
                                      <span class="link-title">
                            Grid
                            </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blank.html">
                                      <i class="fa fa-square-o"></i>
                                      <span class="link-title">
                            Blank Page
                            </span>
                                    </a>
                                  </li>
                                  <li class="nav-divider"></li>
                                  <li>
                                    <a href="login.html">
                                      <i class="fa fa-sign-in"></i>
                                      <span class="link-title">
                            Login Page
                            </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="javascript:;">
                                      <i class="fa fa-code"></i>
                                      <span class="link-title">
                            	Unlimited Level Menu
                            	</span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
                                        <ul class="collapse">
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li>
                                            <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a>
                                            <ul class="collapse">
                                              <li> <a href="javascript:;">Level 3</a>  </li>
                                              <li> <a href="javascript:;">Level 3</a>  </li>
                                              <li>
                                                <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a>
                                                <ul class="collapse">
                                                  <li> <a href="javascript:;">Level 4</a>  </li>
                                                  <li> <a href="javascript:;">Level 4</a>  </li>
                                                  <li>
                                                    <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a>
                                                    <ul class="collapse">
                                                      <li> <a href="javascript:;">Level 5</a>  </li>
                                                      <li> <a href="javascript:;">Level 5</a>  </li>
                                                      <li> <a href="javascript:;">Level 5</a>  </li>
                                                    </ul>
                                                  </li>
                                                </ul>
                                              </li>
                                              <li> <a href="javascript:;">Level 4</a>  </li>
                                            </ul>
                                          </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                        </ul>
                                      </li>
                                      <li> <a href="javascript:;">Level 1</a>  </li>
                                      <li>
                                        <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
                                        <ul class="collapse">
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                          <li> <a href="javascript:;">Level 2</a>  </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="row">
        <div class="col-lg-12">
            <div class="box danger">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Default Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-default btn-sm" data-toggle="collapse" data-target="#div1">default</button>
                    </div>
                </header>
                <div class="body collapse in" id="div1">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default">default</a>
                    <a href="#" class="btn btn-primary">primary</a>
                    <a href="#" class="btn btn-danger">danger</a>
                    <a href="#" class="btn btn-success">success</a>
                    <a href="#" class="btn btn-info">info</a>
                    <a href="#" class="btn btn-warning">warning</a>

                    <a href="#" class="btn btn-metis-1">metis-1</a>
                    <a href="#" class="btn btn-metis-2">metis-2</a>
                    <a href="#" class="btn btn-metis-3">metis-3</a>
                    <a href="#" class="btn btn-metis-4">metis-4</a>
                    <a href="#" class="btn btn-metis-5">metis-5</a>
                    <a href="#" class="btn btn-metis-6">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs">default</a>
                    <a href="#" class="btn btn-primary btn-xs">primary</a>
                    <a href="#" class="btn btn-danger btn-xs">danger</a>
                    <a href="#" class="btn btn-success btn-xs">success</a>
                    <a href="#" class="btn btn-info btn-xs">info</a>
                    <a href="#" class="btn btn-warning btn-xs">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm">default</a>
                    <a href="#" class="btn btn-primary btn-sm">primary</a>
                    <a href="#" class="btn btn-danger btn-sm">danger</a>
                    <a href="#" class="btn btn-success btn-sm">success</a>
                    <a href="#" class="btn btn-info btn-sm">info</a>
                    <a href="#" class="btn btn-warning btn-sm">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg">default</a>
                    <a href="#" class="btn btn-primary btn-lg">primary</a>
                    <a href="#" class="btn btn-danger btn-lg">danger</a>
                    <a href="#" class="btn btn-success btn-lg">success</a>
                    <a href="#" class="btn btn-info btn-lg">info</a>
                    <a href="#" class="btn btn-warning btn-lg">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->


        <div class="col-lg-12">
            <div class="box">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Line Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-danger btn-sm btn-line" data-toggle="collapse" data-target="#div2">line</button>
                    </div>
                </header>
                <div class="body collapse in" id="div2">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-line">success</a>
                    <a href="#" class="btn btn-info btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-line">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-line">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-line">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-line">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-line">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-line">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-line">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->



        <div class="col-lg-12">
            <div class="box warning">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Rectangle Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-success btn-sm btn-rect" data-toggle="collapse" data-target="#div3">rectangle</button>
                    </div>
                </header>
                <div class="body collapse in" id="div3">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-rect">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-rect">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-rect">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-rect">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->



        <div class="col-lg-12">
            <div class="box danger">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Circle Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-success btn-sm btn-circle" data-toggle="collapse" data-target="#div4">c</button>
                    </div>
                </header>
                <div class="body collapse in" id="div4">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-circle">de</a>
                    <a href="#" class="btn btn-primary btn-circle">pr</a>
                    <a href="#" class="btn btn-danger btn-circle">da</a>
                    <a href="#" class="btn btn-success btn-circle">su</a>
                    <a href="#" class="btn btn-info btn-circle">in</a>
                    <a href="#" class="btn btn-warning btn-circle">wa</a>

                    <a href="#" class="btn btn-metis-1 btn-circle">m1</a>
                    <a href="#" class="btn btn-metis-2 btn-circle">m2</a>
                    <a href="#" class="btn btn-metis-3 btn-circle">m3</a>
                    <a href="#" class="btn btn-metis-4 btn-circle">m4</a>
                    <a href="#" class="btn btn-metis-5 btn-circle">m5</a>
                    <a href="#" class="btn btn-metis-6 btn-circle">m6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-circle">d</a>
                    <a href="#" class="btn btn-primary btn-xs btn-circle">p</a>
                    <a href="#" class="btn btn-danger btn-xs btn-circle">d</a>
                    <a href="#" class="btn btn-success btn-xs btn-circle">s</a>
                    <a href="#" class="btn btn-info btn-xs btn-circle">i</a>
                    <a href="#" class="btn btn-warning btn-xs btn-circle">w</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-circle">1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-circle">2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-circle">3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-circle">4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-circle">5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-circle">6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-circle">d</a>
                    <a href="#" class="btn btn-primary btn-sm btn-circle">p</a>
                    <a href="#" class="btn btn-danger btn-sm btn-circle">d</a>
                    <a href="#" class="btn btn-success btn-sm btn-circle">s</a>
                    <a href="#" class="btn btn-info btn-sm btn-circle">i</a>
                    <a href="#" class="btn btn-warning btn-sm btn-circle">w</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-circle">1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-circle">2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-circle">3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-circle">4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-circle">5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-circle">6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-circle">def</a>
                    <a href="#" class="btn btn-primary btn-lg btn-circle">pri</a>
                    <a href="#" class="btn btn-danger btn-lg btn-circle">dan</a>
                    <a href="#" class="btn btn-success btn-lg btn-circle">suc</a>
                    <a href="#" class="btn btn-info btn-lg btn-circle">inf</a>
                    <a href="#" class="btn btn-warning btn-lg btn-circle">war</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-circle">m-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-circle">m-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-circle">m-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-circle">m-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-circle">m-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-circle">m-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->


        <div class="col-lg-12">
            <div class="box success">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Rounded Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-primary btn-sm btn-round" data-toggle="collapse" data-target="#div5">round</button>
                    </div>
                </header>
                <div class="body collapse in" id="div5">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-round">default</a>
                    <a href="#" class="btn btn-primary btn-round">primary</a>
                    <a href="#" class="btn btn-danger btn-round">danger</a>
                    <a href="#" class="btn btn-success btn-round">success</a>
                    <a href="#" class="btn btn-info btn-round">info</a>
                    <a href="#" class="btn btn-warning btn-round">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-round">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-round">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-round">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-round">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-round">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-round">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-round">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-round">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-round">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-round">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-round">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-round">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-round">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-round">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-round">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-round">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-round">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-round">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-round">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-round">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-round">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-round">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-round">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-round">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-round">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-round">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-round">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-round">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-round">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-round">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-round">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-round">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-round">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-round">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-round">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-round">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-round">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-round">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-round">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-round">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-round">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-round">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->




        <div class="col-lg-12">
            <div class="box inverse">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Flat Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-info btn-sm btn-flat" data-toggle="collapse" data-target="#div6">flat</button>
                    </div>
                </header>
                <div class="body collapse in" id="div6">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-flat">default</a>
                    <a href="#" class="btn btn-primary btn-flat">primary</a>
                    <a href="#" class="btn btn-danger btn-flat">danger</a>
                    <a href="#" class="btn btn-success btn-flat">success</a>
                    <a href="#" class="btn btn-info btn-flat">info</a>
                    <a href="#" class="btn btn-warning btn-flat">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-flat">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-flat">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-flat">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-flat">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-flat">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-flat">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-flat">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-flat">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-flat">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-flat">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-flat">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-flat">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-flat">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-flat">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-flat">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-flat">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-flat">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-flat">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-flat">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-flat">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-flat">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-flat">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-flat">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-flat">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-flat">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-flat">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-flat">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-flat">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-flat">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-flat">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-flat">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-flat">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-flat">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-flat">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-flat">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-flat">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-flat">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-flat">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-flat">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-flat">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-flat">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-flat">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->


        <div class="col-lg-12">
            <div class="box danger">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Gradient Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-default btn-sm btn-grad" data-toggle="collapse" data-target="#div7">gradient</button>
                    </div>
                </header>
                <div class="body collapse in" id="div7">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-grad">default</a>
                    <a href="#" class="btn btn-primary btn-grad">primary</a>
                    <a href="#" class="btn btn-danger btn-grad">danger</a>
                    <a href="#" class="btn btn-success btn-grad">success</a>
                    <a href="#" class="btn btn-info btn-grad">info</a>
                    <a href="#" class="btn btn-warning btn-grad">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-grad">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-grad">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-grad">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-grad">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-grad">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-grad">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-grad">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-grad">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-grad">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-grad">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-grad">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-grad">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-grad">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-grad">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-grad">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-grad">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-grad">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-grad">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-grad">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-grad">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-grad">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-grad">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-grad">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-grad">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-grad">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-grad">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-grad">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-grad">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-grad">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-grad">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-grad">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-grad">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-grad">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-grad">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-grad">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-grad">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-grad">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-grad">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-grad">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-grad">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-grad">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-grad">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->


        <div class="col-lg-12">
            <div class="box danger">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Gradient & Rectangle Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-default btn-sm btn-grad btn-rect" data-toggle="collapse" data-target="#div8">gradient & rectangle</button>
                    </div>
                </header>
                <div class="body collapse in" id="div8">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-grad btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-grad btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-grad btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-grad btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-grad btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-grad btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-grad btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-grad btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-grad btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-grad btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-grad btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-grad btn-rect">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-grad btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-grad btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-grad btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-grad btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-grad btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-grad btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-grad btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-grad btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-grad btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-grad btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-grad btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-grad btn-rect">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-grad btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-grad btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-grad btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-grad btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-grad btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-grad btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-grad btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-grad btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-grad btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-grad btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-grad btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-grad btn-rect">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-grad btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-grad btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-grad btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-grad btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-grad btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-grad btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-grad btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-grad btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-grad btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-grad btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-grad btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-grad btn-rect">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->


        <div class="col-lg-12">
            <div class="box primary">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Flat & Rectangle Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-info btn-sm btn-flat btn-rect" data-toggle="collapse" data-target="#div9">flat & rectangle</button>
                    </div>
                </header>
                <div class="body collapse in" id="div9">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-flat btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-flat btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-flat btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-flat btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-flat btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-flat btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-flat btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-flat btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-flat btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-flat btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-flat btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-flat btn-rect">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-flat btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-flat btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-flat btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-flat btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-flat btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-flat btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-flat btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-flat btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-flat btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-flat btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-flat btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-flat btn-rect">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-flat btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-flat btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-flat btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-flat btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-flat btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-flat btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-flat btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-flat btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-flat btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-flat btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-flat btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-flat btn-rect">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-flat btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-flat btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-flat btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-flat btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-flat btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-flat btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-flat btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-flat btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-flat btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-flat btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-flat btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-flat btn-rect">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->



        <div class="col-lg-12">
            <div class="box danger">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Line & Rectangle Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-info btn-sm btn-line btn-rect" data-toggle="collapse" data-target="#div10">line & rectangle</button>
                    </div>
                </header>
                <div class="body collapse in" id="div10">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-line btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-line btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-line btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-line btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-line btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-line btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-line btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-line btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-line btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-line btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-line btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-line btn-rect">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-line btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-line btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-line btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-line btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-line btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-line btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-line btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-line btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-line btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-line btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-line btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-line btn-rect">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-line btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-line btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-line btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-line btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-line btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-line btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-line btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-line btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-line btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-line btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-line btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-line btn-rect">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-line btn-rect">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-line btn-rect">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-line btn-rect">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-line btn-rect">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-line btn-rect">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-line btn-rect">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-line btn-rect">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-line btn-rect">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-line btn-rect">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-line btn-rect">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-line btn-rect">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-line btn-rect">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->



        <div class="col-lg-12">
            <div class="box danger">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Circle & Line Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-success btn-sm btn-circle btn-line" data-toggle="collapse" data-target="#div11">c</button>
                    </div>
                </header>
                <div class="body collapse in" id="div11">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-circle btn-line">de</a>
                    <a href="#" class="btn btn-primary btn-circle btn-line">pr</a>
                    <a href="#" class="btn btn-danger btn-circle btn-line">da</a>
                    <a href="#" class="btn btn-success btn-circle btn-line">su</a>
                    <a href="#" class="btn btn-info btn-circle btn-line">in</a>
                    <a href="#" class="btn btn-warning btn-circle btn-line">wa</a>

                    <a href="#" class="btn btn-metis-1 btn-circle btn-line">m1</a>
                    <a href="#" class="btn btn-metis-2 btn-circle btn-line">m2</a>
                    <a href="#" class="btn btn-metis-3 btn-circle btn-line">m3</a>
                    <a href="#" class="btn btn-metis-4 btn-circle btn-line">m4</a>
                    <a href="#" class="btn btn-metis-5 btn-circle btn-line">m5</a>
                    <a href="#" class="btn btn-metis-6 btn-circle btn-line">m6</a>
                    <hr>

                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-circle btn-line">d</a>
                    <a href="#" class="btn btn-primary btn-xs btn-circle btn-line">p</a>
                    <a href="#" class="btn btn-danger btn-xs btn-circle btn-line">d</a>
                    <a href="#" class="btn btn-success btn-xs btn-circle btn-line">s</a>
                    <a href="#" class="btn btn-info btn-xs btn-circle btn-line">i</a>
                    <a href="#" class="btn btn-warning btn-xs btn-circle btn-line">w</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-circle btn-line">1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-circle btn-line">2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-circle btn-line">3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-circle btn-line">4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-circle btn-line">5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-circle btn-line">6</a>
                    <hr>

                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-circle btn-line">d</a>
                    <a href="#" class="btn btn-primary btn-sm btn-circle btn-line">p</a>
                    <a href="#" class="btn btn-danger btn-sm btn-circle btn-line">d</a>
                    <a href="#" class="btn btn-success btn-sm btn-circle btn-line">s</a>
                    <a href="#" class="btn btn-info btn-sm btn-circle btn-line">i</a>
                    <a href="#" class="btn btn-warning btn-sm btn-circle btn-line">w</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-circle btn-line">1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-circle btn-line">2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-circle btn-line">3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-circle btn-line">4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-circle btn-line">5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-circle btn-line">6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-circle btn-line">def</a>
                    <a href="#" class="btn btn-primary btn-lg btn-circle btn-line">pri</a>
                    <a href="#" class="btn btn-danger btn-lg btn-circle btn-line">dan</a>
                    <a href="#" class="btn btn-success btn-lg btn-circle btn-line">suc</a>
                    <a href="#" class="btn btn-info btn-lg btn-circle btn-line">inf</a>
                    <a href="#" class="btn btn-warning btn-lg btn-circle btn-line">war</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-circle btn-line">m-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-circle btn-line">m-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-circle btn-line">m-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-circle btn-line">m-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-circle btn-line">m-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-circle btn-line">m-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->




        <div class="col-lg-12">
            <div class="box danger">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Circle & Gradient Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-success btn-sm btn-circle btn-grad" data-toggle="collapse" data-target="#div12">c</button>
                    </div>
                </header>
                <div class="body collapse in" id="div12">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-circle btn-grad">de</a>
                    <a href="#" class="btn btn-primary btn-circle btn-grad">pr</a>
                    <a href="#" class="btn btn-danger btn-circle btn-grad">da</a>
                    <a href="#" class="btn btn-success btn-circle btn-grad">su</a>
                    <a href="#" class="btn btn-info btn-circle btn-grad">in</a>
                    <a href="#" class="btn btn-warning btn-circle btn-grad">wa</a>

                    <a href="#" class="btn btn-metis-1 btn-circle btn-grad">m1</a>
                    <a href="#" class="btn btn-metis-2 btn-circle btn-grad">m2</a>
                    <a href="#" class="btn btn-metis-3 btn-circle btn-grad">m3</a>
                    <a href="#" class="btn btn-metis-4 btn-circle btn-grad">m4</a>
                    <a href="#" class="btn btn-metis-5 btn-circle btn-grad">m5</a>
                    <a href="#" class="btn btn-metis-6 btn-circle btn-grad">m6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-circle btn-grad">d</a>
                    <a href="#" class="btn btn-primary btn-xs btn-circle btn-grad">p</a>
                    <a href="#" class="btn btn-danger btn-xs btn-circle btn-grad">d</a>
                    <a href="#" class="btn btn-success btn-xs btn-circle btn-grad">s</a>
                    <a href="#" class="btn btn-info btn-xs btn-circle btn-grad">i</a>
                    <a href="#" class="btn btn-warning btn-xs btn-circle btn-grad">w</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-circle btn-grad">1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-circle btn-grad">2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-circle btn-grad">3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-circle btn-grad">4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-circle btn-grad">5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-circle btn-grad">6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-circle btn-grad">d</a>
                    <a href="#" class="btn btn-primary btn-sm btn-circle btn-grad">p</a>
                    <a href="#" class="btn btn-danger btn-sm btn-circle btn-grad">d</a>
                    <a href="#" class="btn btn-success btn-sm btn-circle btn-grad">s</a>
                    <a href="#" class="btn btn-info btn-sm btn-circle btn-grad">i</a>
                    <a href="#" class="btn btn-warning btn-sm btn-circle btn-grad">w</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-circle btn-grad">1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-circle btn-grad">2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-circle btn-grad">3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-circle btn-grad">4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-circle btn-grad">5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-circle btn-grad">6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-circle btn-grad">def</a>
                    <a href="#" class="btn btn-primary btn-lg btn-circle btn-grad">pri</a>
                    <a href="#" class="btn btn-danger btn-lg btn-circle btn-grad">dan</a>
                    <a href="#" class="btn btn-success btn-lg btn-circle btn-grad">suc</a>
                    <a href="#" class="btn btn-info btn-lg btn-circle btn-grad">inf</a>
                    <a href="#" class="btn btn-warning btn-lg btn-circle btn-grad">war</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-circle btn-grad">m-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-circle btn-grad">m-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-circle btn-grad">m-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-circle btn-grad">m-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-circle btn-grad">m-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-circle btn-grad">m-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->



        <div class="col-lg-12">
            <div class="box inverse">
                <header>
                    <div class="icons"><i class="fa fa-building-o"></i></div>
                    <h5>Rounded & Line Button</h5>
                    <div class="toolbar">
                        <button class="btn btn-primary btn-sm btn-round btn-line" data-toggle="collapse" data-target="#div13">round & line</button>
                    </div>
                </header>
                <div class="body collapse in" id="div13">
                    <h3>Default Button</h3>
                    <a href="#" class="btn btn-default btn-round btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-round btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-round btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-round btn-line">success</a>
                    <a href="#" class="btn btn-info btn-round btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-round btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-round btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-round btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-round btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-round btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-round btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-round btn-line">metis-6</a>
                    <hr>
                    <h4>Mini Button</h4>
                    <a href="#" class="btn btn-default btn-xs btn-round btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-xs btn-round btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-xs btn-round btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-xs btn-round btn-line">success</a>
                    <a href="#" class="btn btn-info btn-xs btn-round btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-xs btn-round btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-xs btn-round btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-xs btn-round btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-xs btn-round btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-xs btn-round btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-xs btn-round btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-xs btn-round btn-line">metis-6</a>
                    <hr>
                    <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm btn-round btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-sm btn-round btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-sm btn-round btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-sm btn-round btn-line">success</a>
                    <a href="#" class="btn btn-info btn-sm btn-round btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-sm btn-round btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-sm btn-round btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-sm btn-round btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-sm btn-round btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-sm btn-round btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-sm btn-round btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-sm btn-round btn-line">metis-6</a>
                    <hr>
                    <h4>Large Button</h4>

                    <a href="#" class="btn btn-default btn-lg btn-round btn-line">default</a>
                    <a href="#" class="btn btn-primary btn-lg btn-round btn-line">primary</a>
                    <a href="#" class="btn btn-danger btn-lg btn-round btn-line">danger</a>
                    <a href="#" class="btn btn-success btn-lg btn-round btn-line">success</a>
                    <a href="#" class="btn btn-info btn-lg btn-round btn-line">info</a>
                    <a href="#" class="btn btn-warning btn-lg btn-round btn-line">warning</a>

                    <a href="#" class="btn btn-metis-1 btn-lg btn-round btn-line">metis-1</a>
                    <a href="#" class="btn btn-metis-2 btn-lg btn-round btn-line">metis-2</a>
                    <a href="#" class="btn btn-metis-3 btn-lg btn-round btn-line">metis-3</a>
                    <a href="#" class="btn btn-metis-4 btn-lg btn-round btn-line">metis-4</a>
                    <a href="#" class="btn btn-metis-5 btn-lg btn-round btn-line">metis-5</a>
                    <a href="#" class="btn btn-metis-6 btn-lg btn-round btn-line">metis-6</a>
                </div>
                <!-- /.body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-lg-12 -->
  </div>
<!-- /.row -->

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->

                    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
                        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
                        <br>
                        <br>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Metis Bootstrap Admin Template v2.4.2</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>


            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.metisButton();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>