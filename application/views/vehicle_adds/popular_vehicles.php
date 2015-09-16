<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/owl.carousel.min.js"></script>
<script>
    $(window).load(function() {

        if ($('.owl-carousel').length > 0) {
            if ($('.carousel-full-width').length > 0) {
                setCarouselWidth();
            }
            $(".carousel.wide").owlCarousel({
                rtl: false,
                items: 1,
                responsiveBaseWidth: ".slide",
                nav: true,
                navText: ["", ""]
            });
        }

    });
</script>
<div class="container">
    <div class="col-md-9 col-sm-9">
        <header><h2>Popular</h2></header>

        <div class="owl-carousel wide carousel">
            <?php foreach ($popular_vehicles as $result) { ?>
                <div class="slide">
                    <div class="inner">
                        <div class="image">
                            <div class="item-specific">
                                <div class="inner">
                                    <div class="content">
                                        <dl>
                                            <?php if (!is_null($result->fuel_type)) { ?>
                                                <dt>Engine</dt>
                                                <dd><?php echo $result->fuel_type; ?></dd>
                                            <?php } ?>
                                            <?php if (!is_null($result->kilometers)) { ?>
                                                <dt>Kilometers</dt>
                                                <dd><?php echo $result->kilometers; ?></dd>
                                            <?php } ?>

                                            <?php if (!is_null($result->year)) { ?>
                                                <dt>Year</dt>
                                                <dd><?php echo $result->year; ?></dd>
                                            <?php } ?>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $result->id . '/' . $result->image_path; ?>" alt=""/>
                        </div>
                        <div class="wrapper">
                            <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $result->id; ?>"><h3><?php echo $result->manufacture . " " . $result->model; ?></h3></a>
                            <figure>
                                <i class="fa fa-car"></i>
                                <span><?php echo $result->body_type; ?></span>
                            </figure>
                            <!--/.info-->
                            <p><?php echo $result->description; ?>...
                            </p>
                            <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $result->id; ?>" class="read-more icon">Read More</a>
                        </div>
                        <!--/.wrapper-->
                    </div>
                    <!--/.inner-->
                </div>
                <!--/.slide-->
            <?php } ?>
        </div>
        <!--/.owl-carousel-->
    </div>

    <!--Web site Comments-->
    <div class="col-md-3 col-sm-3">
        <aside id="sidebar">
            <section>
                <header><h2>Website Reviews</h2></header>
                <?php foreach ($website_comments as $value) { ?>                              

                    <a href="#" class="item-horizontal small">
                        <h3><?php echo $value->title; ?></h3>
                        <div class="wrapper">
                            <div class="info">
                                <p><?php echo substr($value->description, 0, 100).' ...'; ?></p>
                                <br>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                <div><a class="btn btn-primary" href="<?php echo site_url(); ?>/website_comments/list_website_comments">Read More </a></div><br>
            </section>
        </aside>
        <!--/.sidebar-->
    </div>
</div>
