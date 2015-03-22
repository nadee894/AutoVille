<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="<?php echo base_url(); ?>application_resources/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
        <link href='../../../fonts.googleapis.com/css-family=Montserrat-400,700.htm' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/bootstrap-select.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/user.style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/colors/blue.css" type="text/css">
        <link href="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.css" rel="stylesheet" type="text/css" />

        <title>Spotter - Universal Directory Listing HTML Template</title>

    </head>

    <body onunload="" class="page-subpage page-register navigation-top-header" id="page-top">

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
                                    <?php if (!$this->session->userdata('USER_LOGGED_IN')) { ?>

                                        <div class="dealer-login">
                                            <a href="<?php echo site_url(); ?>/login/load_login" class="dealer-name"><i class="fa fa-unlock-alt"></i>  Sign In</a>

                                        </div>

                                    <?php } else { ?>

                                        <div class="dealer-login">
                                            <a href="" class="dealer-name"><i class="fa fa-user"></i> <?php echo $this->session->userdata('USER_NAME'); ?></a>
                                            <a href="<?php echo site_url(); ?>/login/logout" class="sign-out"><i class="fa fa-power-off"></i> Sign Out</a>
                                        </div>

                                    <?php } ?>
                                </ul>
                                <a href="<?php echo site_url(); ?>/vehicle_advertisements/post_new_advertisement" class="submit-item">
                                    <div class="content"><span>Submit Your Advertisement</span></div>
                                    <div class="icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </a>
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

                    <!--Sub Header-->
                    <section class="sub-header">
                        <div class="search-bar horizontal collapse" id="redefine-search-form"></div>
                        <!-- /.search-bar -->
                        <div class="breadcrumb-wrapper">

                            <!-- /.container-->
                        </div>
                        <!-- /.breadcrumb-wrapper-->
                    </section>
                    <!--end Sub Header-->

                    <!--Page Content-->
                    <div id="page-content">
                        <section class="container">
                            <div class="block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                        <header>
                                            <h1 class="page-title">Register</h1>
                                        </header>
                                        <hr>
                                        <form role="form" id="form-register" method="post" >
                                            <div class="form-group">
                                                <label for="form-register-full-name">Full Name:</label>
                                                <input type="text" class="form-control" id="form-register-full-name" name="form_register_full_name" >
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="form-register-email">Email:</label>
                                                <input type="email" class="form-control" id="form-register-email" name="form_register_email" >
                                            </div><!-- /.form-group -->

                                            <div class="form-group">
                                                <label for="form-register-contact">Telephone:</label>
                                                <input type="text" class="form-control" id="form-register-contact" name="form_register_contact" >
                                            </div>

                                            <div class="form-group">
                                                <label for="form-register-address">Address:</label>
                                                <input type="text" class="form-control" id="form-register-address" name="form_register_address" >
                                            </div>

                                            <div class="form-group">
                                                <label for="form-register-user_name">Username:</label>
                                                <input type="text" class="form-control" id="form-register-user_name" name="form_register_user_name" >
                                            </div>

                                            <div class="form-group">
                                                <label for="form-register-password">Password:</label>
                                                <input type="password" class="form-control" id="form_register_password" name="form_register_password" >
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="form-register-confirm-password">Confirm Password:</label>
                                                <input type="password" class="form-control" id="form-register-confirm-password" name="form_register_confirm_password" >
                                            </div><!-- /.form-group -->

                                            <div class="form-group clearfix">
                                                <button type="submit" class="btn pull-right btn-default" id="account-submit">Create an Account</button>
                                            </div><!-- /.form-group -->
                                        </form>
                                        <hr>
                                        <div class="center">
                                            <figure class="note">By clicking the “Create an Account” button you agree with our <a href="terms-conditions.html" class="link">Terms and conditions</a></figure>
                                        </div>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/custom.js"></script>

        <!--[if lte IE 9]>
        <script type="text/javascript" src="assets/js/ie-scripts.js"></script>
        <![endif]-->
    </body>
</html>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>

<script>
            var base_url = "<?php echo base_url(); ?>";
            var site_url = "<?php echo site_url(); ?>";

        </script>
<script type="text/javascript">

    $(document).ready(function() {

        $("#form-register").validate({
            rules: {
                form_register_full_name: "required",
                form_register_email: {
                    required: true,
                    email: true
                },
                form_register_contact: {
                    required: true,
                    digits: true,
                    minlength: 10, 
                    maxlength: 10
                },
                form_register_address: "required",
                form_register_user_name: "required",
                form_register_password: "required",
                form_register_confirm_password:{
                    required:true,
                    equalTo:"#form_register_password"
                }
            },
            messages: {
                form_register_full_name: "Please enter your full name",
                form_register_email: {
                    required: "Please enter your email",
                    email: "Incorrect email address"

                },
                form_register_contact: "Please enter your telephone number",
                form_register_address: "Please enter your address",
                form_register_user_name: "Please enter a valid user name",
                form_register_password: "Please enter a password",
                form_register_confirm_password:{
                    required:"Confirm the password",
                    equalTo:"Passwords do not match"
                }
            }, submitHandler: function(form)
            {
                $.post(site_url + '/register_users/add_new_user', $('#form-register').serialize(), function(msg)
                {
                    alert(msg);
                    if (msg == 1) {

                        //form-register.reset();
                        toastr.success("Successfully Registered", "AutoVille");
                    } else {
                        toastr.error("Error in registration", "AutoVille");

                    }
                });
            }

        });
    });



</script>



