<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/blue/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application_resources/bxslider/jquery.bxslider.css" />
<style>
    .checkboxes{
        display: inline-block;
        width: 33%;
    }
</style>
<div class="container">
    <div id="page-content" class="row">
        <div class="col-md-12">
            <div id="car-pagination">
                <div class="content-holder">
                    <div class="page-main-heading extra-space">
                        <div class="heading-location">
                            <input type="hidden" name="vehicle_id" id="vehicle_id" value="<?php echo $vehicle_detail->id; ?>" />
                            <h2><span class="bold"><?php echo $vehicle_detail->manufacture . ' ' . $vehicle_detail->model; ?></span> <?php echo $vehicle_detail->year; ?></h2>
                        </div>

                        <div class="extra-info">
                            <!--<span>Offer ID C24021482</span>-->
                            <p>The offer had <?php echo $review_looks_count; ?> Views</p>

                            <div class="price-car">
                                <div class="price" style="color:blue>Rs. <?php echo number_format($vehicle_detail->price, 2, '.', ','); ?></div>
                                     <span class="small-note">* Price negotiable</span>


                                </div>
                            </div>
                        </div>

                        <nav class="default-tabs split-tabs">
                            <ul id="vehicle-toggle">
                                <li id="vehicle-description" class="current-item"><a href="#"><span>Vehicle description</span></a></li>
                                <li id="vehicle-location"><a href="#"><span>Vehicle location</span></a></li>
                            </ul>

                            <ul>
                                <li class="click-to-share"><a href="#"><span>Click to share</span></a></li>
                                <li class="print-this-page"><a href="#"><span>Print this page</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div><!--#car-pagination -->

                <div id="car-details">
                    <div class="row">
                        <div class="social-icons-round">
                            <p>Share to:</p>
                            <ul>
                                <li class="facebook"><a href="#">Facebook</a></li>
                                <li class="twitter"><a href="#">Twitter</a></li>
                                <li class="google"><a href="#">Gmail</a></li>
                            </ul>
                        </div>
                        <div class="content-holder">
                            <div class="full-width google-maps dealer-maps vehicle-location">
                                <div id="map-canvas" style="width: 978px; height: 380px;"></div>
                            </div>

                            <div class="full-width vehicle-description row">
                                <div class="col-md-8">
                                    <div >
                                        <!-- Elastislide Carousel -->
                                        <ul class="bxslider">
                                            <?php foreach ($images as $image) { ?>
                                                <li ><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $image->image_path; ?>"  /></li>
                                            <?php } ?>
                                        </ul>

                                        <div id="bx-pager">
                                            <?php
                                            $i = 0;
                                            foreach ($images as $image) {
                                                ?>
                                                <a data-slide-index="<?php echo $i++; ?>" href="#"><img  src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/thumbnail/' . $image->image_path; ?>" /></a>

                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>
                                <div id="loan-calculator" class="col-md-4">
                                    <?php echo $this->load->view('vehicle_adds/ask_for_price_view'); ?>
                                </div>

                            </div>

                            <div class="full-width standard-text-content row">
                                <div class="col-md-4">
                                    <ul class="car-specs-list">
                                        <li>
                                            <span class="label">Model, Body type:</span>
                                            <span><?php echo $vehicle_detail->model . ' , ' . $vehicle_detail->body_type; ?></span>
                                        </li>
                                        <li>
                                            <span class="label">Year:</span>
                                            <span><?php echo $vehicle_detail->year; ?></span>
                                        </li>
                                        <li>
                                            <span class="label">Fuel:</span>
                                            <span><?php echo $vehicle_detail->fuel_type; ?></span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-4">

                                    <ul class="car-specs-list">

                                        <li>
                                            <span class="label">Chassis Number:</span>
                                            <span ><?php echo $vehicle_detail->chassis_no; ?></span>
                                        </li>

                                        <li>
                                            <span class="label">Doors:</span>
                                            <span><?php echo $vehicle_detail->doors; ?></span>
                                        </li>
                                        <li>
                                            <span class="label">Kilometers:</span>
                                            <span><?php echo $vehicle_detail->kilometers; ?> km</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <ul class="car-specs-list">

                                        <li>
                                            <span class="label">Transmission:</span>
                                            <span><?php echo $vehicle_detail->transmission; ?></span>
                                        </li>
                                        <li>
                                            <span class="label">Color:</span>
                                            <span><?php echo $vehicle_detail->colour; ?></span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="full-width grey-border-bottom">
                                <div class="one-half standard-text-content col-701">

                                    <h3><span class="bold">Vehicle</span> information</h3>
                                    <div class="row">
                                        <?php foreach ($equipments as $equipment) { ?>
                                        <div class="col-md-3" style="padding-bottom: 12px;">
                                                <?php echo $equipment->name; ?>

                                            </div>
                                        <div class="col-md-3" style="padding-bottom: 12px;">
                                                <?php if (in_array($equipment->id, $vehicle_equipments)) { ?> Yes <?php } else { ?> No<?php } ?>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>

                                    <hr />

                                    <h3><span class="bold">More</span> info</h3>
                                    <p><?php echo $vehicle_detail->description; ?></p>


                                    <hr />

                                    <h3><span class="bold">Contact</span> details</h3>
                                    <p class="heading-note">AutoVille does not store additional information about the seller except for those contained in the announcement.</p>
                                    <br />
                                    <ul class="icon-list">
                                        <li class="phone"><?php echo $seller_add->contact_no_1; ?></li>
                                        <li class="address"><?php echo $seller_add->address; ?></li>
                                        <li class="e-mail"><a href="#"><?php echo $seller_add->email; ?></a>
                                        <li class="website"><a href="#"> http://www.autoville.lankapanel.biz</a>
                                    </ul>
                                </div>


                                <div class="one-half col-241 search-area">




                                    <div id="loan-calculator" class="grey-corner-box">
                                        <?php echo $this->load->view('vehicle_adds/loan_calculator'); ?>
                                    </div>


                                    <div class="grey-corner-box">
                                        <a href="#"><img src="images/image_ads_here.gif" alt="Advertisement" /></a>
                                    </div>

                                </div>

                            </div>


                            <div class="full-width standard-text-content">
                                <?php echo $this->load->view('vehicle_adds/vehicle_reviews_view'); ?>
                            </div>





                        </div><!--.content-holder-->
                    </div>
                </div><!--#search-list-->
            </div>
        </div><!--#page-content-->
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript">

    $(document).ready(function() {

        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager'
        });

        $.ajax({
            type: "POST",
            url: '<?php echo site_url(); ?>/vehicle_advertisements/add_search_history',
            data: {vehicle_id: $('#vehicle_id').val()},
            success: function(msg) {

            }
        });

    });


</script>