<div id="map-detail"></div>
<section class="container page-item-detail">
    <div class="row">
        <!--Item Detail Content-->
        <div class="col-md-9">
            <section class="block" id="main-content">
                <header class="page-title">
                    <div class="title">
                        <input type="hidden" name="vehicle_id" id="vehicle_id" value="<?php echo $vehicle_detail->id; ?>" />
                        <h1><?php echo $vehicle_detail->manufacture . ' ' . $vehicle_detail->model . ' ' . $vehicle_detail->year; ?></h1>
                        <figure>Rs. <?php echo number_format($vehicle_detail->price, 2, '.', ','); ?></figure>
                    </div>
                    <div class="info">
                        <div class="type">
                            <span>The offer had <?php echo $review_looks_count; ?> Views</span>
                        </div>
                    </div>
                </header>
                <div class="row">
                    <!--Detail Sidebar-->
                    <aside class="col-md-4 col-sm-4" id="detail-sidebar">
                        <!--Contact-->
                        <section>
                            <header><h3>Contact</h3></header>
                            <address>
                                <div>Max Five Lounge</div>
                                <div><?php echo $seller_add->address; ?></div>
                                <figure>
                                    <div class="info">
                                        <i class="fa fa-mobile"></i>
                                        <span><?php echo $seller_add->contact_no_1; ?></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span>+1 123 456 789</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <a href="#"><?php echo $seller_add->email; ?></a>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-globe"></i>
                                        <a href="#">www.autoville.lankapanel.biz</a>
                                    </div>
                                </figure>
                            </address>
                        </section>
                        <!--end Contact-->
                        <!--Rating-->
                        <section class="clearfix">
                            <header class="pull-left"><a href="#reviews" class="roll"><h3>Rating</h3></a></header>
                            <figure class="rating big pull-right" data-rating="4"></figure>
                        </section>
                        <!--end Rating-->
                        <!--Events-->
                        <section>
                            <header><h3>Events</h3></header>
                            <figure>
                                <div class="expandable-content collapsed show-60" id="detail-sidebar-event">
                                    <div class="content">
                                        <p>Maecenas purus sapien, pellentesque non consectetur eu, rhoncus in mauris.
                                            Duis et nisl metus. Sed ut pulvinar mauris, bibendum ullamcorper ex.
                                            Aliquam vitae ante diam. Nam eu blandit odio. Cras erat lorem, iaculis eu nulla eu, sodales aliquam eros.
                                        </p>
                                    </div>
                                </div>
                                <a href="#" class="show-more expand-content" data-expand="#detail-sidebar-event" >Show More</a>
                            </figure>
                        </section>
                        <!--end Events-->
                        <!--Contact Form-->
                        <section>
                            <?php echo $this->load->view('vehicle_adds/ask_for_price_view'); ?>
                        </section>
                        <!--end Contact Form-->
                    </aside>
                    <!--end Detail Sidebar-->
                    <!--Content-->
                    <div class="col-md-8 col-sm-8">
                        <section>
                            <article class="item-gallery">
                                <div class="owl-carousel item-slider">
                                    <?php
                                    $i = 0;
                                    foreach ($images as $image) {
                                        ++$i
                                        ?>
                                        <div class="owl-item <?php if ($i == 1) { ?> active<?php } ?>">
                                            <div class="slide"><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $image->image_path; ?>" data-hash="<?php echo $i; ?>" alt=""></div>
                                        </div>

                                    <?php } ?>

                                </div>
                                <!-- /.item-slider -->
                                <div class="thumbnails">
                                    <span class="expand-content btn framed icon" data-expand="#gallery-thumbnails" >More<i class="fa fa-plus"></i></span>
                                    <div class="expandable-content height collapsed show-70" id="gallery-thumbnails">
                                        <div class="content">
                                            <?php
                                            $i = 0;
                                            foreach ($images as $image) {
                                                ++$i
                                                ?>
                                                <a href="#<?php echo $i; ?>" id="thumbnail-<?php echo $i; ?>" <?php if ($i == 1) { ?> class="active" <?php } ?>><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $image->image_path; ?>" alt=""></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- /.item-gallery -->
                            <article class="block">
                                <header><h2>Description</h2></header>
                                <p><?php echo $vehicle_detail->description; ?></p>
                            </article>
                            <!-- /.block -->
                            <article class="block">
                                <header><h2>Daily Menu</h2></header>
                                <div class="list-slider owl-carousel">
                                    <div class="slide">
                                        <header>
                                            <h3><i class="fa fa-calendar"></i>Monday (today)</h3>
                                        </header>
                                        <div class="list-item">
                                            <div class="left">
                                                <h4>Chicken wings</h4>
                                                <figure>Curabitur odio nibh, luctus non pulvinar</figure>
                                            </div>
                                            <div class="right">$4.50</div>
                                        </div>
                                        <!-- /.list-item -->
                                        <div class="list-item">
                                            <div class="left">
                                                <h4>Mushroom ragout</h4>
                                                <figure>Donec a odio rutrum, hendrerit sapien</figure>
                                            </div>
                                            <div class="right">$3.60</div>
                                        </div>
                                        <!-- /.list-item -->
                                        <div class="list-item">
                                            <div class="left">
                                                <h4>Nice salad with tuna, beans and hard-boiled egg</h4>
                                                <figure>Urabitur suscipit, justo eu dignissim lacinia </figure>
                                            </div>
                                            <div class="right">$1.20</div>
                                        </div>
                                        <!-- /.list-item -->
                                    </div>
                                    <!-- /.slide -->
                                    <div class="slide">
                                        <header>
                                            <h3><i class="fa fa-calendar"></i>Tuesday</h3>
                                        </header>
                                        <div class="list-item">
                                            <div class="left">
                                                <h4>Chicken wings</h4>
                                                <figure>Curabitur odio nibh, luctus non pulvinar</figure>
                                            </div>
                                            <div class="right">$4.50</div>
                                        </div>
                                        <!-- /.list-item -->
                                        <div class="list-item">
                                            <div class="left">
                                                <h4>Mushroom ragout</h4>
                                                <figure>Donec a odio rutrum, hendrerit sapien</figure>
                                            </div>
                                            <div class="right">$3.60</div>
                                        </div>
                                        <!-- /.list-item -->
                                        <div class="list-item">
                                            <div class="left">
                                                <h4>Nice salad with tuna, beans and hard-boiled egg</h4>
                                                <figure>Urabitur suscipit, justo eu dignissim lacinia </figure>
                                            </div>
                                            <div class="right">$1.20</div>
                                        </div>
                                        <!-- /.list-item -->
                                    </div>
                                    <!-- /.slide -->
                                </div>
                                <!-- /.list-slider -->
                            </article>
                            <!-- /.block -->
                            <article class="block">
                                <header><h2>Features</h2></header>
                                <ul class="bullets">
                                    <li>Free Parking</li>
                                    <li>Cards Accepted</li>
                                    <li>Wi-Fi</li>
                                    <li>Air Condition</li>
                                    <li>Reservations</li>
                                    <li>Teambuildings</li>
                                    <li>Places to seat</li>
                                    <li>Winery</li>
                                    <li>Draft Beer</li>
                                    <li>LCD</li>
                                    <li>Saloon</li>
                                    <li>Free Access</li>
                                    <li>Terrace</li>
                                    <li>Minigolf</li>
                                </ul>
                            </article>
                            <!-- /.block -->
                            <article class="block">
                                <header><h2>Opening Hours</h2></header>
                                <dl class="lines">
                                    <dt>Monday</dt>
                                    <dd>08:00 am - 11:00 pm</dd>
                                    <dt>Tuesday</dt>
                                    <dd>08:00 am - 11:00 pm</dd>
                                    <dt>Wednesday</dt>
                                    <dd>08:00 am - 11:00 pm</dd>
                                    <dt>Thursday</dt>
                                    <dd>08:00 am - 11:00 pm</dd>
                                    <dt>Friday</dt>
                                    <dd>08:00 am - 11:00 pm</dd>
                                    <dt>Saturday</dt>
                                    <dd>08:00 am - 11:00 pm</dd>
                                </dl>
                            </article>
                            <!-- /.block -->
                        </section>
                        <!--Reviews-->
                        <?php echo $this->load->view('vehicle_adds/vehicle_reviews_view'); ?>
                        <!--end Review Form-->
                    </div>
                    <!-- /.col-md-8-->
                </div>
                <!-- /.row -->
            </section>
            <!-- /#main-content-->
        </div>
        <!-- /.col-md-8-->
        <!--Sidebar-->
        <div class="col-md-3">
            <aside id="sidebar">
                <section>
                    <header><h2>New Places</h2></header>
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
    </div><!-- /.row-->
</section>
<!-- /.container-->

<script>


    $(".item-slider").owlCarousel({
        rtl: false,
        items: 1,
        autoHeight: true,
        responsiveBaseWidth: ".slide",
        nav: false,
        callbacks: true,
        URLhashListener: true,
        navText: ["", ""]
    });

</script>