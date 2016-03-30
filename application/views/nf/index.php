
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Nifty - Responsive admin template.</title>


    <!--STYLESHEET-->
    <!--=================================================-->



    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/css/nf/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/css/nf/nifty.min.css" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!--Animate.css [ OPTIONAL ]-->
    <link href="/css/nf/animate.min.css" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]-->
    <link href="/css/nf/morris.min.css" rel="stylesheet">


    <!--Switchery [ OPTIONAL ]-->
    <link href="/css/nf/switchery.min.css" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="/css/nf/bootstrap-select.min.css" rel="stylesheet">


    <!--Demo script [ DEMONSTRATION ]-->
    <link href="/css/nf/nifty-demo.min.css" rel="stylesheet">




    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="/css/nf/pace.min.css" rel="stylesheet">
    <script src="/js/nf/pace.min.js"></script>



    <!--

    REQUIRED
    You must include this in your project.

    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.

    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.

    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.

    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    -->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text">Nifty</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="fa fa-navicon fa-lg"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->



                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="fa fa-bell fa-lg"></i>
                            <span class="badge badge-header badge-danger">9</span>
                        </a>

                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md">
                            <div class="pad-all bord-btm">
                                <p class="text-lg text-muted text-semibold mar-no">You have 9 notifications.</p>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <p class="pull-left">Database Repair</p>
                                                    <p class="pull-right">70%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 70%;" class="progress-bar">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <p class="pull-left">Upgrade Progress</p>
                                                    <p class="pull-right">10%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                        <span class="sr-only">10% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Lucy sent you a message</div>
                                                    <small class="text-muted">30 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Jackson sent you a message</div>
                                                    <small class="text-muted">40 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class="media-left">
									                    <span class="icon-wrap icon-circle bg-danger">
									                        <i class="fa fa-hdd-o fa-lg"></i>
									                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">HDD is full</div>
                                                    <small class="text-muted">50 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
									                    <span class="icon-wrap bg-info">
									                        <i class="fa fa-file-word-o fa-lg"></i>
									                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Write a news article</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="label label-danger pull-right">New</span>
                                                <div class="media-left">
									                    <span class="icon-wrap bg-purple">
									                        <i class="fa fa-comment fa-lg"></i>
									                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Comment Sorting</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
									                    <span class="icon-wrap bg-success">
									                        <i class="fa fa-user fa-lg"></i>
									                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New User Registered</div>
                                                    <small class="text-muted">4 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Jackson sent you a message</div>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block">
                                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->



                    <!--Mega dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="mega-dropdown">
                        <a href="#" class="mega-dropdown-toggle">
                            <i class="fa fa-th-large fa-lg"></i>
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="clearfix">
                                <div class="col-sm-12 col-md-3">

                                    <!--Mega menu widget-->
                                    <div class="text-center bg-purple pad-all">
                                        <h3 class="text-thin mar-no">Weekend shopping</h3>
                                        <div class="pad-ver box-inline">
                                                <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
                                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                                </span>
                                        </div>
                                        <p class="pad-btm">
                                            Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                        </p>
                                        <a href="#" class="btn btn-purple">Learn More...</a>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Pages</li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Search Result</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Sreen Lock</a></li>
                                        <li><a href="#" class="disabled">Disabled</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Icons</li>
                                        <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
                                        <li><a href="#">Skycons</a></li>
                                    </ul>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Mailbox</li>
                                        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                                        <li><a href="#">Read Message</a></li>
                                        <li><a href="#">Compose</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Featured</li>
                                        <li><a href="#">Smart navigation</a></li>
                                        <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
                                        <li><a href="#">Lot of themes</a></li>
                                        <li><a href="#">Transition effects</a></li>
                                    </ul>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Components</li>
                                        <li><a href="#">Tables</a></li>
                                        <li><a href="#">Charts</a></li>
                                        <li><a href="#">Forms</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <form role="form" class="form">
                                                <div class="form-group">
                                                    <label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
                                                    <input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
                                                </div>
                                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End mega dropdown-->

                </ul>
                <ul class="nav navbar-top-links pull-right">

                    <!--Language selector-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                </span>
                        </a>

                        <!--Language selector menu-->
                        <ul class="head-list dropdown-menu">
                            <li>
                                <!--English-->
                                <a href="#" class="active">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">English</span>
                                </a>
                            </li>
                            <li>
                                <!--France-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/france.png" alt="France">
                                    <span class="lang-id">FR</span>
                                    <span class="lang-name">Fran&ccedil;ais</span>
                                </a>
                            </li>
                            <li>
                                <!--Germany-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/germany.png" alt="Germany">
                                    <span class="lang-id">DE</span>
                                    <span class="lang-name">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <!--Italy-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/italy.png" alt="Italy">
                                    <span class="lang-id">IT</span>
                                    <span class="lang-name">Italiano</span>
                                </a>
                            </li>
                            <li>
                                <!--Spain-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/spain.png" alt="Spain">
                                    <span class="lang-id">ES</span>
                                    <span class="lang-name">Espa&ntilde;ol</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End language selector-->



                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture">
                                </span>
                            <div class="username hidden-xs">John Doe</div>
                        </a>


                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                            <!-- Dropdown heading  -->
                            <div class="pad-all bord-btm">
                                <p class="text-lg text-muted text-semibold mar-btm">750Gb of 1,000Gb Used</p>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" style="width: 70%;">
                                        <span class="sr-only">70%</span>
                                    </div>
                                </div>
                            </div>


                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user fa-fw fa-lg"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">9</span>
                                        <i class="fa fa-envelope fa-fw fa-lg"></i> Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success pull-right">New</span>
                                        <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-question-circle fa-fw fa-lg"></i> Help
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-lock fa-fw fa-lg"></i> Lock screen
                                    </a>
                                </li>
                            </ul>

                            <!-- Dropdown footer -->
                            <div class="pad-all text-right">
                                <a href="pages-login.html" class="btn btn-primary">
                                    <i class="fa fa-sign-out fa-fw"></i> Logout
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->

                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Dashboard</h1>

                <!--Searchbox-->
                <div class="searchbox">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
                    </div>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->


            <!--Breadcrumb-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End breadcrumb-->




            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <div class="row">
                    <div class="col-lg-7">

                        <!--Network Line Chart-->
                        <!--===================================================-->
                        <div id="demo-panel-network" class="panel">
                            <div class="panel-heading">
                                <div class="panel-control">
                                    <button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="fa fa-rotate-right"></i></button>
                                    <div class="btn-group">
                                        <button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h3 class="panel-title">Network</h3>
                            </div>

                            <!--Morris line chart placeholder-->
                            <div id="morris-chart-network" class="morris-full-content"></div>

                            <!--Chart information-->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <p class="text-semibold text-uppercase">CPU Temperature</p>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <span class="text-3x text-thin">43.7</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no">°C</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-7 text-sm">
                                                <p>
                                                    <span>Min Values</span>
					                                    <span class="pad-lft text-semibold">
					                                        <span class="text-lg">27°</span>
					                                        <span class="labellabel-success mar-lft">
					                                            <i class="fa fa-caret-down text-success"></i>
					                                            <smal>23%</smal>
					                                        </span>
					                                    </span>
                                                </p>
                                                <p>
                                                    <span>Max Values</span>
					                                    <span class="pad-lft text-semibold">
					                                        <span class="text-lg">69°</span>
					                                        <span class="labellabel-danger mar-lft">
					                                            <i class="fa fa-caret-up text-danger"></i>
					                                            <smal>57%</smal>
					                                        </span>
					                                    </span>
                                                </p>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="pad-rgt">
                                            <p class="text-semibold text-uppercase"><i class="fa fa-question-circle fa-fw text-primary"></i> Today Tips </p>
                                            <p class="text-muted mar-top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <p class="text-uppercase text-semibold">Bandwidth Usage</p>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="media pad-btm">
                                                    <div class="media-left">
                                                        <span class="text-2x text-thin">754.9</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no">Mbps</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pad-btm">
                                                <div class="clearfix">
                                                    <p class="pull-left mar-no">Income</p>
                                                    <p class="pull-right mar-no">70%</p>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" style="width: 70%;">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="clearfix">
                                                    <p class="pull-left mar-no">Outcome</p>
                                                    <p class="pull-right mar-no">10%</p>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-info" style="width: 10%;">
                                                        <span class="sr-only">10% Complete</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--===================================================-->
                        <!--End network line chart-->

                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline Area Chart-->
                                <div class="panel panel-success panel-colorful">

                                    <div class="pad-all">
                                        <p class="text-lg text-semibold"><i class="fa fa-hdd-o"></i> HDD Usage</p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">132Gb</span>
                                            Free Space
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">1,45Gb</span>
                                            Used space
                                        </p>
                                    </div>
                                    <div class="pad-all text-center">

                                        <!--Placeholder-->
                                        <div id="demo-sparkline-area"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline Line Chart-->
                                <div class="panel panel-info panel-colorful">
                                    <div class="pad-all">
                                        <p class="text-lg text-semibold">Earning</p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">$764</span>
                                            Today
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">$1,332</span>
                                            Last 7 Day
                                        </p>
                                    </div>
                                    <div class="pad-all text-center">

                                        <!--Placeholder-->
                                        <div id="demo-sparkline-line"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline bar chart -->
                                <div class="panel panel-purple panel-colorful">
                                    <div class="pad-all">
                                        <p class="text-lg text-semibold">Sales</p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">$764</span>
                                            Today
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">$1,332</span>
                                            Last 7 Day
                                        </p>
                                    </div>
                                    <div class="pad-all text-center">

                                        <!--Placeholder-->
                                        <div id="demo-sparkline-bar" class="box-inline"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">

                                <!--Sparkline pie chart -->
                                <div class="panel panel-warning panel-colorful">
                                    <div class="pad-all">
                                        <p class="text-lg text-semibold">Task Progress</p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">34</span>
                                            Completed
                                        </p>
                                        <p class="mar-no">
                                            <span class="pull-right text-bold">79</span>
                                            Total
                                        </p>
                                    </div>
                                    <div class="pad-all">
                                        <ul class="list-group list-unstyled">
                                            <li class="mar-btm">
                                                <span class="label label-warning pull-right">15%</span>
                                                <p>Progress</p>
                                                <div class="progress progress-md">
                                                    <div style="width: 15%;" class="progress-bar progress-bar-light">
                                                        <span class="sr-only">15%</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!--Placeholder-->
                                        <div id="demo-sparkline-pie" class="box-inline hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Extra Small Weather Widget-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel middle">
                            <div class="media-left pad-all">
                                <canvas id="demo-weather-xs-icon" width="48" height="48"></canvas>
                            </div>

                            <div class="media-body">
                                <p class="text-2x mar-no text-mint">25&#176;</p>
                                <p class="text-muted mar-no">Partly Cloudy Day</p>
                            </div>
                        </div>

                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Extra Small Weather Widget-->


                    </div>
                </div>


                <!--Tiles - Bright Version-->
                <!--===================================================-->
                <div class="row">
                    <div class="col-sm-6 col-lg-3">

                        <!--Registered User-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel media pad-all">
                            <div class="media-left">
					                <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
					                <i class="fa fa-user fa-2x"></i>
					                </span>
                            </div>

                            <div class="media-body">
                                <p class="text-2x mar-no text-thin">241</p>
                                <p class="text-muted mar-no">Registered User</p>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    </div>
                    <div class="col-sm-6 col-lg-3">

                        <!--New Order-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel media pad-all">
                            <div class="media-left">
					                <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
					                <i class="fa fa-shopping-cart fa-2x"></i>
					                </span>
                            </div>

                            <div class="media-body">
                                <p class="text-2x mar-no text-thin">543</p>
                                <p class="text-muted mar-no">New Order</p>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    </div>
                    <div class="col-sm-6 col-lg-3">

                        <!--Comments-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel media pad-all">
                            <div class="media-left">
					                <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
					                <i class="fa fa-comment fa-2x"></i>
					                </span>
                            </div>

                            <div class="media-body">
                                <p class="text-2x mar-no text-thin">34</p>
                                <p class="text-muted mar-no">Comments</p>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    </div>
                    <div class="col-sm-6 col-lg-3">

                        <!--Sales-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel media pad-all">
                            <div class="media-left">
					                <span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
					                <i class="fa fa-dollar fa-2x"></i>
					                </span>
                            </div>

                            <div class="media-body">
                                <p class="text-2x mar-no text-thin">654</p>
                                <p class="text-muted mar-no">Sales</p>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    </div>
                </div>
                <!--===================================================-->
                <!--End Tiles - Bright Version-->

                <div class="row">
                    <div class="col-lg-4">
                        <!--List Todo-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel panel-trans">
                            <div class="panel-heading">
                                <div class="panel-control">
                                    <button class="btn btn-default"><i class="fa fa-gear"></i></button>
                                </div>
                                <h3 class="panel-title">To do list</h3>
                            </div>
                            <div class="pad-ver">
                                <ul class="list-group bg-trans list-todo mar-no">
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon">
                                            <input type="checkbox">
                                            <span>Find an idea.</span>
                                        </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon active">
                                            <input type="checkbox" checked>
                                            <span>Do some work</span>
                                        </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon">
                                            <input type="checkbox">
                                            <span>Read the book</span>
                                        </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon">
                                            <input type="checkbox">
                                            <span>Upgrade server</span>
                                        </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon active">
                                            <input type="checkbox" checked>
                                            <span>Redesign my logo</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="input-group pad-all">
                                <input type="text" class="form-control" placeholder="New task" autocomplete="off">
					                        <span class="input-group-btn">
					                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
					                        </span>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End todo list-->
                    </div>
                    <div class="col-lg-4">
                        <!--Weather widget-->
                        <!--===================================================-->
                        <div id="demo-weather-widget-md" class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-control">
                                    <button class="btn btn-default"><i class="fa fa-magic"></i></button>
                                    <button class="btn btn-default"><i class="fa fa-plus"></i></button>
                                </div>
                                <h3 class="panel-title"><i class="fa fa-map-marker fa-fw"></i> San Jose, CA</h3>
                            </div>

                            <!--Weather widget body-->
                            <div class="panel-body bg-primary">

                                <div class="media">
                                    <div class="media-left">
                                        <p class="text-4x text-thin mar-no">27&#176;</p>
                                        <p class="mar-no">21&#176; / 30&#176;</p>
                                        <p class="text-semibold text-nowrap">Partly Cloudy Day</p>
                                    </div>
                                    <div class="media-body text-center">
                                        <canvas id="demo-weather-md-icon-1" width="90" height="90"></canvas>
                                    </div>
                                </div>
                                <ul class="list-inline text-nowrap">
                                    <li><i class="fa fa-random fa-fw"></i> 17.67mph</li>
                                    <li><i class="fa fa-tint fa-fw"></i> 3%</li>
                                </ul>
                            </div>

                            <!--Weather widget footer-->
                            <div class="pad-all text-center">
                                <ul class="list-unstyled mar-no clearfix">
                                    <li class="col-xs-4">
                                        <div class="text-uppercase par-btm">
                                            <div class="text-semibold">Sat</div>
                                            <small class="text-muted">Cloudy</small>
                                        </div>
                                        <canvas id="demo-weather-md-icon-2" width="24" height="24"></canvas>
                                        <div class="text-sm">18 &#176; 25 &#176;</div>
                                    </li>
                                    <li class="col-xs-4">
                                        <div class="text-uppercase par-btm">
                                            <div class="text-semibold">Sun</div>
                                            <small class="text-muted">Wind</small>
                                        </div>
                                        <canvas id="demo-weather-md-icon-3" width="24" height="24"></canvas>
                                        <div class="text-sm">17 &#176; 23 &#176;</div>
                                    </li>
                                    <li class="col-xs-4">
                                        <div class="text-uppercase par-btm">
                                            <div class="text-semibold">Mon</div>
                                            <small class="text-muted">Rain</small>
                                        </div>
                                        <canvas id="demo-weather-md-icon-4" width="24" height="24"></canvas>
                                        <div class="text-sm">20 &#176; 21 &#176;</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Weather widget-->
                    </div>
                    <div class='col-lg-4'>
                        <div class="panel">
                            <div class="pad-all">
                                <div class="media mar-btm">
                                    <div class="media-left">
                                        <img src="img/av6.png" class="img-md img-circle" alt="Avatar">
                                    </div>
                                    <div class="media-body">
                                        <p class="text-lg text-semibold mar-no">Brenda Fuller</p>
                                        <p>Project manager</p>
                                    </div>
                                </div>
                                <blockquote class="bq-sm bq-open">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</blockquote>
                            </div>

                            <div class="bord-top">
                                <ul class="list-group bord-no">
                                    <li class="list-group-item list-item-sm">
                                        <div class="media-left">
                                            <i class="fa fa-facebook-official fa-lg"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="btn-link">Facebook</a>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-item-sm">
                                        <div class="media-left">
                                            <i class="fa fa-twitter fa-lg"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="btn-link">@BRfull</a>
                                            <br>
                                            Design my themes with <a href="#" class="btn-link">#Bootstrap</a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        </div>
                                    </li>
                                    <li class="list-group-item list-item-sm">
                                        <div class="media-left">
                                            <i class="fa fa-linkedin fa-lg"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="btn-link">brendafull</a>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-item-sm">
                                        <div class="media-body">

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
                        </div>
                        <h3 class="panel-title">Order Status</h3>
                    </div>

                    <!--Data Table-->
                    <!--===================================================-->
                    <div class="panel-body">
                        <div class="pad-btm form-inline">
                            <div class="row">
                                <div class="col-sm-6 table-toolbar-left">
                                    <button class="btn btn-purple btn-labeled fa fa-plus" id="demo-btn-addrow">Add</button>
                                    <button class="btn btn-default"><i class="fa fa-print"></i></button>
                                    <div class="btn-group">
                                        <button class="btn btn-default"><i class="fa fa-exclamation-circle"></i></button>
                                        <button class="btn btn-default"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="col-sm-6 table-toolbar-right">
                                    <div class="form-group">
                                        <input type="text" autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2">
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-default"><i class="fa fa fa-cloud-download"></i></button>
                                        <div class="btn-group">
                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>User</th>
                                    <th>Order date</th>
                                    <th>Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Tracking Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#" class="btn-link"> Order #53431</a></td>
                                    <td>Steve N. Horton</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                    <td>$45.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-success">Paid</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link"> Order #53432</a></td>
                                    <td>Charles S Boyle</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                    <td>$245.30</td>
                                    <td class="text-center">
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link"> Order #53433</a></td>
                                    <td>Lucy Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                    <td>$38.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link"> Order #53434</a></td>
                                    <td>Teresa L. Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                    <td>$77.99</td>
                                    <td class="text-center">
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link"> Order #53435</a></td>
                                    <td>Teresa L. Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                    <td>$18.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-success">Paid</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link">Order #53437</a></td>
                                    <td>Charles S Boyle</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                    <td>$658.00</td>
                                    <td class="text-center">
                                        <div class="label label-table label-danger">Refunded</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link">Order #536584</a></td>
                                    <td>Scott S. Calabrese</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                    <td>$45.58</td>
                                    <td class="text-center">
                                        <div class="label label-table label-warning">Unpaid</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="pull-right">
                            <ul class="pagination text-nowrap mar-no">
                                <li class="page-pre disabled">
                                    <a href="#">&lt;</a>
                                </li>
                                <li class="page-number active">
                                    <span>1</span>
                                </li>
                                <li class="page-number">
                                    <a href="#">2</a>
                                </li>
                                <li class="page-number">
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <span>...</span>
                                </li>
                                <li class="page-number">
                                    <a href="#">9</a>
                                </li>
                                <li class="page-next">
                                    <a href="#">&gt;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End Data Table-->

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Striped rows</h3>
                            </div>

                            <!-- Striped Table -->
                            <!--===================================================-->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#fakelink" class="btn-link">Order #53451</a></td>
                                            <td>Scott S. Calabrese</td>
                                            <td>$24.98</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#fakelink" class="btn-link">Order #53452</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td>$564.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#fakelink" class="btn-link">Order #53453</a></td>
                                            <td>Steve N. Horton</td>
                                            <td>$58.87</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#fakelink" class="btn-link">Order #53454</a></td>
                                            <td>Charles S Boyle</td>
                                            <td>$97.50</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#fakelink" class="btn-link">Order #53455</a></td>
                                            <td>Lucy Doe</td>
                                            <td>$12.79</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#fakelink" class="btn-link">Order #53456</a></td>
                                            <td>Michael Bunr</td>
                                            <td>$249.99</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--===================================================-->
                            <!-- End Striped Table -->

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bordered table</h3>
                            </div>

                            <!--Bordered Table-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>User</th>
                                            <th>Plan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td><a href="#" class="btn-link">Scott S. Calabrese</a></td>
                                            <td><span class="label label-purple">Bussines</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td><a href="#" class="btn-link">Teresa L. Doe</a></td>
                                            <td><span class="label label-info">Personal</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td><a href="#" class="btn-link">Steve N. Horton</a></td>
                                            <td><span class="label label-warning">Trial</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td><a href="#" class="btn-link">Charles S Boyle</a></td>
                                            <td><span class="label label-purple">Bussines</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td><a href="#" class="btn-link">Lucy Doe</a></td>
                                            <td><span class="label label-warning">Trial</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td><a href="#" class="btn-link">Michael Bunr</a></td>
                                            <td><span class="label label-info">Personal</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--===================================================-->
                            <!--End Bordered Table-->

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Hover rows</h3>
                            </div>

                            <!--Hover Rows-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <table class="table table-hover table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="min-width">Device</th>
                                        <th>Name</th>
                                        <th class="text-center">Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center"><span class="icon-wrap icon-wrap-sm icon-circle bg-purple"><i class="fa fa-desktop fa-lg"></i></span></td>
                                        <td>
                                            <span class="text-semibold">Desktop</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 4,234k</small>
                                        </td>
                                        <td class="text-center"><span class="text-danger text-semibold">- 28.76%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><span class="icon-wrap icon-wrap-sm icon-circle bg-info"><i class="fa fa-laptop fa-lg"></i></span></td>
                                        <td>
                                            <span class="text-semibold">Laptop</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 3,876k</small>
                                        </td>
                                        <td class="text-center"><span class="text-warning text-semibold">- 8.55%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><span class="icon-wrap icon-wrap-sm icon-circle bg-danger"><i class="fa fa-tablet fa-lg"></i></span></td>
                                        <td>
                                            <span class="text-semibold">Tablet</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 45,678k</small>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">+ 58.56%</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><span class="icon-wrap icon-wrap-sm icon-circle bg-mint"><i class="fa fa-mobile fa-lg"></i></span></td>
                                        <td>
                                            <span class="text-semibold">Smartphone</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 34,553k</small>
                                        </td>
                                        <td class="text-center"><span class="text-success text-semibold">+ 35.76%</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--===================================================-->
                            <!--End Hover Rows-->

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Condensed table</h3>
                            </div>

                            <!--Condensed Table-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <table class="table  table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53451</a></td>
                                        <td>Scott S. Calabrese</td>
                                        <td>$24.98</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53452</a></td>
                                        <td>Teresa L. Doe</td>
                                        <td>$564.00</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53453</a></td>
                                        <td>Steve N. Horton</td>
                                        <td>$58.87</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53454</a></td>
                                        <td>Charles S Boyle</td>
                                        <td>$97.50</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53455</a></td>
                                        <td>Lucy Doe</td>
                                        <td>$12.79</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53456</a></td>
                                        <td>Michael Bunr</td>
                                        <td>$249.99</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53451</a></td>
                                        <td>Scott S. Calabrese</td>
                                        <td>$24.98</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#fakelink" class="btn-link">Order #53452</a></td>
                                        <td>Teresa L. Doe</td>
                                        <td>$564.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--===================================================-->
                            <!--End Condensed Table-->

                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sample Toolbar</h3>
                    </div>

                    <!--Data Table-->
                    <!--===================================================-->
                    <div class="panel-body">
                        <div class="pad-btm form-inline">
                            <div class="row">
                                <div class="col-sm-6 table-toolbar-left">
                                    <button id="demo-btn-addrow" class="btn btn-purple btn-labeled fa fa-plus">Add</button>
                                    <button class="btn btn-default"><i class="fa fa-print"></i></button>
                                    <div class="btn-group">
                                        <button class="btn btn-default"><i class="fa fa-exclamation-circle"></i></button>
                                        <button class="btn btn-default"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="col-sm-6 table-toolbar-right">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-default"><i class="fa fa fa-cloud-download"></i></button>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                <i class="fa fa-cog"></i>
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Invoice</th>
                                    <th>User</th>
                                    <th>Order date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Tracking Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a class="btn-link" href="#"> Order #53431</a></td>
                                    <td>Steve N. Horton</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                    <td>$45.00</td>
                                    <td>
                                        <div class="label label-table label-success">Paid</div>
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><a class="btn-link" href="#"> Order #53432</a></td>
                                    <td>Charles S Boyle</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                    <td>$245.30</td>
                                    <td>
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td><i class="fa fa-plane"></i> CGX0089734531</td>
                                </tr>
                                <tr>
                                    <td><a class="btn-link" href="#"> Order #53433</a></td>
                                    <td>Lucy Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                    <td>$38.00</td>
                                    <td>
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td><i class="fa fa-plane"></i> CGX0089934571</td>
                                </tr>
                                <tr>
                                    <td><a class="btn-link" href="#"> Order #53434</a></td>
                                    <td>Teresa L. Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                    <td>$77.99</td>
                                    <td>
                                        <div class="label label-table label-info">Shipped</div>
                                    </td>
                                    <td><i class="fa fa-plane"></i> CGX0089734574</td>
                                </tr>
                                <tr>
                                    <td><a class="btn-link" href="#"> Order #53435</a></td>
                                    <td>Teresa L. Doe</td>
                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                    <td>$18.00</td>
                                    <td>
                                        <div class="label label-table label-success">Paid</div>
                                    </td>
                                    <td>-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End Data Table-->

                </div>


                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inline Form</h3>
                    </div>
                    <div class="panel-body">

                        <!-- Inline Form  -->
                        <!--===================================================-->
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="demo-inline-inputmail" class="sr-only">Email address</label>
                                <input type="email" placeholder="Enter email" id="demo-inline-inputmail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="demo-inline-inputpass" class="sr-only">Password</label>
                                <input type="password" placeholder="Password" id="demo-inline-inputpass" class="form-control">
                            </div>
                            <div class="checkbox">
                                <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Remember me</label>
                            </div>
                            <button class="btn btn-primary" type="submit">Sign in</button>
                        </form>
                        <!--===================================================-->
                        <!-- End Inline Form  -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Block styled form</h3>
                            </div>

                            <!--Block Styled Form -->
                            <!--===================================================-->
                            <form>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Firstname</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Lastname</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Website</label>
                                                <input type="url" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Block Styled Form -->

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Horizontal form</h3>
                            </div>

                            <!--Horizontal Form-->
                            <!--===================================================-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="demo-hor-inputemail">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" placeholder="Email" id="demo-hor-inputemail" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="demo-hor-inputpass">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <label class="form-checkbox form-normal form-primary">
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button class="btn btn-info" type="submit">Sign in</button>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Horizontal Form-->

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input size</h3>
                            </div>


                            <!--Input Size-->
                            <!--===================================================-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">Small Input</label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Normal Input</label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Normal" class="form-control" id="demo-is-inputnormal">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="demo-is-inputlarge" class="col-sm-3 control-label">Large Input</label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder=".input-lg" class="form-control input-lg" id="demo-is-inputlarge">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Grid Inputs</label>
                                        <div class="col-sm-3">
                                            <input type="text" placeholder=".col-sm-3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-5 col-sm-offset-3">
                                            <input type="text" placeholder=".col-sm-5" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-7 col-sm-offset-3">
                                            <input type="text" placeholder=".col-sm-7" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <input type="text" placeholder=".col-sm-9" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <button class="btn btn-info btn-labeled fa fa-user fa-lg" type="submit">Login</button>
                                            <button class="btn btn-warning btn-labeled fa fa-repeat fa-lg" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Input Size-->


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">No label form</h3>
                            </div>

                            <!--No Label Form-->
                            <!--===================================================-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 mar-btm">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-md-4 mar-btm">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-md-4 mar-btm">
                                            <input type="url" class="form-control" placeholder="Website">
                                        </div>
                                    </div>
                                    <textarea placeholder="Message" rows="13" class="form-control"></textarea>
                                </div>
                                <div class="panel-footer text-right">
                                    <button class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End No Label Form-->

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Icons Addons</h3>
                            </div>

                            <!--Icons Addons-->
                            <!--===================================================-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="input-group mar-btm">
                                        <span class="input-group-addon"><i class="fa fa-star fa-lg"></i></span>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="input-group mar-btm">
                                        <input type="email" class="form-control" placeholder="Folder name">
                                        <span class="input-group-addon"><i class="fa fa-folder fa-lg"></i></span>
                                    </div>
                                    <div class="input-group mar-btm">
                                        <span class="input-group-addon"><i class="fa fa-dollar fa-lg"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Icons Addons-->

                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Checkboxes and radio addons</h3>
                            </div>

                            <!--Checkboxes and Radio addons-->
                            <!--===================================================-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="input-group mar-btm">
											<span class="input-group-addon">
												<label class="form-checkbox form-icon active">
                                                    <input type="checkbox" checked>
                                                </label>
											</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group mar-btm">
											<span class="input-group-addon">
												<label class="form-radio form-icon">
                                                    <input type="radio" name="input-group-radio">
                                                </label>
											</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group mar-btm">
											<span class="input-group-addon">
												<label class="form-radio form-icon">
                                                    <input type="radio" name="input-group-radio">
                                                </label>
											</span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Checkboxes and Radio addons-->

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Buttons Addons</h3>
                            </div>

                            <!--Buttons Addons-->
                            <!--===================================================-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="input-group mar-btm">
											<span class="input-group-btn">
												<button class="btn btn-warning" type="button">Submit</button>
											</span>
                                        <input type="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="input-group mar-btm">
                                        <input type="text" placeholder="Search" class="form-control">
											<span class="input-group-btn">
												<button class="btn btn-danger btn-labeled fa fa-search" type="button">Search</button>
											</span>
                                    </div>
                                    <div class="input-group mar-btm">
											<span class="input-group-btn">
												<button class="btn btn-purple" type="button"><i class="fa fa-thumbs-up"></i></button>
											</span>
                                        <input type="text" placeholder="Comment" class="form-control">
											<span class="input-group-btn">
												<button class="btn btn-purple" type="button"><i class="fa fa-thumbs-down"></i></button>
											</span>
                                    </div>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Buttons Addon-->

                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Dropdowns Addons</h3>
                            </div>

                            <!--Dropdowns Addons-->
                            <!--===================================================-->
                            <form class="form-horizontal">
                                <div class="panel-body">
                                    <div class="input-group mar-btm">
                                        <div class="input-group-btn">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Action <i class="dropdown-caret fa fa-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" placeholder="Username" class="form-control">
                                    </div>
                                    <div class="input-group mar-btm">
                                        <input type="email" placeholder="Email" class="form-control">
                                        <div class="input-group-btn">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Action <i class="dropdown-caret fa fa-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="input-group mar-btm">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Action</button>
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-icon" type="button"><i class="dropdown-caret fa fa-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" placeholder="Comment" class="form-control">
                                        <div class="input-group-btn">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-icon" type="button"><i class="dropdown-caret fa fa-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!--End Dropdowns Addons-->

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Validation States</h3>
                            </div>

                            <!--Validation States-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="demo-vs-definput" class="control-label">Default input</label>
                                    <input type="text" id="demo-vs-definput" class="form-control">
                                </div>
                                <div class="form-group has-warning">
                                    <label for="demo-vs-warinput" class="control-label">Input with warning</label>
                                    <input type="text" id="demo-vs-warinput" class="form-control">
                                </div>
                                <div class="form-group has-error">
                                    <label for="demo-vs-errinput" class="control-label">Input with error</label>
                                    <input type="text" id="demo-vs-errinput" class="form-control">
                                </div>
                                <div class="form-group has-success">
                                    <label for="demo-vs-scsinput" class="control-label">Input with success</label>
                                    <input type="text" id="demo-vs-scsinput" class="form-control">
                                </div>
                            </div>
                            <!--===================================================-->
                            <!--END OF VALIDATION STATES-->

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">With optional icons</h3>
                            </div>
                            <div class="panel-body">

                                <!--Validation States-->
                                <!--===================================================-->
                                <div class="form-group has-feedback">
                                    <label for="demo-oi-definput" class="control-label">Default input</label>
                                    <input type="text" id="demo-oi-definput" class="form-control">
                                    <span class="fa fa-user fa-lg form-control-feedback"></span>
                                </div>
                                <div class="form-group has-success has-feedback">
                                    <label for="demo-oi-sccinput" class="control-label">Input with success</label>
                                    <input type="text" id="demo-oi-sccinput" class="form-control">
                                    <span class="fa fa-check fa-lg form-control-feedback"></span>
                                </div>
                                <div class="form-group has-warning has-feedback">
                                    <label for="demo-oi-warinput" class="control-label">Input with warning</label>
                                    <input type="text" id="demo-oi-warinput" class="form-control">
                                    <span class="fa fa-warning fa-lg form-control-feedback"></span>
                                </div>
                                <div class="form-group has-error has-feedback">
                                    <label for="demo-oi-errinput" class="control-label">Input with error</label>
                                    <input type="text" id="demo-oi-errinput" class="form-control">
                                    <span class="fa fa-times fa-lg form-control-feedback"></span>
                                </div>
                                <!--===================================================-->
                                <!--End Validation States-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Basic Form Elements</h3>
                            </div>


                            <!-- BASIC FORM ELEMENTS -->
                            <!--===================================================-->
                            <form class="panel-body form-horizontal form-padding">

                                <!--Static-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Static</label>
                                    <div class="col-md-9"><p class="form-control-static">Username</p></div>
                                </div>

                                <!--Text Input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="demo-text-input">Text Input</label>
                                    <div class="col-md-9">
                                        <input type="text" id="demo-text-input" class="form-control" placeholder="Text">
                                        <small class="help-block">This is a help text</small>
                                    </div>
                                </div>

                                <!--Email Input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="demo-email-input">Email Input</label>
                                    <div class="col-md-9">
                                        <input type="email" id="demo-email-input" class="form-control" placeholder="Enter your email">
                                        <small class="help-block">Please enter your email</small>
                                    </div>
                                </div>

                                <!--Password-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="demo-password-input">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="demo-password-input" class="form-control" placeholder="Password">
                                        <small class="help-block">Please enter password</small>
                                    </div>
                                </div>

                                <!--Readonly Input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="demo-readonly-input">Readonly input</label>
                                    <div class="col-md-9">
                                        <input type="text" id="demo-readonly-input" class="form-control" placeholder="Readonly input here..." readonly>
                                    </div>
                                </div>

                                <!--Textarea-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="demo-textarea-input">Textarea</label>
                                    <div class="col-md-9">
                                        <textarea id="demo-textarea-input" rows="9" class="form-control" placeholder="Your content here.."></textarea>
                                    </div>
                                </div>

                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="col-md-6 pad-no">

                                            <!-- Radio Buttons -->
                                            <div class="radio">
                                                <label class="form-radio form-normal active"><input type="radio" checked="" name="de-blk"> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-normal"><input type="radio" name="de-blk"> Option 2</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-normal"><input type="radio" name="de-blk"> Option 3</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 pad-no">

                                            <!-- Icon Radio Buttons -->
                                            <div class="radio">
                                                <label class="form-radio form-icon active"><input type="radio" checked="" name="ico-blk"> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-icon"><input type="radio" name="ico-blk"> Option 2</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-icon"><input type="radio" name="ico-blk"> Option 3</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Inline Radio buttons</label>
                                    <div class="col-md-9">
                                        <div class="radio">

                                            <!-- Inline radio buttons -->
                                            <label class="form-radio form-normal active"><input type="radio" checked="" name="def-w-label"> Option 1 (pre-checked)</label>
                                            <label class="form-radio form-normal"><input type="radio" name="def-w-label"> Option 2</label>
                                            <label class="form-radio form-normal"><input type="radio" name="def-w-label"> Option 3</label>

                                        </div>
                                        <hr class="hr-sm">
                                        <div class="radio">

                                            <!-- Inline Icon Radios Buttons -->
                                            <label class="form-radio form-icon active"><input type="radio" checked="" name="ico-w-label"> Option 1 (pre-checked)</label>
                                            <label class="form-radio form-icon"><input type="radio" name="ico-w-label"> Option 2</label>
                                            <label class="form-radio form-icon"><input type="radio" name="ico-w-label"> Option 3</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="col-md-6 pad-no form-block">

                                            <!-- Checkboxes -->
                                            <div class="checkbox">
                                                <label class="form-checkbox form-normal form-primary active"><input type="checkbox" checked=""> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option 2</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option 3</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 pad-no form-block">

                                            <!-- Icon Checkboxes -->
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon active"><input type="checkbox" checked=""> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon"><input type="checkbox"> Option 2</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon"><input type="checkbox"> Option 3</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Inline Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="checkbox">

                                            <!-- Inline Checkboxes -->
                                            <label class="form-checkbox form-normal form-primary active"><input type="checkbox" checked=""> Option 1 (pre-checked)</label>
                                            <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option 2</label>
                                            <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option 3</label>

                                        </div>
                                        <hr class="hr-sm">
                                        <div class="checkbox">

                                            <!-- Inline Icon Checkboxes -->
                                            <label class="form-checkbox form-icon active"><input type="checkbox" checked=""> Option 1 (pre-checked)</label>
                                            <label class="form-checkbox form-icon"><input type="checkbox"> Option 2</label>
                                            <label class="form-checkbox form-icon"><input type="checkbox"> Option 3</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">File input</label>
                                    <div class="col-md-9">
											<span class="pull-left btn btn-default btn-file">
											Browse... <input type="file">
											</span>
                                    </div>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!-- END BASIC FORM ELEMENTS -->


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Disabled</h3>
                            </div>


                            <!-- DISABLED FORM ELEMENTS-->
                            <!--===================================================-->
                            <form class="panel-body form-horizontal form-padding">

                                <!--Static-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Static</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">Username</p>
                                    </div>
                                </div>

                                <!--Disabled Text Input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Text Input</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Text" disabled>
                                        <small class="help-block">This is a help text</small>
                                    </div>
                                </div>

                                <!--Disabled Email Input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email Input</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" placeholder="Enter your email" disabled>
                                        <small class="help-block">Please enter your email</small>
                                    </div>
                                </div>

                                <!--Disabled Password-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" placeholder="Password" disabled>
                                        <small class="help-block">Please enter password</small>
                                    </div>
                                </div>

                                <!--Readonly Input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Readonly input</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Readonly input here..." readonly disabled>
                                    </div>
                                </div>


                                <!--Disabled Textarea-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Textarea</label>
                                    <div class="col-md-9">
                                        <textarea rows="9" class="form-control" placeholder="Your content here.." disabled></textarea>
                                    </div>
                                </div>

                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="col-md-6 pad-no">

                                            <!--Disabled Radio Buttons -->
                                            <div class="radio">
                                                <label class="form-radio form-normal active disabled"><input type="radio" name="de-blk2" checked disabled> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-normal disabled"><input type="radio" name="de-blk2" disabled> Option 2</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-normal disabled"><input type="radio" name="de-blk2" disabled> Option 3</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 pad-no form-block">

                                            <!--Disabled Icon Radio Buttons -->
                                            <div class="radio">
                                                <label class="form-radio form-icon active disabled"><input type="radio" name="ico-blk2" checked disabled> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-icon disabled"><input type="radio" name="ico-blk2" disabled> Option 2</label>
                                            </div>
                                            <div class="radio">
                                                <label class="form-radio form-icon disabled"><input type="radio" name="ico-blk2" disabled> Option 3</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Inline Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="radio">

                                            <!-- Inline Disabled Radios Buttons -->
                                            <label class="form-radio form-normal active disabled"><input type="radio" name="def-w-label2" checked disabled> Option 1 (pre-checked)</label>
                                            <label class="form-radio form-normal disabled"><input type="radio" name="def-w-label2" disabled> Option 2</label>
                                            <label class="form-radio form-normal disabled"><input type="radio" name="def-w-label2" disabled> Option 3</label>

                                        </div>
                                        <hr class="hr-sm">
                                        <div class="radio">

                                            <!-- Inline Disabled Icon Radios Buttons -->
                                            <label class="form-radio form-icon active disabled"><input type="radio" name="ico-w-label2" checked disabled> Option 1 (pre-checked)</label>
                                            <label class="form-radio form-icon disabled"><input type="radio" name="ico-w-label2" disabled> Option 2</label>
                                            <label class="form-radio form-icon disabled"><input type="radio" name="ico-w-label2" disabled> Option 3</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="col-md-6 pad-no">

                                            <!-- Disabled Checkboxes -->
                                            <div class="checkbox">
                                                <label class="form-checkbox form-normal form-primary active disabled"><input type="checkbox" checked disabled> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-normal form-primary disabled"><input type="checkbox" disabled> Option 2</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-normal form-primary disabled"><input type="checkbox" disabled> Option 3</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 pad-no">

                                            <!-- Disabled Icon Checkboxes -->
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon active disabled"><input type="checkbox" checked disabled> Option 1 (pre-checked)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled> Option 2</label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled> Option 3</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pad-ver">
                                    <label class="col-md-3 control-label">Inline Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="checkbox">

                                            <!-- Inline Disabled Checkboxes -->
                                            <label class="form-checkbox form-normal form-primary active disabled"><input type="checkbox" checked disabled> Option 1 (pre-checked)</label>
                                            <label class="form-checkbox form-normal form-primary disabled"><input type="checkbox" disabled> Option 2</label>
                                            <label class="form-checkbox form-normal form-primary disabled"><input type="checkbox" disabled> Option 3</label>

                                        </div>
                                        <hr class="hr-sm">
                                        <div class="checkbox">

                                            <!-- Inline Disabled Icon Checkboxes -->
                                            <label class="form-checkbox form-icon active disabled"><input type="checkbox" checked disabled> Option 1 (pre-checked)</label>
                                            <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled> Option 2</label>
                                            <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled> Option 3</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">File input</label>
                                    <div class="col-md-9">
											<span class="pull-left btn btn-default btn-file disabled">
												Browse... <input type="file" disabled>
											</span>
                                    </div>
                                </div>
                            </form>
                            <!--===================================================-->
                            <!-- END DISABLED FORM ELEMENTS -->

                        </div>
                    </div>
                </div>


            </div>
            <!--===================================================-->
            <!--End page content-->

            </div>
            <!--===================================================-->
            <!--End page content-->


        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->



        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">

                <!--Shortcut buttons-->
                <!--================================-->
                <div id="mainnav-shortcut">
                    <ul class="list-unstyled">
                        <li class="col-xs-4" data-content="Additional Sidebar">
                            <a id="demo-toggle-aside" class="shortcut-grid" href="#">
                                <i class="fa fa-magic"></i>
                            </a>
                        </li>
                        <li class="col-xs-4" data-content="Notification">
                            <a id="demo-alert" class="shortcut-grid" href="#">
                                <i class="fa fa-bullhorn"></i>
                            </a>
                        </li>
                        <li class="col-xs-4" data-content="Page Alerts">
                            <a id="demo-page-alert" class="shortcut-grid" href="#">
                                <i class="fa fa-bell"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--================================-->
                <!--End shortcut buttons-->


                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">
                            <ul id="mainnav-menu" class="list-group">

                                <!--Category name-->
                                <li class="list-header">Navigation</li>

                                <!--Menu list item-->
                                <li class="active-link">
                                    <a href="index.html">
                                        <i class="fa fa-dashboard"></i>
						                    <span class="menu-title">
												<strong>Dashboard</strong>
												<span class="label label-success pull-right">Top</span>
											</span>
                                    </a>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-th"></i>
						                    <span class="menu-title">
												<strong>Layouts</strong>
											</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
                                        <li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
                                        <li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
                                        <li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
                                        <li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
                                        <li><a href="layouts-aside-bright-theme.html">Bright aside theme</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
                                        <li><a href="layouts-fixed-footer.html">Fixed Footer</a></li>

                                    </ul>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="widgets.html">
                                        <i class="fa fa-flask"></i>
						                    <span class="menu-title">
												<strong>Widgets</strong>
												<span class="pull-right badge badge-warning">9</span>
											</span>
                                    </a>
                                </li>

                                <li class="list-divider"></li>

                                <!--Category name-->
                                <li class="list-header">Components</li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="menu-title">UI Elements</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-checkboxes-radio.html">Checkboxes &amp; Radio</a></li>
                                        <li><a href="ui-panels.html">Panels</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-progress-bars.html">Progress bars</a></li>
                                        <li><a href="ui-components.html">Components</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-list-group.html">List Group</a></li>
                                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                        <li><a href="ui-alerts-tooltips.html">Alerts &amp; Tooltips</a></li>
                                        <li><a href="ui-helper-classes.html">Helper Classes</a></li>

                                    </ul>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-edit"></i>
                                        <span class="menu-title">Forms</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="forms-general.html">General</a></li>
                                        <li><a href="forms-components.html">Components</a></li>
                                        <li><a href="forms-validation.html">Validation</a></li>
                                        <li><a href="forms-wizard.html">Wizard</a></li>

                                    </ul>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-table"></i>
                                        <span class="menu-title">Tables</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="tables-static.html">Static Tables</a></li>
                                        <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
                                        <li><a href="tables-datatable.html">Data Tables<span class="label label-info pull-right">New</span></a></li>
                                        <li><a href="tables-footable.html">Foo Tables<span class="label label-info pull-right">New</span></a></li>

                                    </ul>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="charts.html">
                                        <i class="fa fa-line-chart"></i>
                                        <span class="menu-title">Charts</span>
                                    </a>
                                </li>

                                <li class="list-divider"></li>

                                <!--Category name-->
                                <li class="list-header">Extra</li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-plug"></i>
						                    <span class="menu-title">
												Miscellaneous
												<span class="label label-mint pull-right">New</span>
											</span>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="misc-calendar.html">Calendar</a></li>
                                        <li><a href="misc-maps.html">Google Maps</a></li>

                                    </ul>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                        <span class="menu-title">Email</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="mailbox.html">Inbox</a></li>
                                        <li><a href="mailbox-message.html">View Message</a></li>
                                        <li><a href="mailbox-compose.html">Compose Message</a></li>

                                    </ul>
                                </li>

                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-file"></i>
                                        <span class="menu-title">Pages</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="pages-blank.html">Blank Page</a></li>
                                        <li><a href="pages-profile.html">Profile</a></li>
                                        <li><a href="pages-search-results.html">Search Results</a></li>
                                        <li><a href="pages-timeline.html">Timeline<span class="label label-info pull-right">New</span></a></li>
                                        <li><a href="pages-faq.html">FAQ</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="pages-404.html">404 Error</a></li>
                                        <li><a href="pages-500.html">500 Error</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-password-reminder.html">Password Reminder</a></li>
                                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>

                                    </ul>
                                </li>


                                <!--Menu list item-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-plus-square"></i>
                                        <span class="menu-title">Menu Level</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="#">Second Level Item</a></li>
                                        <li><a href="#">Second Level Item</a></li>
                                        <li><a href="#">Second Level Item</a></li>
                                        <li class="list-divider"></li>
                                        <li>
                                            <a href="#">Third Level<i class="arrow"></i></a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="#">Third Level Item</a></li>
                                                <li><a href="#">Third Level Item</a></li>
                                                <li><a href="#">Third Level Item</a></li>
                                                <li><a href="#">Third Level Item</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Third Level<i class="arrow"></i></a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="#">Third Level Item</a></li>
                                                <li><a href="#">Third Level Item</a></li>
                                                <li><a href="#">Third Level Item</a></li>
                                                <li class="list-divider"></li>
                                                <li><a href="#">Third Level Item</a></li>
                                                <li><a href="#">Third Level Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>


                            <!--Widget-->
                            <!--================================-->
                            <div class="mainnav-widget">

                                <!-- Show the button on collapsed navigation -->
                                <div class="show-small">
                                    <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                        <i class="fa fa-desktop"></i>
                                    </a>
                                </div>

                                <!-- Hide the content on collapsed navigation -->
                                <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                    <ul class="list-group">
                                        <li class="list-header pad-no pad-ver">Server Status</li>
                                        <li class="mar-btm">
                                            <span class="label label-primary pull-right">15%</span>
                                            <p>CPU Usage</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                    <span class="sr-only">15%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mar-btm">
                                            <span class="label label-purple pull-right">75%</span>
                                            <p>Bandwidth</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                    <span class="sr-only">75%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--================================-->
                            <!--End widget-->

                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->

            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

        <!--ASIDE-->
        <!--===================================================-->
        <aside id="aside-container">
            <div id="aside">
                <div class="nano">
                    <div class="nano-content">

                        <!--Nav tabs-->
                        <!--================================-->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#demo-asd-tab-1" data-toggle="tab">
                                    <i class="fa fa-comments"></i>
                                    <span class="badge badge-purple">7</span>
                                </a>
                            </li>
                            <li>
                                <a href="#demo-asd-tab-2" data-toggle="tab">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#demo-asd-tab-3" data-toggle="tab">
                                    <i class="fa fa-wrench"></i>
                                </a>
                            </li>
                        </ul>
                        <!--================================-->
                        <!--End nav tabs-->



                        <!-- Tabs Content -->
                        <!--================================-->
                        <div class="tab-content">

                            <!--First tab (Contact list)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                <h4 class="pad-hor text-thin">
                                    <span class="pull-right badge badge-warning">3</span> Family
                                </h4>

                                <!--Family-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <div class="media-left">
                                            <img class="img-circle img-xs" src="img/av2.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <div class="text-lg">Stephen Tran</div>
                                            <span class="text-muted">Availabe</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left">
                                            <img class="img-circle img-xs" src="img/av4.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <div class="text-lg">Brittany Meyer</div>
                                            <span class="text-muted">I think so</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left">
                                            <img class="img-circle img-xs" src="img/av3.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <div class="text-lg">Donald Brown</div>
                                            <span class="text-muted">Lorem ipsum dolor sit amet.</span>
                                        </div>
                                    </a>
                                </div>


                                <hr>
                                <h4 class="pad-hor text-thin">
                                    <span class="pull-right badge badge-info">4</span> Friends
                                </h4>

                                <!--Friends-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <div class="media-left">
                                            <img class="img-circle img-xs" src="img/av5.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <div class="text-lg">Betty Murphy</div>
                                            <span class="text-muted">Bye</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left">
                                            <img class="img-circle img-xs" src="img/av6.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <div class="text-lg">Olivia Spencer</div>
                                            <span class="text-muted">Thank you!</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left">
                                            <img class="img-circle img-xs" src="img/av4.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <div class="text-lg">Sarah Ruiz</div>
                                            <span class="text-muted">2 hours ago</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left">
                                            <img class="img-circle img-xs" src="img/av3.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <div class="text-lg">Paul Aguilar</div>
                                            <span class="text-muted">2 hours ago</span>
                                        </div>
                                    </a>
                                </div>


                                <hr>
                                <h4 class="pad-hor text-thin">
                                    <span class="pull-right badge badge-success">Offline</span> Works
                                </h4>

                                <!--Works-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-pink badge-icon badge-fw pull-left"></span> Lucy Moon
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                    </a>
                                </div>

                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End first tab (Contact list)-->


                            <!--Second tab (Custom layout)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade" id="demo-asd-tab-2">

                                <!--Monthly billing-->
                                <div class="pad-all">
                                    <h4 class="text-lg mar-no">Monthly Billing</h4>
                                    <p class="text-sm">January 2015</p>
                                    <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                </div>


                                <hr>

                                <!--Information-->
                                <div class="text-center clearfix pad-top">
                                    <div class="col-xs-6">
                                        <span class="h4">4,327</span>
                                        <p class="text-muted text-uppercase"><small>Sales</small></p>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="h4">$ 1,252</span>
                                        <p class="text-muted text-uppercase"><small>Earning</small></p>
                                    </div>
                                </div>


                                <hr>

                                <!--Simple Menu-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item"><span class="label label-danger pull-right">Featured</span>Edit Password</a>
                                    <a href="#" class="list-group-item">Email</a>
                                    <a href="#" class="list-group-item"><span class="label label-success pull-right">New</span>Chat</a>
                                    <a href="#" class="list-group-item">Reports</a>
                                    <a href="#" class="list-group-item">Transfer Funds</a>
                                </div>


                                <hr>

                                <div class="text-center">Questions?
                                    <p class="text-lg text-semibold"> (415) 234-53454 </p>
                                    <small><em>We are here 24/7</em></small>
                                </div>
                            </div>
                            <!--End second tab (Custom layout)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                            <!--Third tab (Settings)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade" id="demo-asd-tab-3">
                                <ul class="list-group bg-trans">
                                    <li class="list-header">
                                        <h4 class="text-thin">Account Settings</h4>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="demo-switch" type="checkbox" checked>
                                        </div>
                                        <p>Show my personal status</p>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="demo-switch" type="checkbox" checked>
                                        </div>
                                        <p>Show offline contact</p>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="demo-switch" type="checkbox">
                                        </div>
                                        <p>Invisible mode </p>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                    </li>
                                </ul>


                                <hr>

                                <ul class="list-group bg-trans">
                                    <li class="list-header"><h4 class="text-thin">Public Settings</h4></li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="demo-switch" type="checkbox" checked>
                                        </div>
                                        Online status
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="demo-switch" type="checkbox" checked>
                                        </div>
                                        Show offline contact
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="demo-switch" type="checkbox">
                                        </div>
                                        Show my device icon
                                    </li>
                                </ul>



                                <hr>

                                <h4 class="pad-hor text-thin">Task Progress</h4>
                                <div class="pad-all">
                                    <p>Upgrade Progress</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                    </div>
                                    <small class="text-muted">15% Completed</small>
                                </div>
                                <div class="pad-hor">
                                    <p>Database</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                    </div>
                                    <small class="text-muted">17/23 Database</small>
                                </div>

                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--Third tab (Settings)-->

                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--===================================================-->
        <!--END ASIDE-->

    </div>



    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pull-right">
            <ul class="footer-list list-inline">
                <li>
                    <p class="text-sm">SEO Proggres</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                    </div>
                </li>

                <li>
                    <p class="text-sm">Online Tutorial</p>
                    <div class="progress progress-sm progress-light-base">
                        <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                    </div>
                </li>
                <li>
                    <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                </li>
            </ul>
        </div>



        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">Currently v2.3</div>



        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <p class="pad-lft">&#0169; 2015 Your Company</p>



    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->






<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="/js/nf/jquery-2.1.1.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="/js/nf/bootstrap.min.js"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="/js/nf/fastclick.min.js"></script>


<!--Nifty Admin [ RECOMMENDED ]-->
<script src="/js/nf/nifty.min.js"></script>


<!--Morris.js [ OPTIONAL ]-->
<script src="/js/nf/morris.min.js"></script>
<script src=/js/nf/raphael.min.js"></script>


<!--Sparkline [ OPTIONAL ]-->
<script src="/js/nf/jquery.sparkline.min.js"></script>


<!--Skycons [ OPTIONAL ]-->
<script src="/js/nf/skycons.min.js"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="/js/nf/switchery.min.js"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="/js/nf/bootstrap-select.min.js"></script>


<!--Demo script [ DEMONSTRATION ]-->
<script src="/js/nf/nifty-demo.min.js"></script>


<!--Specify page [ SAMPLE ]-->
<script src="/js/nf/dashboard.js"></script>


<!--

REQUIRED
You must include this in your project.

RECOMMENDED
This category must be included but you may modify which plugins or components which should be included in your project.

OPTIONAL
Optional plugins. You may choose whether to include it in your project or not.

DEMONSTRATION
This is to be removed, used for demonstration purposes only. This category must not be included in your project.

SAMPLE
Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


Detailed information and more samples can be found in the document.

-->


</body>
</html>
