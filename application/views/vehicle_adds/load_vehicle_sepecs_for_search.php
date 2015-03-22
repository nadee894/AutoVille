<div class="inner">
    <div class="container">
        <h1>Find Your Dream Car</h1>
        <div class="search-bar horizontal">
            <form class="main-search border-less-inputs background-color-grey-dark dark-inputs" role="form" method="post" >
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
                        <select name="model" id="model" title="Model" data-live-search="true">
                            <option value="">Select Model</option>
                            <?php foreach ($models as $model) { ?>
                                <option value="<?php echo $model->id; ?>"><?php echo $model->name; ?></option>
                            <?php } ?>
                        </select>
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
                                <input class="value-min" id="minyear" name="value-min[]" readonly>
                                <input class="value-max" id="maxyear" name="value-max[]" readonly>
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
                            <option value="0">New</option>
                            <option value="1">Used</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
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
                        <input type="text" class="form-control" id="kilometers" placeholder="Enter Keyword">
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
                        <input type="text" class="form-control" id="keyword" placeholder="Enter Keyword">
                    </div>  
                    <!-- /.form-group -->
                    <div class="form-group">
                        <button type="button" class="btn btn-default" onclick="search_vehicle()"><i class="fa fa-search"></i></button>
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

    function search_vehicle() {

        var manufacture = $('#manufacturer').val();
        var model = $('#model').val();
        var body_type = $('#body_type').val();
        var maxyear = $('#maxyear').val();
        var minyear = $('#minyear').val();
        var fuel_type = $('#fuel_type').val();
        var sale_type = $('#sale_type option:selected').text();
        if (sale_type == "Select Sale Type") {
            sale_type = '';
        }
        var color = $('#color option:selected').text();
        if (color == "Select Color") {
            color = '';
        }
        var maxprice = $('#maxprice').val();
        var minprice = $('#minprice').val();
        var transmission = $('#transmission').val();
        var kilometers = $('#kilometers').val();
        var location = $('#location option:selected').text();
        if (location == "All") {
            location = '';
        }
        var keyword = $('#keyword').val();

        $.ajax({
            type: "POST",
            url: site_url + '/vehicle_search/search_advertisements',
            data: "manufacture=" + manufacture + "&model=" + model + "&body_type=" + body_type + "&maxyear=" + maxyear +
                    "&minyear=" + minyear + "&fuel_type=" + fuel_type + "&sale_type=" + sale_type + "&color=" + color +
                    "&maxprice=" + maxprice + "&minprice=" + minprice + "&transmission=" + transmission +
                    "&kilometers=" + kilometers + "&location=" + location + "&keyword=" + keyword,
            success: function (msg) {
                $('#search_result').html(msg);
            }
        });
    }
</script>