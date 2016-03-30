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
                        <li class="list-header">Навигация</li>

                        <!--Menu list item-->
                        <li class="active-link">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="menu-title">
                                    <strong>Рабочий стол</strong>
                                    <!-- <span class="label label-success pull-right">Top</span> -->
                                </span>
                            </a>
                        </li>



                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="fa fa-th"></i>
						                    <span class="menu-title">
												<strong>Формы</strong>
											</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="/f89">Форма 89</a></li>
                                <li><a href="/f30">Форма 30</a></li>
                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li class="active-link">
                            <a href="/patients">
                                <i class="fa fa-wheelchair"></i>
						                    <span class="menu-title">
												<strong>Пациенты</strong>
												<!-- <span class="label label-success pull-right">Top</span> -->
											</span>
                            </a>
                        </li>
  <!--Menu list item-->
                        <li class="active-link">
                            <a href="/consults">
                                <i class="fa fa-heartbeat"></i>
						                    <span class="menu-title">
												<strong>Обращения</strong>
												<!-- <span class="label label-success pull-right">Top</span> -->
											</span>
                            </a>
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