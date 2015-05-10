<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/blue/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application_resources/elasti/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application_resources/elasti/elastislide.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application_resources/elasti/custom.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/elasti/modernizr.custom.17475.js"></script>
<div id="page-content">
    <section id="car-pagination">
        <div class="content-holder">
            <div class="page-main-heading extra-space">
                <div class="heading-location">
                    <h2><span class="bold"><?php echo $vehicle_detail->manufacture . ' ' . $vehicle_detail->model; ?></span> <?php echo $vehicle_detail->year; ?></h2>
                </div>

                <div class="extra-info">
                    <span>Offer ID C24021482</span>
                    <p>The offer had 1944 Views</p>
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
    </section><!--#car-pagination -->

    <section id="car-details">

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

            <div class="full-width vehicle-description">

                <div class="one-half col-480">
                    <div class="gallery">
                        <!-- Elastislide Carousel -->
                        <ul id="carousel" class="elastislide-list">
                            <?php foreach ($images as $image) { ?>
                                <li data-preview="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $image->image_path; ?>"><a href="#"><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/thumbnail/' . $image->image_path; ?>" alt="Thumb Car" /></a></li>
<li data-preview="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $image->image_path; ?>"><a href="#"><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/thumbnail/' . $image->image_path; ?>" alt="Thumb Car" /></a></li>
                            <?php } ?><li data-preview="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $image->image_path; ?>"><a href="#"><img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/thumbnail/' . $image->image_path; ?>" alt="Thumb Car" /></a></li>
                        </ul>
                        <!-- End Elastislide Carousel -->

                        <div class="image-preview">
                            <img id="preview" src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $images[0]->image_path; ?>" />
                        </div>
                    </div>
                </div>

                <!--                <div class="gallery one-half col-480">
                                   
                                    <ul id="carousel" class="elastislide-list">
                <?php foreach ($images as $image) { ?>
                                                <li data-preview="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $image->image_path; ?>">
                                                    <a href="">
                                                        <img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/thumbnail/' . $image->image_path; ?>" alt="Thumb Car" />
                                                    </a>
                                                </li>
                <?php } ?>
                                    </ul>
                                     <div class="image-preview">
                                        <img id="preview" src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle_detail->id . '/' . $images[0]->image_path; ?>" />
                                    </div>
                                </div>-->




                <div class="car-full-specs one-half col-460">
                    <div class="price-car">
                        <span class="price-tag">Rs. <?php echo number_format($vehicle_detail->price, 2, '.', ','); ?></span>
                        <span class="small-note">* Price negotiable</span>
                    </div>
                    <ul class="car-specs-list">
                        <li>
                            <span class="label">Model, Body type:</span>
                            <span class="value">Mercedes-Benz CLS 320, Coupe</span>
                        </li>
                        <li>
                            <span class="label">Year:</span>
                            <span class="value"><?php echo $vehicle_detail->year; ?></span>
                        </li>
                        <li>
                            <span class="label">Fuel:</span>
                            <span class="value"><?php echo $vehicle_detail->fuel_type; ?></span>
                        </li>
                        <li>
                            <span class="label">Engine:</span>
                            <span class="value">3200 cmÂ³ (373 kW / 507 CP)</span>
                        </li>
                        <li>
                            <span class="label">Transmision:</span>
                            <span class="value"><?php echo $vehicle_detail->transmission; ?></span>
                        </li>
                        <li>
                            <span class="label">Color:</span>
                            <span class="value"><?php echo $vehicle_detail->colour; ?></span>
                        </li>
                        <li>
                            <span class="label">Doors:</span>
                            <span class="value"><?php echo $vehicle_detail->doors; ?></span>
                        </li>
                        <li>
                            <span class="label">CO2-Emissions combined:</span>
                            <span class="value">ca 423 g/km</span>
                        </li>
                    </ul>

                    <div class="sell-similar-car">
                        <span class="label">You want to sell a similar car?</span>
                        <a href="add-vehicle.html" class="value">+ Add an offer</a>
                    </div>
                </div>
            </div>

            <div class="full-width grey-border-bottom">
                <div class="one-half standard-text-content col-701">

                    <h3><span class="bold">Vehicle</span> information</h3>
                    <ul>
                        <li><strong>Features: </strong>alloy wheels, xenon headlights, fog lights, tinted glass</li>
                        <li><strong>Other parameters: </strong>service book</li>
                        <li><strong>Safety: </strong>ABS, traction control, alarm, airbags, immobilizer, anti-theft, ESP, EDS, protection framework</li>
                        <li><strong>Comfort: </strong>electric windows, electric mirrors, air conditioning, leather upholstery, navigation system, central locking, radio / CD, power steering, 
                            onboard computer, cruise control, heated seats, rain sensor, steering wheel controls, parking sensors</li>
                    </ul>

                    <hr />

                    <h3><span class="bold">More</span> info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequat at. 
                        Maecenas eget massa at eros ornare rhoncus. In sit amet enim risus, in mattis felis. Donec lorem arcu, tempor quis fermentum et, viverra in turpis. 
                        Nam non nunc vitae justo tincidunt lobortis eu sit amet dui. Nam ut dui aliquet nisl fermentum mollis sit amet eget lectus. 
                        Vivamus iaculis massa sit amet velit convallis aliquam. Vestibulum dolor erat, congue nec viverra eget, aliquet sit amet nunc. Donec vitae arcu orci.</p>
                    <!--<br />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequat at. 
                    Maecenas eget massa at eros ornare rhoncus. In sit amet enim risus, in mattis felis. Donec lorem arcu, tempor quis fermentum et, viverra in turpis. 
                    Nam non nunc vitae justo tincidunt lobortis eu sit amet dui. Nam ut dui aliquet nisl fermentum mollis sit amet eget lectus. 
                    Vivamus iaculis massa sit amet velit convallis aliquam. Vestibulum dolor erat, congue nec viverra eget, aliquet sit amet nunc. Donec vitae arcu orci.</p>-->

                    <hr />

                    <h3><span class="bold">Contact</span> details</h3>
                    <p class="heading-note">AutoMarket does not store additional information about the seller except for those contained in the announcement.</p>
                    <br />
                    <ul class="icon-list">
                        <li class="phone">0040 742 016 756</li>
                        <li class="address">Berlin, Germany, nr. 250330, main street</li>
                        <li class="e-mail"><a href="#">Contact vendor via e-mail</a>
                        <li class="website"><a href="#"> http://www.dealer.automarket.com</a>
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
    </section><!--#search-list-->

</div><!--#page-content-->

<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/elasti/jquerypp.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>application_resources/elasti/jquery.elastislide.js"></script>
<script type="text/javascript">

    // example how to integrate with a previewer

    var current = 0,
            $preview = $('#preview'),
            $carouselEl = $('#carousel'),
            $carouselItems = $carouselEl.children(),
            carousel = $carouselEl.elastislide({
        current: current,
        minItems: 4,
        onClick: function(el, pos, evt) {

            changeImage(el, pos);
            evt.preventDefault();

        },
        onReady: function() {

            changeImage($carouselItems.eq(current), current);

        }
    });
console.log("sds");
    function changeImage(el, pos) {

        $preview.attr('src', el.data('preview'));
        $carouselItems.removeClass('current-img');
        el.addClass('current-img');
        carousel.setCurrent(pos);

    }

</script>