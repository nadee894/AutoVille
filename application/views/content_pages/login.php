<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="<?php echo base_url(); ?>application_resources/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/bootstrap-select.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/colors/blue.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/user.style.css" type="text/css">

        <title>Autoville</title>

    </head>

    <body onunload="" class="page-subpage page-sign-in navigation-off-canvas" id="page-top">

        <!-- Outer Wrapper-->
        <div id="outer-wrapper">
            <!-- Inner Wrapper -->
            <div id="inner-wrapper">
                <!-- Navigation-->
                <div class="header">
                    <div class="wrapper">
                        <div class="brand">
                            <a href="<?php echo site_url(); ?>/home"><img src="<?php echo base_url(); ?>application_resources/assets/img/logo.png" alt="logo"></a>
                        </div>
                        <nav class="navigation-items">
                            <div class="wrapper">
                                <ul class="main-navigation navigation-top-header"></ul>
                                <ul class="user-area">                                    
                                    <li> <a href="<?php echo site_url(); ?>/register_users/load_registration" class="sign-out"><i class="fa fa-user"></i> Register</a></li>
                                </ul>                                
                                <div class="toggle-navigation">
                                    <div class="icon">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end Navigation-->
                <!-- Page Canvas-->
                <div id="page-canvas">
                    <!--Off Canvas Navigation-->
                    <nav class="off-canvas-navigation">
                        <header>Navigation</header>
                        <div class="main-navigation navigation-off-canvas"></div>
                    </nav>
                    <!--end Off Canvas Navigation-->



                    <!--Page Content-->
                    <div id="page-content">
                        <section class="container">
                            <div class="block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                        <header>
                                            <h1 class="page-title">Sign In</h1>
                                        </header>
                                        <hr>
                                        <form role="form" id="login_form" name="login_form" method="post">
                                            <div class="form-group">
                                                <label for="form-sign-in-Username">Username:</label>
                                                <input id="txtusername" name="txtusername" type="text" class="form-control" placeholder="Username" autofocus>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="form-sign-in-password">Password:</label>
                                                <input id="txtpassword" name="txtpassword" type="password" class="form-control" placeholder="Password">
                                            </div><!-- /.form-group -->
                                            <div class="form-group clearfix">
                                                <button type="submit" onclick="login()" class="btn pull-right btn-default" id="account-submit">Sign In</button>
                                            </div><!-- /.form-group -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /.block-->
                    </div>
                    <!-- end Page Content-->
                </div>
                <!-- end Page Canvas-->
                <!--Page Footer-->
                <footer id="page-footer">
                    <div class="inner">                        
                        <!--/.footer-top-->
                        <div class="footer-bottom">
                            <div class="container">
                                <span class="left">(C) Autoville, All rights reserved</span>                                
                            </div>
                        </div>
                        <!--/.footer-bottom-->
                    </div>
                </footer>
                <!--end Page Footer-->
            </div>
            <!-- end Inner Wrapper -->
        </div>
        <!-- end Outer Wrapper-->


        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/before.load.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/smoothscroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.hotkeys.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>
        <!--[if lte IE 9]>
        <script type="text/javascript" src="assets/js/ie-scripts.js"></script>
        <![endif]-->
    </body>
</html>



<script type="text/javascript">

                                                    var base_url = "<?php echo base_url(); ?>";
                                                    var site_url = "<?php echo site_url(); ?>";

                                                    $(document).ready(function () {
                                                        $("#login_form").validate({
                                                            focusInvalid: false,
                                                            ignore: "",
                                                            rules: {
                                                                txtusername: "required",
                                                                txtpassword: "required"
                                                            }, submitHandler: function (form) {
                                                            }
                                                        });

                                                    });


                                                    function login() {
                                                        var login_username = $('#txtusername').val();
                                                        var login_password = $('#txtpassword').val();

                                                        if ($('#login_form').valid()) {

                                                            $.ajax({
                                                                type: "POST",
                                                                url: site_url + '/login/authenticate_user',
                                                                data: "login_username=" + login_username + "&login_password=" + login_password,
                                                                success: function (msg) {

                                                                    if (msg == 1) {
                                                                        setTimeout("location.href = site_url+'/login/load_login';", 100);
                                                                    } else {
                                                                        login_form.reset();
                                                                        alert("Invalid Login details...");
                                                                    }
                                                                }
                                                            });
                                                        }
                                                    }

</script>

