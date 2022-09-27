@extends('admin.admin_master')
@section('admin')
<!-- wrapper -->
<div class="wrapper">
    <!-- header area -->
    <header class="header_area">
        <!-- logo -->
        <div class="sidebar_logo">
            <a href="index.html">
                <img src="{{ asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid logo1">
                <img src="{{ asset('panel/assets/images/logo_small.png')}}" alt="" class="img-fluid logo2">
            </a>
        </div>
        <div class="sidebar_btn">
            <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
        </div>
        <ul class="header_menu">
            <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a>
                <div class="modal fade search_box" id="myModal">
                    <button type="button" class="close m-2 text-white float-right" data-dismiss="modal">&times;</button>
                    <form action="#" class="modal-dialog modal-lg">

                        <div class="modal-content bg-transparent">
                            <!-- Modal body -->
                            <div class="modal-body">
                                <input class="form-control bg-transparent text-white form-control-lg" type="text" placeholder="Search...">
                                <button class="btn btn-lg submit-btn" type="submit">Search</button>
                            </div>
                        </div>

                    </form>
                </div>
            </li>
            <li><a data-toggle="dropdown" href="#"><i class="far fa-envelope"></i><span>4</span></a>
                <div class="dropdown_wrapper messages_item dropdown-menu dropdown-menu-right">
                    <div class="dropdown_header">
                        <p>you have 4 messages</p>
                    </div>
                    <ul class="dropdown_body nice_scroll scrollbar">
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user1.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello Sam...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user2.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello jhon...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user3.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello jhon...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user1.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello Olinda...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user3.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Madelyn <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello Sam...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user2.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Melvin <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello jhon...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user3.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Olinda <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello jhon...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <img src="{{ asset('panel/assets/images/user1.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-part">
                                    <h6>Johnson <span><i class="far fa-clock"></i> today</span></h6>
                                    <p>Hello Olinda...</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown_footer">
                        <a href="#">See All Messages</a>
                    </div>
                </div>
            </li>
            <li><a href="#" data-toggle="dropdown"><i class="far fa-bell"></i><span>9</span></a>
                <div class="dropdown_wrapper notification_item dropdown-menu dropdown-menu-right">
                    <div class="dropdown_header">
                        <p>You have 9 notifications</p>
                    </div>
                    <ul class="dropdown_body scrollbar nice_scroll">
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-success"><i class="fas fa-users"></i></span>
                                </div>
                                <div class="text-part">
                                    <p>5 new members joined</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                </div>
                                <div class="text-part">
                                    <p> Very long description here that may...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                </div>
                                <div class="text-part">
                                    <p> 25 sales made</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-warning"><i class="fas fa-user"></i></span>
                                </div>
                                <div class="text-part">
                                    <p> You changed your username</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-success"><i class="fas fa-users"></i></span>
                                </div>
                                <div class="text-part">
                                    <p>5 new members joined</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i></span>
                                </div>
                                <div class="text-part">
                                    <p> Very long description here that may...</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-success"><i class="fas fa-cart-plus"></i></span>
                                </div>
                                <div class="text-part">
                                    <p> 25 sales made</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-part">
                                    <span class="text-warning"><i class="fas fa-user"></i></span>
                                </div>
                                <div class="text-part">
                                    <p> You changed your username</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown_footer">
                        <a href="#">view All</a>
                    </div>
                </div>
            </li>
            <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
                <div class="user_item dropdown-menu dropdown-menu-right">
                    <div class="admin">
                        <a href="#" class="user_link"><img src="panel/assets/images/admin.jpg" alt=""></a>
                    </div>
                    <ul>

                        <li><a href="#"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                        <li><a href=" "><span><i class="fas fa-cogs"></i></span> Password Change</a></li>
                        <li>

                            <a href=" "><span><i class="fas fa-unlock-alt"></i></span> Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>

                <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </header><!-- / header area -->
    <!-- sidebar area -->
    <aside class="sidebar-wrapper ">
        <nav class="sidebar-nav">
            <ul class="metismenu" id="menu1">
                <li class="single-nav-wrapper">
                    <a href="index.html" class="menu-item">
                        <span class="left-icon"><i class="fas fa-home"></i></span>
                        <span class="menu-text">home</span>
                    </a>
                </li>
                <li class="single-nav-wrapper">
                    <a class="menu-item" href="fomrs_editor_ch.html" aria-expanded="false">
                        <span class="left-icon"><i class="far fa-edit"></i></span>
                        <span class="menu-text">Forms</span>
                    </a>
                </li>
                <li class="single-nav-wrapper">
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                        <span class="left-icon"><i class="fas fa-table"></i></span>
                        <span class="menu-text">table</span>
                    </a>
                    <ul class="dashboard-menu">
                        <li><a href="basic_table.html">Basic table</a></li>
                        <li><a href="data_table.html">data table</a></li>
                    </ul>
                </li>
                <li class="single-nav-wrapper">
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                        <span class="left-icon"><i class="fas fa-chart-line"></i></span>
                        <span class="menu-text">Charts</span>
                    </a>
                    <ul class="dashboard-menu">
                        <li><a href="chart-float.html">Float Chart</a></li>
                        <li><a href="chart-float.html">Float Chart</a></li>
                        <li><a href="chart-float.html">Float Chart</a></li>
                    </ul>
                </li>
                <li class="single-nav-wrapper">
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                        <span class="left-icon"><i class="fas fa-sort-alpha-down-alt"></i></span>
                        <span class="menu-text">UI Elements</span>
                    </a>
                    <ul class="dashboard-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="button.html">Buttons</a></li>
                        <li><a href="notification.html">Notification</a></li>
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="tabs.html">Tab</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="progressbars.html">Progressber</a></li>
                        <li><a href="list.html">List View</a></li>
                        <li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
                        <li><a href="label-badge-alert.html">labels, Badges</a></li>
                        <li><a href="treeview.html">Tree View</a></li>
                    </ul>
                </li>
                <li class="single-nav-wrapper">
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                        <span class="left-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <span class="menu-text">Maps</span>
                    </a>
                    <ul class="dashboard-menu">
                        <li><a href="#">Amcharts Maps</a></li>
                        <li><a href="#">Data Maps</a></li>
                        <li><a href="#">Jvector Maps</a></li>
                        <li><a href="#">Google map</a></li>
                        <li><a href="#">Snazzy Map</a></li>
                    </ul>
                </li>
                <li class="single-nav-wrapper">
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                        <span class="left-icon"><i class="far fa-envelope"></i></span>
                        <span class="menu-text">Mailbox</span>
                    </a>
                    <ul class="dashboard-menu">
                        <li><a href="#">Mailbox</a></li>
                        <li><a href="#">Mailbox Details</a></li>
                        <li><a href="#">Compose</a></li>
                    </ul>
                </li>
                <li class="single-nav-wrapper">
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                        <span class="left-icon"><i class="fas fa-mobile-alt"></i></span>
                        <span class="menu-text">App View</span>
                    </a>
                    <ul class="dashboard-menu">
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="#">Vertical timeline</a></li>
                        <li><a href="#">Horizontal timeline</a></li>
                        <li><a href="#">Pricing Table</a></li>
                    </ul>
                </li>
                <li class="single-nav-wrapper">
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                        <span class="left-icon"><i class="far fa-copy"></i></span>
                        <span class="menu-text">Other pages</span>
                    </a>
                    <ul class="dashboard-menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="registration.html">Register</a></li>
                        <li><a href="screen_lock.html">screen lock</a></li>
                        <li><a href="forget.html">forget Password</a></li>
                    </ul>
                </li>
                <li class="single-nav-wrapper">
                    <a href="#" class="menu-item">
                        <span class="left-icon"><i class="fas fa-home"></i></span>
                        <span class="menu-text">Calender</span>
                    </a>
                </li>
                <li class="single-nav-wrapper">
                    <a href="blank_page.html" class="menu-item">
                        <span class="left-icon"><i class="fas fa-file"></i></span>
                        <span class="menu-text">Blank Page</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside><!-- /sidebar Area-->






    <div class="content_wrapper">
        <!--middle content wrapper-->
        <div class="middle_content_wrapper">
            <!-- counter_area -->
            <section class="counter_area">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter">
                            <div class="counter_item">
                                <span><i class="fa fa-code"></i></span>
                                <h2 class="timer count-number" data-to="300" data-speed="1500"></h2>
                            </div>

                            <p class="count-text ">SomeText GoesHere</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter">
                            <div class="counter_item">
                                <span><i class="fa fa-coffee"></i></span>
                                <h2 class="timer count-number" data-to="1700" data-speed="1500"></h2>
                            </div>
                            <p class="count-text ">SomeText GoesHere</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter">
                            <div class="counter_item">
                                <span><i class="fas fa-user"></i></span>
                                <h2 class="timer count-number" data-to="11900" data-speed="1500"></h2>
                            </div>
                            <p class="count-text ">SomeText GoesHere</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter">
                            <div class="counter_item">
                                <span><i class="fa fa-bug"></i></span>
                                <h2 class="timer count-number" data-to="157" data-speed="1500"></h2>
                            </div>
                            <p class="count-text ">SomeText GoesHere</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ counter_area -->
            <!-- table area -->
            <section class="table_area">
                <div class="panel">
                    <div class="panel_header">
                        <div class="panel_title"><span>FooTable with row toggler, sorting, filter and pagination</span></div>
                    </div>
                    <div class="panel_body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Job Title</th>
                                        <th>Started On</th>
                                        <th data-hide="all">Date of Birth</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dennise</td>
                                        <td>Fuhrman</td>
                                        <td>High School History Teacher</td>
                                        <td>November 8th 2011</td>
                                        <td>July 25th 1960</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Elodia</td>
                                        <td>Weisz</td>
                                        <td>Wallpaperer Helper</td>
                                        <td>October 15th 2010</td>
                                        <td>March 30th 1982</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Raeann</td>
                                        <td>Haner</td>
                                        <td>Internal Medicine Nurse Practitioner</td>
                                        <td>November 28th 2013</td>
                                        <td>February 26th 1966</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Junie</td>
                                        <td>Landa</td>
                                        <td>Offbearer</td>
                                        <td>October 31st 2010</td>
                                        <td>March 29th 1966</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Solomon</td>
                                        <td>Bittinger</td>
                                        <td>Roller Skater</td>
                                        <td>December 29th 2011</td>
                                        <td>September 22nd 1964</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Bar</td>
                                        <td>Lewis</td>
                                        <td>Clown</td>
                                        <td>November 12th 2012</td>
                                        <td>August 4th 1991</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Usha</td>
                                        <td>Leak</td>
                                        <td>Ships Electronic Warfare Officer</td>
                                        <td>August 14th 2012</td>
                                        <td>November 20th 1979</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Lorriane</td>
                                        <td>Cooke</td>
                                        <td>Technical Services Librarian</td>
                                        <td>September 21st 2010</td>
                                        <td>April 7th 1969</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Lorriane</td>
                                        <td>Cooke</td>
                                        <td>Technical Services Librarian</td>
                                        <td>September 21st 2010</td>
                                        <td>April 7th 1969</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- /table -->
                <!-- chart area -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel chart_area">
                            <div class="panel_header">
                                <div class="panel_title">
                                    <span class="panel_icon"><i class="far fa-chart-bar"></i></span>
                                    <span>bar chat</span>
                                </div>
                            </div>
                            <div class="panel_body">
                                <div id="bar-chart">
                                    <div id="bar-legend"></div>
                                    <canvas id="bar-canvas"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel">
                            <div class="panel_header">
                                <div class="panel_title">
                                    <span class="panel_icon"><i class="fas fa-chart-pie"></i></span>
                                    <span>pie chat</span>
                                </div>
                            </div>
                            <div class="panel_body">
                                <div id="piechart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--/middle content wrapper-->
    </div>
    <!--/ content wrapper -->

    @endsection