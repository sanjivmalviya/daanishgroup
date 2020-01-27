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

        <section class="top-title lookup-top-title">

            <div class="top-page">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="top-page-heading">

                                <h3>BUY INTERNATIONAL AIR STICKET</h3>

                            </div>

                            <div class="breadcrumbs">

                                <span class=" icon-home"></span>Buy International Air Ticket

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



        <!-- Start Air Sticket Area -->

        <section class="air-sticket-area bg-default">

            <div class="container">

                <div class="row">

                    <div class="content mgt-60">

                        <div class="col-lg-2 col-md-3 col-sm-4">

                            <div class="sidebar sidebar-left">

                                <ul class="menu-sidebar">

                                    <li class="menu-item choose">

                                        <a href="#.html" title="">

                                            <div class="icon">

                                                <img src="<?php echo base_url('theme/images/icon/icon_flight.png'); ?>" alt="">

                                            </div>

                                            <div class="title">

                                                <h6>BUY AIR STICKETS</h6>

                                            </div>

                                        </a>

                                    </li>

                                    <li class="menu-item">

                                        <a href="lookup-payment.html" title="">

                                            <div class="icon">

                                                <img src="<?php echo base_url('theme/images/icon/icon_lookup.png'); ?>" alt="">

                                            </div>

                                            <div class="title">

                                                <h6>Look up and payment</h6>

                                            </div>

                                        </a>

                                    </li>

                                </ul>

                                <ul class="contact-list">

                                    <li class="center">

                                        <div class="icon">

                                            <img src="<?php echo base_url('theme/images/icon/hotline.png'); ?>" alt="">

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

                            <div class="form-submit-area air-sticket bg-white">

                            

                                <ul class="menu-tag-form">

                                    <li><a href="<?php echo base_url('buy_air_ticket'); ?>" title="">DOMESTIC AIR TICKET</a></li>

                                    <li class="choose"><a href="#" title="">INTERNATIONAL AIR TICKET</a></li>

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



                                    </div>



                                    <div class="inner-box-tab" style="margin-top: 0px;">

                                        <form action="<?php echo site_url('buy_air_ticket_international/insert');?>" method="post" accept-charset="utf-8">

                                            <div class="input-info-search">

                                                    <div class="form-group">
                                                        <input type="text" name="name" placeholder="Enter you name" required="">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" name="mobile_number" placeholder="Enter your mobile number" required="">
                                                    </div>

                                                <div class="field-row flex search-address">

                                                    <div class="input-form">

                                                        <input type="text" name="location_from" placeholder="Choose where to go" required="">

                                                    </div>

                                                    <div class="input-form">

                                                        <input type="text" name="location_to" placeholder="Choose a destination" required="">

                                                    </div>

                                                </div>

                                                

                                                <!-- <div class="col-md-12 text-center"> -->

                                                    

                                                <div class="field-row flex">

                                                    

                                                    <div class="one-column">

                                                            <span>Trip:</span>

                                                            

                                                        <div class="checkbox ver-1">

                                                            <input type="radio" id="trip_type_1" name="trip_type" value="1" checked>

                                                            <label for="trip_type_1">One Way</label>

                                                        </div>

                                                        <div class="checkbox ver-1">

                                                            <input type="radio" id="trip_type_2" name="trip_type" value="2">

                                                            <label for="trip_type_2">Round Trip</label>

                                                        </div>

                                                    </div>

                                                

                                                </div>



                                                <!-- <div class="field-row flex ">

                                                    <div class="checkbox ver2">

                                                        <button type="button" class="channel-feed btn btn-lg btn-toggle" data-toggle="button" >

                                                            <span class="handle"></span>

                                                        </button>

                                                    </div>

                                                </div> -->

                                                <div class="field-row flex">

                                                    <div class="two-column">

                                                        <div class="box-date">

                                                            <div class="input-form date form_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">

                                                                <input size="16" type="text" value="" placeholder="From Date" readonly="" name="date_from" required="">

                                                                <span class="add-on"><i class="icon-remove"></i></span>

                                                                <span class="add-on"><i class="icon-th"></i></span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="two-column">

                                                        <div class="box-date">

                                                            <div class="input-form date form_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" >

                                                                <input size="16" type="text" value="" placeholder="To Date" name="date_to">

                                                                <span class="add-on"><i class="icon-remove"></i></span>

                                                                <span class="add-on"><i class="icon-th"></i></span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>                                                

                                                <div class="field-row flex">

                                                    <div class="one-column">

                                                        <span>Cavity:</span>

                                                        <div class="checkbox ver-1">

                                                            <input type="radio" id="economy-class" name="cavity" checked="">

                                                            <label for="economy-class">Economy class</label>

                                                        </div>

                                                        <div class="checkbox ver-1">

                                                            <input type="radio" id="business-class" name="cavity">

                                                            <label for="business-class">Business class</label>

                                                        </div>

                                                        <div class="checkbox ver-1">

                                                            <input type="radio" id="first-class" name="cavity">

                                                            <label for="first-class">Firstclass</label>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="field-row flex">

                                                    <div class="three-column">

                                                        <div class="input-form select-box">

                                                            <select name="adults">

                                                                <option value="1">01 Adults</option>

                                                                <option value="2">02 Adults</option>

                                                                <option value="3">03 Adults</option>

                                                                <option value="4">04 Adults</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                    <div class="three-column">

                                                        <div class="input-form select-box">

                                                            <select name="childrens">

                                                                <option value="0">00 Children</option>

                                                                <option value="1">01 Children</option>

                                                                <option value="2">02 Children</option>

                                                                <option value="3">03 Children</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                    <div class="three-column">

                                                        <div class="input-form select-box">

                                                            <select name="infants">

                                                                <option value="0">00 Infants</option>

                                                                <option value="1">01 Infants</option>

                                                                <option value="2">02 Infants</option>

                                                                <option value="3">03 Infants</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="submit-search center">

                                                <div class="checkbox">

                                                    <input type="checkbox" id="is_cheapest" name="is_cheapest">

                                                    <label for="is_cheapest">Find the cheapest flight</label>

                                                </div>

                                                <div class="button-submit">

                                                    <button type="submit" id="submit">FIND FLIGHTS</button>

                                                </div>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                                <div class="footer-search">

                                    <div class="note">

                                        <h6>NOTE:</h6>

                                        <ul>

                                            <li>For Vietjet air and Jetstar Pacific, please book within 24 hours.</li>

                                            <li>Before departure, please contact 1900 69 69 69.</li>

                                            <li>Phone support: <a href="#" title="">1900 68 68 68</a></li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="sidebar sidebar-right">

                                <div class="widget-sidebar widget-banner">

                                    <a href="#" title="">

                                        <img src="<?php echo base_url('theme/images/blog/banner/banner_01.jpg'); ?>" alt="">

                                    </a>

                                </div>

                                <div class="widget-sidebar widget-post">

                                    <h4>POPULAR <span>POST</span></h4>

                                    <ul class="post-list">

                                        <li class="post-single">

                                            <div class="post-image">

                                                <a href="blog-single.html" title="">

                                                    <img src="<?php echo base_url('theme/images/blog/popular_post_01.jpg'); ?>" alt="">

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

                                                    <img src="<?php echo base_url('theme/images/blog/popular_post_02.jpg'); ?>" alt="">

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

                                                    <img src="<?php echo base_url('theme/images/blog/popular_post_03.jpg'); ?>" alt="">

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

                                                    <img src="<?php echo base_url('theme/images/blog/popular_post_04.jpg'); ?>" alt="">

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

        <!-- End Air Sticket Area -->



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

