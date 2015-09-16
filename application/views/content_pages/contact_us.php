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
                        <p>
                            Autoville- the best place to advertise your vehicle. Join us today!!
                        </p>
                        <a href="<?php echo site_url(); ?>/home/about_us" class="read-more icon">Read More</a>
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
    </div>
</section>
<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
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
                    toastr.success("Successfully submited your Inquiry !!", "AutoVille");
                    contact_form.reset();                  
                } else {
                    $('#rtn_msg').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');

                }
            });


        }
    });

</script>
