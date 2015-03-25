<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/blue/css/main.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/blue/css/uniform.default.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/blue/css/prettyPhoto.css">

<script src="<?php echo base_url(); ?>application_resources/blue/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/vendor/jquery-1.8.2.min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/vendor/selectivizr.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/vendor/PIE.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/plugins/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/plugins/jquery.uniform.min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/plugins/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/plugins/jquery.carouFredSel-6.1.0-packed.js"></script>
<!--<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
<script src="<?php echo base_url(); ?>application_resources/blue/js/plugins/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url(); ?>application_resources/blue/js/plugins/jquery.countdown.js"></script>

<script src="<?php echo base_url(); ?>application_resources/blue/js/plugins.js"></script>
<!--<script src="<?php echo base_url(); ?>application_resources/blue/js/main.js"></script>-->

<div id="page-content">

    <section id="search-list" class="container">
        <div class="content-holder">
            <div class="full-width">

                <div class="one-half col-241 search-area">
                    <form id="search-filters" action="#">
                        <!--Search Filter-->
                        <fieldset class="grey-corner-box">
                            <legend><span class="bold">Search</span> filters</legend>
                            <ul>
                                <li>
                                    <div class="form-group">
                                        <label for="manufacturer">Manufacturer</label>
                                        <select name="manufacturer" id="manufacturer" title="Manufacturer" data-live-search="true">
                                            <option value="">Select Manufacturer</option>
                                            <?php foreach ($manufactures as $manufacture) { ?>
                                                <option value="<?php echo $manufacture->id; ?>"><?php echo $manufacture->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <select name="model" id="model" title="Model" data-live-search="true">
                                            <option value="">Select Model</option>
                                            <?php foreach ($models as $model) { ?>
                                                <option value="<?php echo $model->id; ?>"><?php echo $model->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div> 
                                </li>                                
                                <li>
                                    <div class="form-group">
                                        <label for="body_type">Body Type</label>
                                        <select name="body_type" id="body_type" title="Body Type" data-live-search="true">
                                            <option value="">Select Body Type</option>
                                            <?php foreach ($body_types as $body_type) { ?>
                                                <option value="<?php echo $body_type->id; ?>"><?php echo $body_type->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>        
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label>Year</label>
                                        <div class="ui-slider" id="year-slider" data-value-min="1920" data-value-max="2015" data-step="1">
                                            <div class="values clearfix">
                                                <input class="value-min" id="minyear" name="value-min[]" readonly>
                                                <input class="value-max" id="maxyear" name="value-max[]" readonly>
                                            </div>
                                            <div class="element"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="fuel">Fuel</label>
                                        <select name="fuel_type" id="fuel_type" title="Fuel" data-live-search="true">
                                            <option value="">Select Fuel Type</option>
                                            <?php foreach ($fuel_types as $fuel_type) { ?>
                                                <option value="<?php echo $fuel_type->id; ?>"><?php echo $fuel_type->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="sale_type">Sale Type</label>
                                        <select name="sale_type" id="sale_type" title="Sale Type" data-live-search="true">
                                            <option value="">Select Sale Type</option>
                                            <option value="0">New</option>
                                            <option value="1">Used</option>
                                            <option value="1">Reconditioned</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <select name="color" id="color" title="Color" data-live-search="true">
                                            <option value="">Select Color</option>
                                            <option value="1">Blue</option>
                                            <option value="2">Yellow</option>
                                            <option value="3">Purple</option>
                                            <option value="4">Pink</option>
                                            <option value="5">Red</option>
                                            <option value="6">Green</option>
                                            <option value="7">White</option>
                                            <option value="8">Black</option>
                                            <option value="9">Silver</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label>Price Rs.</label>
                                        <div class="ui-slider" id="price-slider" data-value-min="100000" data-value-max="100000000"  data-step="10"><!--data-currency="$" data-currency-placement="before" data-value-type="price"-->
                                            <div class="values clearfix">
                                                <input class="value-min" id="minprice" name="value-min[]" readonly>
                                                <input class="value-max" id="maxprice" name="value-max[]" readonly>
                                            </div>
                                            <div class="element"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="transmission">Transmission</label>
                                        <select name="transmission" id="transmission" title="Transmission" data-live-search="true">
                                            <option value="">Select Transmission</option>
                                            <?php foreach ($transmissions as $transmission) { ?>
                                                <option value="<?php echo $transmission->id; ?>"><?php echo $transmission->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="kilometers">Kilometers</label>                                                
                                        <input type="text" class="form-control" id="kilometers" placeholder="Enter Keyword">
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <select name="location" id="location" title="Location" data-live-search="true">                            
                                            <?php foreach ($locations as $location) { ?>
                                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="keyword">Keyword</label>
                                        <input type="text" class="form-control" id="keyword" placeholder="Enter Keyword">
                                    </div> 
                                </li>
                                <li>
                                    <!-- add this to general styles -->
                                    <div class="search-button">
                                        <input type="submit" value="Search" />
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <!--End Search Filter-->

                        <fieldset id="loan-calculator" class="grey-corner-box">
                            <legend><span class="bold">Loan</span> calculator</legend>
                            <ul>
                                <li>
                                    <label for="loan-amount">Loan Amount:</label>
                                    <select id="loan-amount">
                                        <option value="0" selected="selected">0.00 Euro</option>
                                        <option value="1000">1000.00 Euro</option>
                                        <option value="5000">5000.00 Euro</option>
                                        <option value="10000">10000.00 Euro</option>
                                    </select>							
                                </li>
                                <li>
                                    <label for="down-payment">Down Payment:</label>
                                    <select id="down-payment">
                                        <option value="0" selected="selected">0.00 Euro</option>
                                        <option value="1000">1000.00 Euro</option>
                                        <option value="5000">5000.00 Euro</option>
                                        <option value="10000">10000.00 Euro</option>
                                    </select>							
                                </li>
                                <li>
                                    <label for="annual-rate">Annual Rate:</label>
                                    <select id="annual-rate">
                                        <option value="0" selected="selected">0.00 %</option>
                                        <option value="0.1">10.00 %</option>
                                        <option value="0.2">20.00 %</option>
                                        <option value="0.3">30.00 %</option>
                                    </select>							
                                </li>
                                <li>
                                    <label for="loan-period">Loan Period:</label>
                                    <select id="loan-period">
                                        <option value="3" selected="selected">3 Years</option>
                                        <option value="1">1 Year</option>
                                        <option value="2">2 Years</option>
                                        <option value="3">4 Years</option>
                                    </select>
                                </li>
                                <li>
                                    <div class="submit-button"><input type="submit" value="calculate" /></div>
                                </li>
                                <li class="rate-value">
                                    <p>Rate value: <span class="amount-value">0,00</span></p>
                                </li>
                            </ul>							
                        </fieldset>
                    </form>
                </div>

                <div class="results-list one-half col-701">
                    <div class="sort-view layer-one">                        		

                        <div class="pagination">
                            <a href="#" class="current-item"><span>1</span></a>
                            <a href="#"><span>2</span></a>
                            <a href="#"><span>3</span></a>
                            <span class="space-between">...</span>
                            <a href="#"><span>8</span></a>
                            <a href="#" class="last-button">Next</a>
                        </div>
                    </div>

                    <div class="layer-two">

                        <div id="cars-list" class="grid-view list-content">
                            <ul class="offer-small">
                                <?php
                                $resultcount = count($results);
                                if ($resultcount == 0) {
                                    ?>
                                    <h4>No Result Found</h4>
                                <?php } else { ?>
                                    <?php foreach ($results as $result) { ?>
                                        <!-- Car post -->
                                        <li>
                                            <!--<a href="car-details.html" class="item-link">
                                                <img src="<?php echo base_url(); ?>application_resources/blue/images/mercedes-thumb.jpg" alt="offer car" />
                                                <div class="entry-label">
                                                    <h4 class="car-title">Mercedes-Benz CLS</h4>
                                                    <span class="price-tag">54980 Euro</span>
                                                    <span class="location-car">Location: Berlin, Germany</span>
                                                </div>

                                                <div class="entry-overlay">
                                                    <ul class="car-list-details item-specs">
                                                        <li>Registration 2002</li>
                                                        <li>3.0 Diesel</li>
                                                        <li>230 HP</li>
                                                        <li>Body Coupe</li>
                                                        <li>120.000 KM</li>
                                                    </ul>
                                                </div>
                                            </a>-->



                                            <div class="item">
                                                <div class="image">
                                                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                                    <a href="">
                                                        <div class="overlay">
                                                            <div class="inner">
                                                                <div class="content">
                                                                    <h4>Description</h4>
                                                                    <p><?php echo $result->description; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-specific">
                                                            <span><?php echo $result->sale_type; ?></span>
                                                        </div>                                                            
                                                        <img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $result->id . '/' . $result->image_path; ?>" height="180" width="260" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="wrapper">
                                                    <a href=""><h3><?php echo $result->manufacture . " " . $result->model; ?></h3></a>
                                                    <figure><?php echo $result->body_type; ?></figure>
                                                    <div class="price"><?php echo "Rs. " . CurrencyFormat($result->price); ?></div>
                                                    <div class="info">
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

                                        </li>
                                        <!--/Car post -->
                                    <?php } ?>
                                <?php } ?>
                            </ul>					
                        </div>

                    </div><!--.layer-two-->

                    <div class="layer-three">
                        <div class="pagination">
                            <a href="#" class="current-item"><span>1</span></a>
                            <a href="#"><span>2</span></a>
                            <a href="#"><span>3</span></a>
                            <span class="space-between">...</span>
                            <a href="#"><span>8</span></a>
                            <a href="#" class="last-button">Next</a>
                        </div>											
                    </div>
                </div>


            </div>
        </div>
    </section><!--#search-list-->

</div><!--#page-content-->

<?php

function CurrencyFormat($number) {
    $decimalplaces = 2;
    $decimalcharacter = '.';
    $thousandseparater = ',';
    return number_format($number, $decimalplaces, $decimalcharacter, $thousandseparater);
}
?>
