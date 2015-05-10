<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="<?php echo base_url(); ?>application_resources/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/bootstrap-select.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/dropzone.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/jquery.ui.timepicker.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/jquery.nouislider.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/colors/blue.css" type="text/css">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/assets/css/user.style.css" type="text/css">-->


        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery-2.1.0.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/before.load.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery-ui.min.js"></script>

        <title>AutoVille</title>

    </head>

    <body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">

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
                                            <a href="<?php echo site_url(); ?>/register_users/load_registration" class="sign-out"><i class="fa fa-user"></i> Register</a>
                                        </div>

                                    <?php } else { ?>                                                                                                                

                                        <div class="dealer-login">

                                            <!--cart-->
                                            <div class="btn-group" id="compare_vehicle_list">                                                
                                                <button style="border:0px solid black; background-color: transparent;" data-toggle="dropdown"><i class="fa fa-road"></i> Compare(0)
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">  
                                                    <!--One car-->
                                                                                                                                                                     
                                                    <!--End One car-->                                                                                                        
                                                </ul>
                                            </div>
                                            <!--End cart-->


                                            <a href="<?php echo site_url(); ?>/dashboard" class="dealer-name"><i class="fa fa-user"></i> <?php echo ucfirst($this->session->userdata('USER_NAME')); ?></a>
                                            <a href="<?php echo site_url(); ?>/login/logout" class="sign-out"><i class="fa fa-power-off"></i> Sign Out</a>
                                        </div>

                                    <?php } ?>
                                </ul>
                                <?php if ($this->session->userdata('USER_LOGGED_IN')) { ?>
                                    <a href="<?php echo site_url(); ?>/vehicle_advertisements/post_new_advertisement" class="submit-item">
                                        <div class="content"><span>Submit Your Advertisement</span></div>
                                        <div class="icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </a>
                                <?php } ?>
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
                        <?php echo $content; ?>
                    </div>
                    <!-- end Page Content-->
                </div>
                <!-- end Page Canvas-->
                <!--Page Footer-->
                <!--                <footer id="page-footer">
                                    <div class="inner">
                                        <div class="footer-top">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        New Items
                                                        <section>
                                                            <h2>New Items</h2>
                                                            <a href="car-item-detail.html" class="item-horizontal small">
                                                                <h3>Cash Cow Restaurante</h3>
                                                                <figure>63 Birch Street</figure>
                                                                <div class="wrapper">
                                                                    <div class="image"><img src="<?php echo base_url(); ?>application_resources/assets/img/items/1.jpg" alt=""></div>
                                                                    <div class="info">
                                                                        <div class="type">
                                                                            <i><img src="<?php echo base_url(); ?>application_resources/assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                                            <span>Restaurant</span>
                                                                        </div>
                                                                        <div class="rating" data-rating="4"></div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            /.item-horizontal small
                                                            <a href="car-item-detail.html" class="item-horizontal small">
                                                                <h3>Blue Chilli</h3>
                                                                <figure>2476 Whispering Pines Circle</figure>
                                                                <div class="wrapper">
                                                                    <div class="image"><img src="<?php echo base_url(); ?>application_resources/assets/img/items/2.jpg" alt=""></div>
                                                                    <div class="info">
                                                                        <div class="type">
                                                                            <i><img src="<?php echo base_url(); ?>application_resources/assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                                            <span>Restaurant</span>
                                                                        </div>
                                                                        <div class="rating" data-rating="3"></div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            /.item-horizontal small
                                                        </section>
                                                        end New Items
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        Recent Reviews
                                                        <section>
                                                            <h2>Recent Reviews</h2>
                                                            <a href="car-item-detail.html#reviews" class="review small">
                                                                <h3>Max Five Lounge</h3>
                                                                <figure>4365 Bruce Street</figure>
                                                                <div class="info">
                                                                    <div class="rating" data-rating="4"></div>
                                                                    <div class="type">
                                                                        <i><img src="<?php echo base_url(); ?>application_resources/assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                                        <span>Restaurant</span>
                                                                    </div>
                                                                </div>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non suscipit felis, sed sagittis tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ac placerat mauris.
                                                                </p>
                                                            </a>/.review
                                                            <a href="car-item-detail.html#reviews" class="review small">
                                                                <h3>Saguaro Tavern</h3>
                                                                <figure>2476 Whispering Pines Circle</figure>
                                                                <div class="info">
                                                                    <div class="rating" data-rating="5"></div>
                                                                    <div class="type">
                                                                        <i><img src="<?php echo base_url(); ?>application_resources/assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                                        <span>Restaurant</span>
                                                                    </div>
                                                                </div>
                                                                <p>
                                                                    Pellentesque mauris. Proin sit amet scelerisque risus. Donec semper semper erat ut mollis curabitur
                                                                </p>
                                                            </a>
                                                            /.review
                                                        </section>
                                                        end Recent Reviews
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <section>
                                                            <h2>About Us</h2>
                                                            <address>
                                                                <div>Max Five Lounge</div>
                                                                <div>63 Birch Street</div>
                                                                <div>Granada Hills, CA 91344</div>
                                                                <figure>
                                                                    <div class="info">
                                                                        <i class="fa fa-mobile"></i>
                                                                        <span>818-832-5258</span>
                                                                    </div>
                                                                    <div class="info">
                                                                        <i class="fa fa-phone"></i>
                                                                        <span>+1 123 456 789</span>
                                                                    </div>
                                                                    <div class="info">
                                                                        <i class="fa fa-globe"></i>
                                                                        <a href="index.htm#">www.maxfivelounge.com</a>
                                                                    </div>
                                                                </figure>
                                                            </address>
                                                            <div class="social">
                                                                <a href="index.htm#" class="social-button"><i class="fa fa-twitter"></i></a>
                                                                <a href="index.htm#" class="social-button"><i class="fa fa-facebook"></i></a>
                                                                <a href="index.htm#" class="social-button"><i class="fa fa-pinterest"></i></a>
                                                            </div>
                
                                                            <a href="contact.html" class="btn framed icon">Contact Us<i class="fa fa-angle-right"></i></a>
                                                        </section>
                                                    </div>
                                                    /.col-md-4
                                                </div>
                                                /.row
                                            </div>
                                            /.container
                                        </div>
                                        /.footer-top
                                        <div class="footer-bottom">
                                            <div class="container">
                                                <span class="left">(C) AutoVille, All rights reserved</span>
                                                <span class="right">
                                                    <a href="#page-top" class="to-top roll"><i class="fa fa-angle-up"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                        /.footer-bottom
                                    </div>
                                </footer>-->
                <!--end Page Footer-->
            </div>
            <!-- end Inner Wrapper -->
        </div>
        <!-- end Outer Wrapper-->
        <script>
            var base_url = "<?php echo base_url(); ?>";
            var site_url = "<?php echo site_url(); ?>";

        </script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/richmarker-compiled.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/smoothscroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.hotkeys.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/dropzone.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.ui.timepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.nouislider.all.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/maps.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/lazy/jquery.lazyload.js"></script>

        <script>
            autoComplete();
            $(function () {
                $("img.lazy").lazyload({
                    effect: "fadeIn"
                });
            });
        </script>
        <!--[if lte IE 9]>
        <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/ie-scripts.js"></script>
    <![endif]-->
    </body>
</html>