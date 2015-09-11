
<!--                <section id="map-simple" class="map-contact"></section>-->
<section class="container">
    <div class="row">
        <!--Content-->
        <div class="col-md-9">
            <header>
                <h1 class="page-title">Contact</h1>
            </header>
            <section>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <header class="no-border"><h3>Address</h3></header>
                        <address>
                            <div><strong>AutoVille (Pvt) Ltd.</strong></div>
                            <div>65 C, Dharmapala Mawatha,</div>
                            <div>Colombo 07, Sri Lanka</div>
                            <br>
                            <figure>
                                <div class="info">
                                    <i class="fa fa-mobile"></i>
                                    <span>077-832-5258</span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <span>+94 123 4567</span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-globe"></i>
                                    <a href="mailto:info.autovillle@gmail.com">info.autovillle@gmail.com</a>
                                </div>
                            </figure>
                        </address>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <header class="no-border"><h3>Social Networks</h3></header>
                        <a href="#" class="social-button"><i class="fa fa-twitter"></i>Twitter</a>
                        <a href="#" class="social-button"><i class="fa fa-facebook"></i>Facebook</a>
                        <a href="#" class="social-button"><i class="fa fa-pinterest"></i>Pinterest</a>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <header class="no-border"><h3>About Us</h3></header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique imperdiet
                            nibh tincidunt fermentum. Nunc enim nibh, convallis et tincidunt in, vehicula a diam.
                            Nullam in risus erat
                        </p>
                        <a href="about-us.html" class="read-more icon">Read More</a>
                    </div>
                    <!--/.col-md-4-->
                </div>
                <!--/.row-->
            </section>
            <hr>
            <section>
                <header class="no-border"><h3>Contact Form</h3></header>
                <form id="contact_form" name="contact_form" role="form" method="post" class="background-color-white">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="company-form-name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required="">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!--/.col-md-6-->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="company-form-email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required="">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!--/.col-md-6-->
                    </div>
                    <div class="form-group">
                        <label for="company-form-message">Message</label>
                        <textarea class="form-control" id="message" name="message"  rows="3" required=""></textarea>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-default icon">Send a Message<i class="fa fa-angle-right"></i></button>
                    </div>
                    <!-- /.form-group -->
                </form>
                <!--/#contact-form-->
            </section>
        </div>
        <!--Sidebar-->
        <!--                        <div class="col-md-3">
                                    <aside id="sidebar">
                                        <section>
                                            <header><h2>New Places</h2></header>
                                            <a href="item-detail.html" class="item-horizontal small">
                                                <h3>Cash Cow Restaurante</h3>
                                                <figure>63 Birch Street</figure>
                                                <div class="wrapper">
                                                    <div class="image"><img src="<?php echo base_url() ?>/application_resources/assets/img/items/1.jpg" alt=""></div>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="<?php echo base_url() ?>/application_resources/assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                            <span>Restaurant</span>
                                                        </div>
                                                        <div class="rating" data-rating="4"></div>
                                                    </div>
                                                </div>
                                            </a>
                                            /.item-horizontal small
                                            <a href="item-detail.html" class="item-horizontal small">
                                                <h3>Blue Chilli</h3>
                                                <figure>2476 Whispering Pines Circle</figure>
                                                <div class="wrapper">
                                                    <div class="image"><img src="<?php echo base_url() ?>/application_resources/assets/img/items/2.jpg" alt=""></div>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="<?php echo base_url() ?>/application_resources/assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                            <span>Restaurant</span>
                                                        </div>
                                                        <div class="rating" data-rating="3"></div>
                                                    </div>
                                                </div>
                                            </a>
                                            /.item-horizontal small
                                            <a href="item-detail.html" class="item-horizontal small">
                                                <h3>Eddie’s Fast Food</h3>
                                                <figure>4365 Bruce Street</figure>
                                                <div class="wrapper">
                                                    <div class="image"><img src="<?php echo base_url() ?>/application_resources/assets/img/items/3.jpg" alt=""></div>
                                                    <div class="info">
                                                        <div class="type">
                                                            <i><img src="<?php echo base_url() ?>/application_resources/assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                            <span>Restaurant</span>
                                                        </div>
                                                        <div class="rating" data-rating="5"></div>
                                                    </div>
                                                </div>
                                            </a>
                                            /.item-horizontal small
                                        </section>
                                        <section>
                                            <a href="#"><img src="<?php echo base_url() ?>/application_resources/assets/img/ad-banner-sidebar.png" alt=""></a>
                                        </section>
                                        <section>
                                            <header><h2>Categories</h2></header>
                                            <ul class="bullets">
                                                <li><a href="#" >Restaurant</a></li>
                                                <li><a href="#" >Steak House & Grill</a></li>
                                                <li><a href="#" >Fast Food</a></li>
                                                <li><a href="#" >Breakfast</a></li>
                                                <li><a href="#" >Winery</a></li>
                                                <li><a href="#" >Bar & Lounge</a></li>
                                                <li><a href="#" >Pub</a></li>
                                            </ul>
                                        </section>
                                        <section>
                                            <header><h2>Events</h2></header>
                                            <div class="form-group">
                                                <select class="framed" name="events">
                                                    <option value="">Select Your City</option>
                                                    <option value="1">London</option>
                                                    <option value="2">New York</option>
                                                    <option value="3">Barcelona</option>
                                                    <option value="4">Moscow</option>
                                                    <option value="5">Tokyo</option>
                                                </select>
                                            </div>
                                             /.form-group 
                                        </section>
                                    </aside>
                                     /#sidebar
                                </div>-->
        <!-- /.col-md-3-->
        <!--end Sidebar-->
    </div>
</section>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $("#contact_form").validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter name"
        }, submitHandler: function(form)
        {
            $.post(site_url + '/inquries/add_inqurie', $('#contact_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $('#rtn_msg').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');

                    contact_form.reset();
                     window.location = site_url + '/pages/contact_us';
                } else {
                    $('#rtn_msg').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');

                }
            });


        }
    });

</script>
