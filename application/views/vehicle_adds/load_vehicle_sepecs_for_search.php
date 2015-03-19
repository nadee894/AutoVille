<div class="inner">
    <div class="container">
        <h1>Find Your Dream Car</h1>
        <div class="search-bar horizontal">
            <form class="main-search border-less-inputs background-color-grey-dark dark-inputs" role="form" method="post" action="index-cars.html-.htm">
                <div class="input-row">
                    <div class="form-group">
                        <label for="manufacturer">Manufacturer</label>
                        <select name="manufacturer" id="manufacturer" title="Manufacturer" data-live-search="true">
                            <?php foreach ($manufactures as $manufacture) { ?>
                                <option value="<?php echo $manufacture->id; ?>"><?php echo $manufacture->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="model">Model</label>
                        <select name="model" id="model" title="Model" data-live-search="true">
                            <?php foreach ($models as $model) { ?>
                                <option value="<?php echo $model->id; ?>"><?php echo $model->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>        
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="body_type">Body Type</label>
                        <select name="body_type" id="body_type" title="Body Type" data-live-search="true">
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
                                <input class="value-min" name="value-min[]" readonly>
                                <input class="value-max" name="value-max[]" readonly>
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
                        <select name="fuel_type" id="fuel_type" title="Fuel">
                            <?php foreach ($fuel_types as $fuel_type) { ?>
                                <option value="<?php echo $fuel_type->id; ?>"><?php echo $fuel_type->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="sale_type">Sale Type</label>
                        <select name="sale_type" id="sale_type" title="Sale Type">
                            <option value="1">New</option>
                            <option value="2">Used</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="color">Color</label>
                        <select name="color" id="color" title="Color">
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
                    <div class="form-group">
                        <label>Price</label>
                        <div class="ui-slider" id="price-slider" data-value-min="100" data-value-max="40000" data-value-type="price" data-currency="$" data-currency-placement="before" data-step="10">
                            <div class="values clearfix">
                                <input class="value-min" name="value-min[]" readonly>
                                <input class="value-max" name="value-max[]" readonly>
                            </div>
                            <div class="element"></div>
                        </div>
                    </div>

                </div>
                <div class="input-row">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <select name="transmission" id="transmission" title="Transmission">
                            <?php foreach ($transmissions as $transmission) { ?>
                                <option value="<?php echo $transmission->id; ?>"><?php echo $transmission->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="kilometers">Kilometers</label>
                        <select name="kilometers" id="kilometers" title="Kilometers">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="location">Location</label>
                        <select name="location" id="location" title="Location">
                            <?php foreach ($locations as $location) { ?>
                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="keyword">Keyword</label>
                        <input type="text" class="form-control" id="keyword" placeholder="Enter Keyword">
                    </div>  
                    <!-- /.form-group -->
                    <div class="form-group">
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

</script>