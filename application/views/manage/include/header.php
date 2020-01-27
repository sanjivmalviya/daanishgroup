
<!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--Zircos-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <!-- <a href="index.html" class="logo">
                            <img src="<?php echo base_url('theme/manage/assets/images/logo.png'); ?>" alt="" height="30">
                        </a> -->
                        <h1 style="color:white;">DAANISH TRAVELS</h1>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            
                            <li class="dropdown navbar-c-items">
                                 <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-success"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li class="text-center">
                                        <h5>Notifications</h5>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="reminders.php">See all pending notifications</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('theme/manage/assets/images/users/avatar-1.jpg'); ?>" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center">
                                        <h5>Hi, Administrator</h5>
                                    </li>
                                    <li><a href="<?php echo base_url('manage/settings'); ?>"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="<?php echo base_url('manage/logout'); ?>" class="text-danger"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>

                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                        
                            <li class="has-submenu_">
                                <a href="<?php echo base_url('manage/dashboard'); ?>"><i class="mdi mdi-view-dashboard"></i> Dashboard</a>
                            </li>


                            <li class="has-submenu">
                                <a href="javascript:"><i class="mdi mdi-airplane"></i> Flights</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('manage/flight_ticket_inquiry'); ?>">Ticket Inquiries</a>
                                    </li>
                                </ul>
                            </li>

                              <li class="has-submenu">
                                <a href="javascript:"><i class="mdi mdi-car"></i> Car Rental</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('manage/car_hire'); ?>">Car Hire</a>
                                        <a href="<?php echo base_url('manage/airport_transfers'); ?>">Airport Transfers</a>
                                        <a href="<?php echo base_url('manage/camper_vans'); ?>">Camper Vans</a>
                                        <a href="<?php echo base_url('manage/bus_trucks'); ?>">Bus & Trucks</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="javascript:"><i class="mdi mdi-train"></i> Trains</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('manage/search_trains_oneway'); ?>">One Way</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('manage/search_trains_twoway'); ?>">Round Trip</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="<?php echo base_url('manage/hotels'); ?>"><i class="mdi mdi-hotel"></i> Hotels</a>
                            </li>

                            <li class="has-submenu">
                                <a href="javascript:"><i class="mdi mdi-xing"></i> Cruises</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo base_url('manage/cruise'); ?>">Cruise</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('manage/cruise_river'); ?>">River Cruise</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
