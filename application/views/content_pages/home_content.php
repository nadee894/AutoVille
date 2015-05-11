<!--Hero Image-->
<section class="hero-image search-filter-bottom">
    <?php echo $this->load->view('vehicle_adds/load_vehicle_sepecs_for_search'); ?>
</section>
<!--end Hero Image-->

<!--Featured-->
<!--                        <section id="featured" class="block background-color-grey-dark equal-height">
    <div class="container">
        <header><h2>Featured</h2></header>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="item featured">
                    <div class="image">
                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                        <a href="car-item-detail.html">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="content">
                                        <h4>Description</h4>
                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-specific">
                                <span>Used Car</span>
                            </div>
                            <div class="icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <img src="<?php echo base_url(); ?>application_resources/assets/img/items/cars/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="wrapper">
                        <a href="car-item-detail.html"><h3>Open Insignia TDi</h3></a>
                        <figure>Sedan</figure>
                        <div class="price">$12.000</div>
                        <div class="info">
                            <dl>
                                <dt>Engine</dt>
                                <dd>Diesel</dd>
                                <dt>Kilometers</dt>
                                <dd>59000</dd>
                                <dt>Year</dt>
                                <dd>2012</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                 /.item
            </div>
            /.col-sm-4
            <div class="col-md-3 col-sm-3">
                <div class="item featured">
                    <div class="image">
                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                        <a href="car-item-detail.html">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="content">
                                        <h4>Description</h4>
                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo base_url(); ?>application_resources/assets/img/items/cars/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="wrapper">
                        <a href="car-item-detail.html"><h3>Mercedes Benz Class A</h3></a>
                        <figure>63 Birch SUV</figure>
                        <div class="price">$69.000</div>
                        <div class="info">
                            <dl>
                                <dt>Engine</dt>
                                <dd>Gasoline</dd>
                                <dt>Kilometers</dt>
                                <dd>120000</dd>
                                <dt>Year</dt>
                                <dd>2014</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                 /.item
            </div>
            /.col-sm-4
            <div class="col-md-3 col-sm-3">
                <div class="item featured">
                    <div class="image">
                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                        <a href="car-item-detail.html">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="content">
                                        <h4>Description</h4>
                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo base_url(); ?>application_resources/assets/img/items/cars/8.jpg" alt="">
                        </a>
                    </div>
                    <div class="wrapper">
                        <a href="car-item-detail.html"><h3>Subaru WRX 2.2 TDi</h3></a>
                        <figure>Sport Car</figure>
                        <div class="price">$86.500</div>
                        <div class="info">
                            <dl>
                                <dt>Engine</dt>
                                <dd>Diesel</dd>
                                <dt>Kilometers</dt>
                                <dd>28000</dd>
                                <dt>Year</dt>
                                <dd>2014</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                 /.item
            </div>
            /.col-sm-4
            <div class="col-md-3 col-sm-3">
                <div class="item featured">
                    <div class="image">
                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                        <a href="car-item-detail.html">
                            <div class="overlay">
                                <div class="inner">
                                    <div class="content">
                                        <h4>Description</h4>
                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-specific">
                                <span>Used Car</span>
                            </div>
                            <img src="<?php echo base_url(); ?>application_resources/assets/img/items/cars/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="wrapper">
                        <a href="car-item-detail.html"><h3>Infinity Q50</h3></a>
                        <figure>Sedan</figure>
                        <div class="price">$35.500</div>
                        <div class="info">
                            <dl>
                                <dt>Engine</dt>
                                <dd>Hybrid</dd>
                                <dt>Kilometers</dt>
                                <dd>145600</dd>
                                <dt>Year</dt>
                                <dd>2011</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                 /.item
            </div>
            /.col-sm-4
        </div>
    </div>-->
</section>
<!--end Featured-->


<!--Featured Vehicles-->
<!--Featured-->
<section id="featured" class="block background-color-grey-dark equal-height">
    <?php echo $this->load->view('vehicle_adds/featured_vehicles'); ?>    
</section>
<!--end Featured-->


<!--Categories-->
<section id="manufacturer_list" class="block background-color-white">
    <?php echo $this->load->view('manufacturers/manufacture_list_view'); ?>
</section>
<!--end Categories-->



<!--Price Drop-->
<section id="price-drop" class="block equal-height">
    <?php echo $this->load->view('vehicle_adds/price_drop_vehicles'); ?>
</section>
<!--end Price Drop-->

<!--Recent-->
<section id="recent" class="block">
    <?php echo $this->load->view('vehicle_adds/recent_adds'); ?>
</section>
<!--end Recent-->

<!--Why Us-->
<section id="why-us" class="block background-color-grey-dark">
    <?php echo $this->load->view('content_pages/why_us'); ?>
</section>
<!--end Why Us-->

<!--Partners-->
<section id="partners" class="block">
    <div class="container">
        <header><h2>Partners</h2></header>
        <div class="logos">
            <?php foreach ($logos as $logo) { ?>
                <div class="logo"><a href=""><img src="<?php echo base_url() . 'uploads/manufacture_logo/' . $logo->logo; ?>" width="76" alt=""></a></div>                
                    <?php } ?>
        </div>
    </div>
    <!--/.container-->
</section>
<!--end Partners-->
