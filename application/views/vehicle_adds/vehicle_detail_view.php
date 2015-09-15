<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/richmarker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/maps.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/assets/js/jquery.validate.min.js"></script>
<script>
    $.ajax({
        type: "POST",
        url: '<?php echo site_url(); ?>/vehicle_advertisements/add_search_history',
        data: {vehicle_id: <?php echo $vehicle_detail->id;?>},
        success: function(msg) {

        }
    });

    $(window).load(function() {

        if ($('.owl-carousel').length > 0) {
            if ($('.carousel-full-width').length > 0) {
                setCarouselWidth();
            }
            $(".item-slider").owlCarousel({
                rtl: false,
                items: 1,
                lazyLoad: true,
                autoHeight: true,
                responsiveBaseWidth: ".slide",
                nav: false,
                callbacks: true,
                URLhashListener: true,
                navText: ["", ""]
            });

            $('.item-gallery .thumbnails a').on('click', function() {
                $('.item-gallery .thumbnails a').each(function() {
                    $(this).removeClass('active');
                });
                $(this).addClass('active');
            });
            $('.item-slider').on('translated.owl.carousel', function(event) {
                var thumbnailNumber = $('.item-slider .owl-item.active img').attr('data-hash');
                $('.item-gallery .thumbnails #thumbnail-' + thumbnailNumber).trigger('click');
            });
        }

        itemDetailMap('<?php echo $vehicle_detail->latitude; ?>', '<?php echo $vehicle_detail->longitude; ?>');

    });
    $(document).ready(function() {

        //edit review form validation
        $("#edit_review_form").validate({
            rules: {
                description: "required"
            },
            messages: {
                description: "Please enter a description"
            }, submitHandler: function(form)
            {
                var id = $('#vehicle_id').val();
                $.post(site_url + '/vehicle_reviews/edit_review', $('#edit_review_form').serialize(), function(msg)
                {
                    if (msg == 1) {
                        $('#rtn_msg_edit').html('<div class="alert alert-success fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>Successfully saved!!.</strong></div>');
                        window.location = site_url + '/vehicle_advertisements/vehicle_advertisement_detail_view' + '/' + id;
                    } else {
                        $('#rtn_msg_edit').html('<div class="alert alert-block alert-danger fade in"><button class="close close-sm" type="button" data-dismiss="alert"><i class="fa fa-times"></i></button><strong>An error occured.</strong></div>');

                    }
                });


            }
        });
    });

</script>

<section class="container page-item-detail">
    <div class="row">
        <!--Item Detail Content-->
        <div class="col-md-9">
            <section class="block" id="main-content">
                <header class="page-title">
                    <div class="title">
                        <input type="hidden" name="vehicle_id" id="vehicle_id" value="<?php echo $vehicle_detail->id; ?>" />
                        <h1><?php echo $vehicle_detail->manufacture . ' ' . $vehicle_detail->model . ' ' . $vehicle_detail->year; ?></h1>
                        <figure style="color: red;"><strong>Rs. <?php echo number_format($vehicle_detail->price, 2, '.', ','); ?></strong></figure>
                    </div>
                    <div class="info">
                        <div class="type">
                            <i>
                                <img alt="" src="<?php echo base_url(); ?>application_resources/assets/icons/media/photo.png">
                            </i>
                            <span>The offer had <?php echo $review_looks_count; ?> Views</span>
                        </div>
                        <div class="type">
                            <a class="btn btn-default framed icon pull-right roll" href="#" onclick="window.print();">
                                Print
                                <i class="fa fa-print"></i>
                            </a>
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
                                <div><?php echo $seller_add->address; ?></div>
                                <figure>
                                    <div class="info">
                                        <i class="fa fa-mobile"></i>
                                        <span><?php echo $seller_add->contact_no_1; ?></span>
                                    </div>
                                    <?php
                                    if (isset($seller_add->contact_no_2))
                                        if ($seller_add->contact_no_2 != '') {
                                            ?>
                                            <div class="info">
                                                <i class="fa fa-phone"></i>
                                                <span><?php echo $seller_add->contact_no_2; ?></span>
                                            </div>
                                        <?php } ?>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:<?php echo $seller_add->email; ?>"><?php echo $seller_add->email; ?></a>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-globe"></i>
                                        <a href="#">www.autoville.lankapanel.biz</a>
                                    </div>
                                </figure>
                            </address>
                        </section>
                        <!--end Contact-->
                        <!--Share-->
                        <section class="clearfix">
                            <header class="pull-left">
                                <a class="roll" href="#reviews">
                                    <h3>Share</h3>
                                </a>
                            </header>
                            <figure class="pull-right">
                                <div class="addthis_sharing_toolbox"></div>

                            </figure>
                        </section>
                        <!--End Share-->
                        <!--Contact Form-->
                        <section>
                            <?php echo $this->load->view('vehicle_adds/ask_for_price_view'); ?>
                        </section>
                        <!--end Contact Form-->

                        <section style="background-color: #fff;">
                            <?php echo $this->load->view('vehicle_adds/loan_calculator'); ?>
                        </section>
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
                                <header><h2>Info</h2></header>
                                <dl class="lines">
                                    <dt>Model, Body type</dt>
                                    <dd><?php echo $vehicle_detail->model . ' , ' . $vehicle_detail->body_type; ?></dd>
                                    <dt>Year</dt>
                                    <dd><?php echo $vehicle_detail->year; ?></dd>
                                    <dt>Fuel</dt>
                                    <dd><?php echo $vehicle_detail->fuel_type; ?></dd>
                                    <dt>Chassis Number</dt>
                                    <dd><?php echo $vehicle_detail->chassis_no; ?></dd>
                                    <dt>Doors</dt>
                                    <dd><?php echo $vehicle_detail->doors; ?></dd>
                                    <dt>Kilometers</dt>
                                    <dd><?php echo $vehicle_detail->kilometers; ?> km</dd>
                                </dl>
                            </article>
                            <!-- /.block -->

                            <article class="block">
                                <header><h2>Features</h2></header>
                                <ul class="bullets">
                                    <?php foreach ($equipments as $equipment) { ?>
                                        <li><span><?php echo $equipment->name; ?></span>&nbsp; <?php if (in_array($equipment->id, $vehicle_equipments)) { ?> Yes <?php } else { ?> No<?php } ?></li>

                                    <?php }
                                    ?>
                                </ul>
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
                    <header><h2>Similar Suggestions</h2></header>
                    <?php
                    foreach ($suggestions as $suggestion) {
                        if ($vehicle_detail->id == $suggestion->id)
                            continue;
                        ?>
                        <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $suggestion->id; ?>" class="item-horizontal small">
                            <h3><?php echo $suggestion->description; ?></h3>

                            <div class="wrapper">
                                <div class="image"><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $suggestion->id . '/' . $suggestion->image_path; ?>" alt=""></div>
                                <div class="info">
                                    <div class="type">
                                        <span><?php echo $suggestion->year; ?>, <?php echo $suggestion->fuel_type; ?></span>
                                        <span style="color: red; font-size: 15px;">Rs. <?php echo number_format($suggestion->price, 2, '.', ','); ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </section>
                <section>
                    <?php echo $this->load->view('vehicle_adds/commercial_add_view'); ?>
                </section>

            </aside>
            <!-- /#sidebar-->
        </div>
        <!-- /.col-md-3-->
        <!--end Sidebar-->
    </div><!-- /.row-->
</section>
<!-- /.container-->
<div id="map-detail"></div>


<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55deb0b601ffb683" async="async"></script>
