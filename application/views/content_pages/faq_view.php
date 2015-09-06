<!--Page Content-->
<div id="page-content">
    <section class="container">
        <div class="row">
            <!--Content-->
            <div class="col-md-9">
                <?php foreach ($faq_question_list as $value) { ?> 
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
                                <form role="form" action="?" method="post">
                                    <div class="form-group">
                                        <label for="faq-form-email">Email</label>
                                        <input type="email" class="form-control" id="faq-form-email" required="">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="faq-form-question">Question</label>
                                        <textarea class="form-control" id="faq-form-question" name="faq-form-question"  rows="3" required=""></textarea>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="comment_input">
                                        <input  type="button" onClick="askQuestion()"  class="btn btn-default" value="Submit Question"/>
                                        <!--<button type="submit" class="btn btn-default">Submit Question</button>-->
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                                <!-- /form-->
                            </div>
                            <!-- /.content-->
                        </div>
                        <!-- /#form-faq-->

                        <article class="faq-single">
                            <i class="fa fa-question-circle"></i>
                            <div class="wrapper">
                                <h4><?php echo $value->question;?>
                                </h4>
                                <div class="answer">
                                    <figure>Answer</figure>
                                    <p>
                                            <?php echo $value->answer;?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </section>
                    <!-- /#faq-form-->
                    <?php } ?>

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
                            <a href="#"><img src="assets/img/ad-banner-sidebar.png" alt=""></a>
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
                            <!-- /.form-group -->
                        </section>
                    </aside>
                    <!-- /#sidebar-->
                </div>
                <!-- /.col-md-3-->
                <!--end Sidebar-->
            </div>
        </section>
    </div>
    <!-- end Page Content-->

    <!-- end Page Canvas-->
    <!--Page Footer-->
    <footer id="page-footer">
        <div class="inner">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <!--New Items-->
                            <section>
                                <h2>New Items</h2>
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
                            </section>
                            <!--end New Items-->
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <!--Recent Reviews-->
                            <section>
                                <h2>Recent Reviews</h2>
                                <a href="item-detail.html#reviews" class="review small">
                                    <h3>Max Five Lounge</h3>
                                    <figure>4365 Bruce Street</figure>
                                    <div class="info">
                                        <div class="rating" data-rating="4"></div>
                                        <div class="type">
                                            <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                            <span>Restaurant</span>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non suscipit felis, sed sagittis tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ac placerat mauris.
                                    </p>
                                </a><!--/.review-->
                                <a href="item-detail.html#reviews" class="review small">
                                    <h3>Saguaro Tavern</h3>
                                    <figure>2476 Whispering Pines Circle</figure>
                                    <div class="info">
                                        <div class="rating" data-rating="5"></div>
                                        <div class="type">
                                            <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                            <span>Restaurant</span>
                                        </div>
                                    </div>
                                    <p>
                                        Pellentesque mauris. Proin sit amet scelerisque risus. Donec semper semper erat ut mollis curabitur
                                    </p>
                                </a>
                                <!--/.review-->
                            </section>
                            <!--end Recent Reviews-->
                        </div>

                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>

        </div>
    </footer>
    <!--end Page Footer-->
    <script>
        function askQuestion() {
            var description = $('#description').val();
            var title = $('#title').val();


            if (description != '' && title != '') {

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/website_comments/add_website_comments",
                data: "description=" + description + "&title=" + title,
                success: function (msg) {
                    $('#review_list').html(msg);
                    c_form.reset();
                }
            });
        }
    }




</script>

