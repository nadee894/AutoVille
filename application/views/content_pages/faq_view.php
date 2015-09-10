<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/owl.carousel.min.js"></script>
<section class="container">
    <div class="row" id="faq_">
        <!--Content-->
        <div class="col-md-9">

            <header>
                <h1 class="page-title">FAQ</h1>
            </header>
            <section class="faq-form">
                <figure class="clearfix">
                    <i class="fa fa-question"></i>
                    <div class="wrapper">
                        <div class="pull-left">
                            <strong>Didn't find an answer?</strong>
                            <h3>Ask Your Question</h3>
                        </div>
                        <a href="#form-faq" class="btn btn-default pull-right" data-toggle="collapse" aria-expanded="false" aria-controls="form-faq">Ask Question</a>
                    </div>
                </figure>

                <div class="collapse" id="form-faq">
                    <div class="">
                        <form role="form" action="?" method="post" id="c_form">
                            <div class="form-group">
                                <label for="faq-form-email">Email</label>
                                <input type="email" class="form-control" id="faq_form_email" name="faq_form_email" required="">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="faq-form-question">Question</label>
                                <textarea class="form-control" id="faq_form_question" name="faq_form_question"  rows="3" required=""></textarea>
                            </div>
                            <!-- /.form-group -->
                            <div class="comment_input">
                                <input  id="submit_faq" type="button"  class="btn btn-default" value="Submit Question"/>
                                <!--<button type="submit" class="btn btn-default">Submit Question</button>-->
                            </div>
                            <!-- /.form-group -->
                        </form>
                        <div id="confirm_msg" style="display: none">
                            <div class="alert alert-success">
                                <i class="fa fa-check-circle fa-fw fa-lg"></i>
                                Question Posted Successfully. Please wait for the question to be approved and answered!!
                            </div>
                        </div>
                        <!-- /form-->
                    </div>
                    <!-- /.content-->
                </div>
                <br/>
                <!-- /#form-faq-->
            </section>
            <?php foreach ($faq_question_list as $value) { ?> 
                <div id="question_list">
                    <article class="faq-single" >
                        <i class="fa fa-question-circle"></i>
                        <div class="wrapper">
                            <h4><?php echo $value->question; ?>
                            </h4>
                            <div class="answer">
                                <?php if ($value->answer == '') { ?>
                                    <figure>Answer</figure>
                                    <p>
                                        <?php echo ("Not yet Answered!"); ?>  
                                    </p>
                                <?php } else { ?>
                                    <figure>Answer</figure>
                                    <p>
                                        <?php echo $value->answer; ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </article>
                </div>
            <?php } ?>

            <!-- /#faq-form-->


            <!-- /.faq-single-->

        </div>
        <!--Sidebar-->
        <div class="col-md-3">
            <aside id="sidebar">
                <section>
                    <header><h2>New Advertisements</h2></header>
                    <a href="item-detail.html" class="item-horizontal small">
                        <h3>Cash Cow Restaurante</h3>
                        <figure>63 Birch Street</figure>
                        <div class="wrapper">
                            <div class="image"><img src="assets/img/items/1.jpg" alt=""></div>
                            <div class="info">
                                <div class="type">
                                    <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                    <span>Restaurant</span>
                                </div>
                                <div class="rating" data-rating="4"></div>
                            </div>
                        </div>
                    </a>
                    <!--/.item-horizontal small-->
                    <a href="item-detail.html" class="item-horizontal small">
                        <h3>Blue Chilli</h3>
                        <figure>2476 Whispering Pines Circle</figure>
                        <div class="wrapper">
                            <div class="image"><img src="assets/img/items/2.jpg" alt=""></div>
                            <div class="info">
                                <div class="type">
                                    <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                    <span>Restaurant</span>
                                </div>
                                <div class="rating" data-rating="3"></div>
                            </div>
                        </div>
                    </a>
                    <!--/.item-horizontal small-->
                    <a href="item-detail.html" class="item-horizontal small">
                        <h3>Eddie’s Fast Food</h3>
                        <figure>4365 Bruce Street</figure>
                        <div class="wrapper">
                            <div class="image"><img src="assets/img/items/3.jpg" alt=""></div>
                            <div class="info">
                                <div class="type">
                                    <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                    <span>Restaurant</span>
                                </div>
                                <div class="rating" data-rating="5"></div>
                            </div>
                        </div>
                    </a>
                    <!--/.item-horizontal small-->
                </section>
                <section>
                    <?php echo $this->load->view('vehicle_adds/commercial_add_view'); ?>
                </section>
            </aside>
            <!-- /#sidebar-->
        </div>


        <!-- /.col-md-3-->
        <!--end Sidebar-->
    </div>
</section>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">
    $(document).delegate('#submit_faq', 'click', function (e) {

        $("#c_form").validate({
            rules: {
                faq_form_email: {
                    required: true,
                    email: true
                },
                faq_form_question: {
                    required: true

                }

            }, messages: {
                faq_form_email: {
                    required: "Please Enter Your Email",
                    email: "Incorrect Email Address"
                },
                faq_form_question: "Please Enter the Question"
            }, submitHandler: function (form) {

            }
        });

        if ($("#c_form").valid()) {

            var question = $('#faq_form_question').val();
            var email = $('#faq_form_email').val();
//                        toastr.success("Profile Successfully updated !!", "AutoVille");
            $.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>/faq/add_faq_questions",
                data: "question=" + question + "&email=" + email,
                success: function (msg) {
                    if (msg = 1) {
                        $('#confirm_msg').html('<div class="alert alert-success"><i class="fa fa-check-circle fa-fw fa-lg"></i>Question Posted Successfully. Please wait for the question to be approved and answered!!</div>');
                        $('#confirm_msg').fadeIn();
                        $('#confirm_msg').fadeOut(8000);
//                        setTimeout("location.href = site_url+'/faq/list_faq_questions';", 100);
                        //                    toastr.success("Successfully Posted !!", "AutoVille");
                        c_form.reset();
                    } else {

                    }
                }
            });
        } else {
            $('#rtn_msg').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');
        }
    });

</script>

