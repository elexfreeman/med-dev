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
                            <a href="/">
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