<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Validation</title>
    
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


        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css">

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
                                    <li class='dropdown active'>
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
              <i class="fa fa-filter"></i>&nbsp;
            Form Validation
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
                            <style>
    .form-control.col-lg-6 {
        width: 50% !important;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="fa fa-check"></i></div>
                <h5>Popup Validation</h5>
                <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                      <i class="fa fa-times"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->

            </header>
            <div id="collapse2" class="body">
                <form class="form-horizontal" id="popup-validation">

                    <div class="form-group">
                        <label class="control-label col-lg-4">Required</label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required] form-control" name="req" id="req">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Select</label>
                        <div class="col-lg-4">
                            <select name="sport" id="sport" class="validate[required] form-control">
                                <option value="">Choose a sport</option>
                                <option value="option1">Tennis</option>
                                <option value="option2">Football</option>
                                <option value="option3">Golf</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Multiple Select</label>

                        <div class="col-lg-4">
                            <select name="sport2" id="sport2" multiple class="validate[required] form-control">
                                <option value="">Choose a sport</option>
                                <option value="option1">Tennis</option>
                                <option value="option2">Football</option>
                                <option value="option3">Golf</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Url</label>

                        <div class=" col-lg-4">
                            <input value="http://" class="validate[required,custom[url]] form-control" type="text"
                                   name="url1" id="url1"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,custom[email]] form-control" type="text" name="email1"
                                   id="email1"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required] form-control" type="password" name="pass1" id="pass1"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,equals[pass1]] form-control" type="password" name="pass2"
                                   id="pass2"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Minimum field size (6)</label>

                        <div class=" col-lg-4">
                            <input value="" class="validate[required,minSize[6]] form-control" type="text" name="minsize1"
                                   id="minsize1"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Maximum field size, optional</label>

                        <div class=" col-lg-4">
                            <input value="0123456789" class="validate[optional,maxSize[6]] form-control" type="text"
                                   name="maxsize1" id="maxsize1"/>
                            <span class="help-block">note that the field is optional - it won't fail if it has no value</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Number</label>

                        <div class=" col-lg-4">
                            <input value="-33.87a" class="validate[required,custom[number]] form-control" type="text"
                                   name="numbe2r" id="number2"/>
                            <span class="help-block">a signed floating number, ie: -3849.354, 38.00, 38, .77</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">IP</label>

                        <div class=" col-lg-4">
                            <input value="192.168.3." class="validate[required,custom[ipv4]] form-control" type="text"
                                   name="ip" id="ip"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>

                        <div class=" col-lg-4">
                            <input value="201-12-01" class="validate[required,custom[date]] form-control" type="text"
                                   name="date3" id="date3"/>
                            <span class="help-block">ISO 8601 dates only YYYY-mm-dd</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-lg-4">Date Earlier</label>

                        <div class=" col-lg-4">
                            <input value="2012/12/16" class="validate[custom[date],past[2012/09/13]] form-control"
                                   type="text" name="past" id="past"/>
                            <span class="help-block">Please enter a date ealier than 2012/09/13</span>
                        </div>
                    </div>

                    <div class="form-actions no-margin-bottom">
                        <input type="submit" value="Validate" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-th-large"></i></div>
                <h5>Block Validation</h5>
                <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                      <i class="fa fa-times"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->

            </header>
            <div id="collapseOne" class="body">
                <form action="#" class="form-horizontal" id="block-validate">

                    <div class="form-group">
                        <label class="control-label col-lg-4">Required</label>
                        <div class="col-lg-4">
                            <input type="text" id="required2" name="required2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>

                        <div class="col-lg-4">
                            <input type="email" id="email2" name="email2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class="col-lg-4">
                            <input type="password" id="password2" name="password2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class="col-lg-4">
                            <input type="password" id="confirm_password2" name="confirm_password2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>

                        <div class="col-lg-4">
                            <input type="date" id="date2" name="date2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Url</label>

                        <div class="col-lg-4">
                            <input type="url" id="url2" name="url2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Digits Only</label>

                        <div class="col-lg-4">
                            <input type="text" id="digits" name="digits" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Range [6,16]</label>

                        <div class="col-lg-4">
                            <input type="text" id="range" name="range" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Please agree to our policy</label>

                        <div class="col-lg-4">
                            <input type="checkbox" id="agree2" name="agree2" class="form-control">
                        </div>
                    </div>
                    <div class="form-actions no-margin-bottom">
                        <input type="submit" value="Validate" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-ellipsis-h"></i></div>
                <h5>Inline Validation</h5>
                <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                      <i class="fa fa-times"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->

            </header>
            <div id="collapse3" class="body">
                <form action="#" class="form-horizontal" id="inline-validate">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Required</label>

                        <div class="col-lg-8">
                            <input type="text" id="required" name="required" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>

                        <div class="col-lg-8">
                            <input type="email" id="email" name="email" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class="col-lg-8">
                            <input type="password" id="password" name="password" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class="col-lg-8">
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Date</label>

                        <div class="col-lg-8">
                            <input type="date" id="date" name="date" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Url</label>

                        <div class="col-lg-8">
                            <input type="url" id="url" name="url" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Please agree to our policy</label>

                        <div class="col-lg-8">
                            <input type="checkbox" id="agree" name="agree" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Minimum 3 Chars</label>

                        <div class="col-lg-8">
                            <input type="text" id="minsize" name="minsize" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Maximum 6 Chars</label>

                        <div class="col-lg-8">
                            <input type="text" id="maxsize" name="maxsize" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Minimum 3 </label>

                        <div class="col-lg-8">
                            <input type="text" id="minNum" name="minNum" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Maximum 16 </label>

                        <div class="col-lg-8">
                            <input type="text" id="maxNum" name="maxNum" class="form-control col-lg-6">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Validate" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
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

                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <script src="/assets/lib/jquery-validation/jquery.validate.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formValidation();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>