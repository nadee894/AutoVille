<div class="inner">
    <div class="container">
        <h1>Find Your Dream Vehicle</h1>
        <div class="search-bar horizontal">
            <form class="main-search border-less-inputs background-color-grey-dark dark-inputs" role="form" method="post" action="<?php echo site_url(); ?>/vehicle_search/search_advertisements">
                <div class="input-row">
                    <div class="form-group">
                        <label for="manufacturer">Manufacturer</label>
                        <select name="manufacturer" id="manufacturer" title="Manufacturer" data-live-search="true">
                            <option value="">Select Manufacturer</option>
                            <?php foreach ($manufactures as $manufacture) { ?>
                                <option value="<?php echo $manufacture->id; ?>"><?php echo $manufacture->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">                        
                        <label for="model">Model</label>
                        <div id="model_wrapper">
                            <select name="model" id="model" data-live-search="true" disabled="true">
                                <option value="">Select Model</option>

                            </select>
                        </div>
                    </div>        
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="body_type">Body Type</label>
                        <select name="body_type" id="body_type" title="Body Type" data-live-search="true">
                            <option value="">Select Body Type</option>
                            <?php foreach ($body_types as $body_type) { ?>
                                <option value="<?php echo $body_type->id; ?>"><?php echo $body_type->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>        
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Year</label>
                        <div class="ui-slider" id="year-slider" data-value-min="1920" data-value-max="2015" data-step="1">
                            <div class="values clearfix">
                                <input class="value-min" id="minyear" name="minyear" readonly>
                                <input class="value-max" id="maxyear" name="maxyear" readonly>
                            </div>
                            <div class="element"></div>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <div class="input-row">                    
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="fuel">Fuel</label>
                        <select name="fuel_type" id="fuel_type" title="Fuel" data-live-search="true">
                            <option value="">Select Fuel Type</option>
                            <?php foreach ($fuel_types as $fuel_type) { ?>
                                <option value="<?php echo $fuel_type->id; ?>"><?php echo $fuel_type->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="sale_type">Sale Type</label>
                        <select name="sale_type" id="sale_type" title="Sale Type" data-live-search="true">
                            <option value="">Select Sale Type</option>
                            <option value="New">New</option>
                            <option value="Used">Used</option>
                            <option value="Reconditioned">Reconditioned</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="color">Color</label>
                        <select name="color" id="color" title="Color" data-live-search="true">
                            <option value="">Select Color</option>
                            <option value="Blue">Blue</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Purple">Purple</option>
                            <option value="Pink">Pink</option>
                            <option value="Red">Red</option>
                            <option value="Green">Green</option>
                            <option value="White">White</option>
                            <option value="Black">Black</option>
                            <option value="Silver">Silver</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price Rs.</label>
                        <div class="ui-slider" id="price-slider" data-value-min="100000" data-value-max="100000000"  data-step="10"><!--data-currency="$" data-currency-placement="before" data-value-type="price"-->
                            <div class="values clearfix">
                                <input class="value-min" id="minprice" name="minprice" readonly>
                                <input class="value-max" id="maxprice" name="maxprice" readonly>
                            </div>
                            <div class="element"></div>
                        </div>
                    </div>

                </div>
                <div class="input-row">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <select name="transmission" id="transmission" title="Transmission" data-live-search="true">
                            <option value="">Select Transmission</option>
                            <?php foreach ($transmissions as $transmission) { ?>
                                <option value="<?php echo $transmission->id; ?>"><?php echo $transmission->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="kilometers">Kilometers</label>                                                
                        <input type="text" class="form-control" id="kilometers" name="kilometers" placeholder="Enter Kilometers">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="location">Location</label>
                        <select name="location" id="location" title="Location" data-live-search="true">                            
                            <?php foreach ($locations as $location) { ?>
                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="keyword">Keyword</label>
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter Keyword">
                    </div>  
                    <!-- /.form-group -->
                    <div class="form-group">                   
                        <!--<a href="<?php echo site_url(); ?>/vehicle_search/search_advertisements" onclick="javascript:search_vehicle()" class="submit-item">
                            <button type="button" class="btn btn-default" ><i class="fa fa-search"></i></button>
                        </a>-->                        
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    <!-- /.form-group -->
                </div>
            </form>
            <!-- /.main-search -->
        </div>
        <!-- /.search-bar -->
    </div>
</div>
<div class="background">
    <img src="<?php echo base_url(); ?>application_resources/assets/img/cars-bg.jpg" alt="">
</div>


<script type="text/javascript">


    //Manufacturer on change 
    $('#manufacturer').on('change', function (e) {

        var manufacturer = $(this).val();

        $.post(site_url + '/vehicle_advertisements/get_models_for_manufacturer', {manufacturer: manufacturer}, function (msg)
        {
            $('#model_wrapper').html(msg);
        });
    });
</script>    