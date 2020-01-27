<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>

    <title>Daanish Travels</title>

    <?php require_once('include/headerscripts.php'); ?>



</head>



<body>

    <div class="layout-theme">



        <div id="preloader">

            <div class="row loader">

                <div class="loader-icon"></div>

            </div>

        </div>



        <?php require_once('include/header.php'); ?>


        <!-- Start Top Title -->
        <section class="top-title cruise-top-title">
            <div class="top-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top-page-heading">
                                <h3>SEARCH RIVER CRUISES</h3>
                            </div>
                            <div class="breadcrumbs">
                                <span class=" icon-home"></span>Search River Cruises
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Title -->



        <!-- Start Social -->

        <div class="social">

            <ul>

                <li class="user">

                    <span class="icon-users"></span>

                </li>

                <li class="facebook">

                    <a href="#" title="">

                        <span class="icon-facebook-3"></span>

                        <span class="tooltip">Facebook</span>

                    </a>

                </li>

                <li class="twitter">

                    <a href="#" title="">

                        <span class=" icon-twitter-1"></span>

                         <span class="tooltip">Twitter</span>

                    </a>

                </li>

                <li class="has-dropdown">

                    <span class="plus">+</span>

                    <ul class="dropdown-social">

                        <li class="pinterest">

                            <a href="#" title="">

                                <span class="icon-pinterest-1"></span>

                                 <span class="tooltip">Pinterest</span>

                            </a>

                        </li>

                        <li class="linkedin">

                            <a href="#" title="">

                                <span class="icon-linkedin-2"></span>

                                 <span class="tooltip">Linkedin</span>

                            </a>

                        </li>

                        <li class="google-plus">

                            <a href="#" title="">

                                <span class=" icon-gplus"></span>

                                 <span class="tooltip">Google</span>

                            </a>

                        </li>

                    </ul>

                </li>

            </ul>

        </div>

        <!-- End Social -->

          <!-- Start Search Cruises Area -->
        <section class="search-cruises-area bg-default">
            <div class="container">
                <div class="row">
                    <div class="content mgt-60">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="sidebar sidebar-left">
                                <ul class="menu-sidebar">
                                    <li class="menu-item choose">
                                        <a href="<?php echo base_url('cruise'); ?>" title="">
                                            <div class="icon">
                                                <img src="theme/images/icon/icon_cruise.png" alt="">
                                            </div>
                                            <div class="title">
                                                <h6>Search Cruises</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('buy_air_ticket'); ?>" title="">
                                            <div class="icon">
                                                <img src="theme/images/icon/icon_flight.png" alt="">
                                            </div>
                                            <div class="title">
                                                <h6>Buy air tickets</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo base_url('buy_car_ticket'); ?>" title="">
                                            <div class="icon">
                                                <img src="theme/images/icon/icon_car.png" alt="">
                                            </div>
                                            <div class="title">
                                                <h6>Search for Car HIRE</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="contact-list">
                                    <li class="center">
                                        <div class="icon">
                                            <img src="images/icon/hotline.png" alt="">
                                        </div>
                                        <div class="contact-content">
                                            <p>TICKETING OFFICE</p>
                                            <h4>1900-68-68-68</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-8">
                            <div class="form-submit-area bg-white">
                                <ul class="menu-tag-form">
                                    <li><a href="<?php echo site_url('cruise'); ?>" title="">CRUISES SEARCH</a></li>
                                    <li class="choose"><a href="<?php echo site_url('cruise_river'); ?>" title="">RIVER CRUISES SEARCH</a></li>
                                </ul>
                                <div class="form-content">
                                        <div class="col-md-12" style="margin-top: 10px;">



                                        <div class="col-md-12">



                                        <?php if($this->session->flashdata('success')){ ?>

                                        <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>

                                        <?php }else if($this->session->flashdata('error')){ ?>

                                        <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>

                                        <?php } ?>



                                    </div>
                                    
                                    <div class="inner-box-tab">
                                        <form action="<?php echo site_url('cruise_river/insert');?>" method="POST" accept-charset="utf-8">
                                            <div class="input-info-search">
                                                       <div class="form-group">
                                                    <label>Enter Name</label>
                                                    <input type="text" name="name" placeholder="Enter you name" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter Mobile Number</label>
                                                    <input type="text" name="mobile_number" placeholder="Enter your mobile number" required="">
                                                </div>
                                                
                                                <div class="field-row flex">
                                                    <div class="two-column">
                                                        <label>Cruises Line</label>
                                                        <div class="input-form select-box">
                                                            <select name="cruise_line" required="">
                                                                <option value="Any Cruises Line">Any Cruises Line</option>
                                                                <option value="Any Cruises Line">Any Cruises Line</option>
                                                                <option value="Any Cruises Line">Any Cruises Line</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="two-column">
                                                        <label>Cruises Ship</label>
                                                        <div class="input-form select-box">
                                                            <select name="cruise_ship" required="">
                                                                <option value="Any Cruises Ship">Any Cruises Ship</option>
                                                                <option value="Any Cruises Ship">Any Cruises Ship</option>
                                                                <option value="Any Cruises Ship">Any Cruises Ship</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-row flex">
                                                    <div class="two-column">
                                                        <label>Departure Port</label>
                                                        <div class="input-form select-box">
                                                            <select name="cruise_departure_port">
                                                                <option value="Any Departure Port">Any Departure Port</option>
                                                                <option value="Any Departure Port">Any Departure Port</option>
                                                                <option value="Any Departure Port">Any Departure Port</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="two-column">
                                                        <label>Region</label>
                                                        <div class="input-form select-box">
                                                            <select name="cruise_region">
                                                                <option value="Any Region">Any Region</option>
                                                                <option value="Any Region">Any Region</option>
                                                                <option value="Any Region">Any Region</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-row flex">
                                                    <div class="two-column">
                                                        <label>Date</label>
                                                        <div class="input-form date form_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                            <input size="16" type="text" value="" placeholder="" readonly="" name="cruise_date">
                                                            <span class="add-on"><i class="icon-remove"></i></span>
                                                            <span class="add-on"><i class="icon-th"></i></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="two-column">
                                                        <label>Past Passenger Number</label>
                                                        <div class="input-form">
                                                            <input type="text" name="cruise_past_passenger_number" placeholder="" >
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="field-row flex">
                                                    <div class="four-column">
                                                       <label>Adults</label>
                                                        <div class="input-form select-box">
                                                            <select name="cruise_line_adults">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="four-column">
                                                        <label>Children</label>
                                                        <div class="input-form select-box">
                                                            <select name="cruise_line_childrens">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="four-column">
                                                       <label>Infants</label>
                                                        <div class="input-form select-box">
                                                            <select name="cruise_line_infants">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="four-column">
                                                       <div class="button">
                                                           <button type="button">ADVANCED</button>
                                                       </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="submit-search center">
                                                <div class="button-submit">
                                                    <button type="submit">SEARCH CRUISES</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-search">
                                    <p>Quis autem vel eum iure reprehenderit voluptate velit esse molestiae consequatur, vel illum qui dolorem eum.</p>
                                    <ul>
                                        <li>Consectetuer adipiscing elit, nonummy erat volutpat.</li>
                                        <li>Laboriosam, aliqu commodi consequatur?</li>
                                        <li>Exercitationem corporis suscipit.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sidebar sidebar-right">
                                <div class="widget-sidebar widget-banner">
                                    <a href="#" title="">
                                        <img src="images/blog/banner/banner_01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="widget-sidebar widget-post">
                                    <h4>POPULAR <span>POST</span></h4>
                                    <ul class="post-list">
                                        <li class="post-single">
                                            <div class="post-image">
                                                <a href="blog-single.html" title="">
                                                    <img src="images/blog/popular_post_01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="blog-single.html" title="">Save Up to 30% With Mastercard!</a>
                                                </h6>
                                                <div class="date-post">
                                                    March, 15 2018
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-single">
                                            <div class="post-image">
                                                <a href="blog-single.html" title="">
                                                    <img src="images/blog/popular_post_02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="blog-single.html" title="">Enjoy Special Fares With Gulf Air</a>
                                                </h6>
                                                <div class="date-post">
                                                    March, 15 2018
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-single">
                                            <div class="post-image">
                                                <a href="blog-single.html" title="">
                                                    <img src="images/blog/popular_post_03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="blog-single.html" title="">Win Dubai Duty Free vouchers</a>
                                                </h6>
                                                <div class="date-post">
                                                    March, 15 2018
                                                </div>
                                            </div>
                                        </li>
                                        <li class="post-single">
                                            <div class="post-image">
                                                <a href="blog-single.html" title="">
                                                    <img src="images/blog/popular_post_04.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="blog-single.html" title="">Up to 30% Off With Oman Air</a>
                                                </h6>
                                                <div class="date-post">
                                                    March, 15 2018
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Search Cruises Area -->



        <!-- Start Partner Area -->

        <section class="partner-area">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <ul class="slide-partner owl-carousel-ver1" data-columns='6'>

                            <li>

                                <img src="<?php echo base_url('theme/images/partner/logo_1.png'); ?>" alt="">

                            </li>

                            <li>

                                <img src="<?php echo base_url('theme/images/partner/logo_2.png'); ?>" alt="">

                            </li>

                            <li>

                                <img src="<?php echo base_url('theme/images/partner/logo_3.png'); ?>" alt="">

                            </li>

                            <li>

                                <img src="<?php echo base_url('theme/images/partner/logo_4.png'); ?>" alt="">

                            </li>

                            <li>

                                <img src="<?php echo base_url('theme/images/partner/logo_5.png'); ?>" alt="">

                            </li>

                            <li>

                                <img src="<?php echo base_url('theme/images/partner/logo_6.png'); ?>" alt="">

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>

        <!-- End Partner Area -->



        <?php require_once('include/footer.php'); ?>



    </div>

    

    <?php require_once('include/footerscripts.php'); ?>



</body>

</html>

