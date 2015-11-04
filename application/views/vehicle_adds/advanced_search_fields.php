<?php if (!empty($fields)) { ?>
    <form id="advanced_search_result_form" role="form" method="post" action="">
        <div class="row col-lg-12">
            <?php
            foreach ($fields as $field) {

                if ($field->field_name == 'manufacture_id') {
                    ?>    
                    <div class="form-group col-lg-2">
                        <label for="manufacturer">Manufacturer</label>
                        <select name="manufacturer" id="manufacturer" title="Manufacturer" data-live-search="true">
                            <option value="">Select Manufacturer</option>
                            <?php foreach ($manufactures as $manufacture) { ?>
                                <option value="<?php echo $manufacture->id; ?>"><?php echo $manufacture->name; ?></option>
                            <?php } ?>
                        </select>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'model_id') {
                    ?>
                    <div class="form-group col-lg-2">                        
                        <label for="model">Model</label>
                        <div id="model_wrapper">
                            <select name="model" id="model" data-live-search="true">
                                <option value="">Select Model</option>
                                <?php foreach ($models as $model) { ?>
                                    <option value="<?php echo $model->id; ?>"><?php echo $model->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>        
                    <?php
                }
                if ($field->field_name == 'body_type_id') {
                    ?>
                    <div class="form-group col-lg-2">
                        <label for="body_type">Body Type</label>
                        <select name="body_type" id="body_type" title="Body Type" data-live-search="true">
                            <option value="">Select Body Type</option>
                            <?php foreach ($body_types as $body_type) { ?>
                                <option value="<?php echo $body_type->id; ?>"><?php echo $body_type->name; ?></option>
                            <?php } ?>
                        </select>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>        
                    <?php
                }
                if ($field->field_name == 'year') {
                    ?>
                    <div class="form-group col-lg-2">
                        <div style="height: 60px">
                            <label for="year-slider">Year</label>                          
                            <div class="ui-slider" id="year-slider" data-value-min="1920" data-value-max="2015" data-step="1">
                                <div class="values clearfix">
                                    <input class="value-min" id="minyear" name="minyear" readonly>
                                    <input class="value-max" id="maxyear" name="maxyear" readonly>
                                </div>              
                            </div> 
                        </div>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>                    
                    <?php
                }
                if ($field->field_name == 'fuel_type_id') {
                    ?>
                    <div class="form-group col-lg-2">
                        <label for="fuel">Fuel</label>
                        <select name="fuel_type" id="fuel_type" title="Fuel" data-live-search="true">
                            <option value="">Select Fuel Type</option>
                            <?php foreach ($fuel_types as $fuel_type) { ?>
                                <option value="<?php echo $fuel_type->id; ?>"><?php echo $fuel_type->name; ?></option>
                            <?php } ?>
                        </select>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'sale_type') {
                    ?>
                    <div class="form-group col-lg-2">
                        <label for="sale_type">Sale Type</label>
                        <select name="sale_type" id="sale_type" title="Sale Type" data-live-search="true">
                            <option value="">Select Sale Type</option>
                            <option value="New">New</option>
                            <option value="Used">Used</option>
                            <option value="Reconditioned">Reconditioned</option>
                        </select>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'colour') {
                    ?>
                    <div class="form-group col-lg-2">
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
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'price') {
                    ?>
                    <div class="form-group col-lg-2">
                        <div style="height: 60px">
                            <label>Price Rs.</label>                     
                            <div class="ui-slider" id="price-slider" data-value-min="100000" data-value-max="100000000" data-step="10">
                                <div class="values clearfix">
                                    <input class="value-min" id="minprice" name="minprice" readonly>
                                    <input class="value-max" id="maxprice" name="maxprice" readonly>
                                </div>
                                <div class="element"></div>
                            </div>
                        </div>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'transmission_id') {
                    ?>       
                    <div class="form-group col-lg-2">
                        <label for="transmission">Transmission</label>
                        <select name="transmission" id="transmission" title="Transmission" data-live-search="true">
                            <option value="">Select Transmission</option>
                            <?php foreach ($transmissions as $transmission) { ?>
                                <option value="<?php echo $transmission->id; ?>"><?php echo $transmission->name; ?></option>
                            <?php } ?>
                        </select>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'kilometers') {
                    ?>
                    <div class="form-group col-lg-2">
                        <label for="kilometers">Kilometers</label>                                                
                        <input type="text" class="form-control" id="kilometers" name="kilometers" placeholder="Enter Kilometers">
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'location_id') {
                    ?>
                    <div class="form-group col-lg-2">
                        <label for="location">Location</label>
                        <select name="location" id="location" title="Location" data-live-search="true">                            
                            <?php foreach ($locations as $location) { ?>
                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                            <?php } ?>
                        </select>
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>
                    <?php
                }
                if ($field->field_name == 'description') {
                    ?>
                    <div class="form-group col-lg-2">
                        <label for="keyword">Keyword</label>
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter Keyword">
                        <a href="#" onclick="delete_field('<?php echo $field->advanced_search_content_id; ?>')" title="Remove Field">
                            <i class="fa fa-trash-o" style="color: red;"></i>
                        </a>
                    </div>  
                <?php } ?>
            <?php } ?>
        </div> 
        <div class=" row form-group col-lg-1 pull-right">                                          
            <button type="button" class="btn btn-default"  onclick="custom_search_vehicle()"><i class="fa fa-search"></i> Search</button>
        </div>
        <div class="col-lg-12 row clearfix">
            <div id="delete_fade_success" style="display: none">
                <div class="alert alert-success">
                    <i class="fa fa-check-circle fa-fw fa-lg"></i> 
                    Saved Successfully !!
                </div>
            </div>
            <div id="delete_fade_error" style="display: none">
                <div class="alert alert-danger">
                    <i class="fa fa-times-circle fa-fw fa-lg"></i> 
                    Error!!!
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </form>
<?php } ?>

<script type="text/javascript">

    function custom_search_vehicle() {
        $('#advanced_search_result_content').html('');

        var manufacturer = $('#manufacturer').val();
        var model = $('#model').val();
        var body_type = $('#body_type').val();
        var maxyear = $('#maxyear').val();
        var minyear = $('#minyear').val();
        var fuel_type = $('#fuel_type').val();
        var sale_type = $('#sale_type').val();
        var color = $('#color').val();
        var maxprice = $('#maxprice').val();
        var minprice = $('#minprice').val();
        var transmission = $('#transmission').val();
        var kilometers = $('#kilometers').val();
        var location = $('#location').val();
        var keyword = $('#keyword').val();

        $.ajax({
            type: "POST",
            url: site_url + '/advanced_search/get_advanced_search_results',
            data: "manufacturer=" + manufacturer + "&model=" + model + "&body_type=" + body_type + "&maxyear=" + maxyear +
                    "&minyear=" + minyear + "&fuel_type=" + fuel_type + "&sale_type=" + sale_type + "&color=" + color +
                    "&maxprice=" + maxprice + "&minprice=" + minprice + "&transmission=" + transmission +
                    "&kilometers=" + kilometers + "&location=" + location + "&keyword=" + keyword,
            success: function(msg) {
                $('#advanced_search_result_content').html(msg);
            }
        });
    }


    function delete_field(field_id) {

        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                type: "POST",
                url: site_url + '/advanced_search/delete_user_field',
                data: 'field_id=' + field_id,
                success: function(msg) {
                    if (msg == '1') {
                        $('#delete_fade_success').fadeIn();
                        $('#delete_fade_success').fadeOut(4000);
                        window.setTimeout(function() {
                            location.reload()
                        }, 1000);
                    } else {
                        $('#delete_fade_error').fadeIn();
                        $('#delete_fade_error').fadeOut(4000);
                    }
                }
            });
        }
    }


</script>