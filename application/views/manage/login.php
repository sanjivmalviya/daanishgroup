<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App title -->
        <title>Daanish Web: Panel Login</title>

        <!-- App css -->
        <link href="<?php echo base_url('theme/manage/assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('theme/manage/assets/css/core.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('theme/manage/assets/css/components.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('theme/manage/assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('theme/manage/assets/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('theme/manage/assets/css/menu.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('theme/manage/assets/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('theme/manage/assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url('theme/manage/assets/js/modernizr.min.js'); ?>"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase color-white"> Login </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form method="POST" action="<?php echo base_url('manage/login/check'); ?>" class="form-horizontal">

                                        <?php if(isset($success)){ ?>
                                        <div class="alert alert-success"><?php echo $success; ?></div>
                                        <?php }else if(isset($warning)){ ?>
                                        <div class="alert alert-warning"><?php echo $warning; ?></div>
                                        <?php }else if(isset($error)){ ?>
                                        <div class="alert alert-danger"><?php echo $error; ?></div>
                                        <?php } ?>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="username" id="username" required="" placeholder="Username">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                            </div>
                                        </div>
                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="login">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('theme/manage/assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/detect.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/fastclick.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/jquery.blockUI.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/waves.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/jquery.scrollTo.min.js'); ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('theme/manage/assets/js/jquery.core.js'); ?>"></script>
        <script src="<?php echo base_url('theme/manage/assets/js/jquery.app.js'); ?>"></script>

    </body>
</html>
