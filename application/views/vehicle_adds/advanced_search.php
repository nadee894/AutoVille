<header class="clearfix"  style="padding: 15px;">                        
    <h2>
        <a href="#advanced-search" class="show-more pull-left" data-toggle="collapse" aria-expanded="false" aria-controls="advanced-search">Custom Search</a>
    </h2>
    <br/>
</header>
<div class="advanced-search collapse" id="advanced-search" style="padding: 15px">    
    <h4>Add Features</h4>
    <form id="add_features_form" role="form" method="post">
        <div class="row col-md-12">
            <ul class="list-unstyled list-inline checkboxes clearfix">
                <?php
                $is_field_added = FALSE;

                if (!in_array('price', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="price">Price</label></div></li>   
                    <?php
                }
                if (!in_array('manufacture_id', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" id="manufacture_id" value="manufacture_id">Manufacture</label></div></li>
                    <?php
                }
                if (!in_array('model_id', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" id="model_id" value="model_id">Model</label></div></li>
                    <?php
                }
                if (!in_array('body_type_id', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="body_type_id">Body Type</label></div></li>
                    <?php
                }
                if (!in_array('year', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="year">Year</label></div></li>
                    <?php
                }
                if (!in_array('fuel_type_id', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="fuel_type_id">Fuel</label></div></li>
                    <?php
                }
                if (!in_array('sale_type', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="sale_type">Sale Type</label></div></li>
                    <?php
                }
                if (!in_array('colour', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="colour">Color</label></div></li>          
                    <?php
                }
                if (!in_array('transmission_id', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="transmission_id">Transmission</label></div></li>
                    <?php
                }
                if (!in_array('kilometers', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="kilometers">Kilometers</label></div></li>
                    <?php
                }
                if (!in_array('location_id', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="location_id">Location</label></div></li>
                    <?php
                }
                if (!in_array('description', $fields_arr)) {
                    $is_field_added = TRUE;
                    ?>
                    <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="description">Keyword</label></div></li>
                    <?php
                }


                if ($is_field_added == FALSE) {
                    ?>
                    <h3>All Fields have been Added! </h3>
                    <?php
                }
                ?>                                                                                                                                                                                          

            </ul>
        </div>        

        <div class="row col-md-12">     
            <button type="button" class="btn btn-default pull-right" onclick="add_fields()" title="Save Feature(s)">Save</button>            
        </div>

        <div class="col-lg-12 row clearfix">
            <div id="fade_success" style="display: none">
                <div class="alert alert-success">
                    <i class="fa fa-check-circle fa-fw fa-lg"></i> 
                    Saved Successfully !!
                </div>
            </div>
            <div id="fade_error" style="display: none">
                <div class="alert alert-danger">
                    <i class="fa fa-times-circle fa-fw fa-lg"></i> 
                    Error!!!
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </form>
    <br/>
</div>

<div class="row col-lg-12" id="added_search_features_div">
    <?php echo $this->load->view('vehicle_adds/advanced_search_fields'); ?>
</div>

<div class="row col-lg-12" id="advanced_search_result_content"  style="padding: 30px;">

</div>

<script type="text/javascript">

    function add_fields() {

        if ($('#model_id').is(':checked')) {
            $('#manufacture_id').prop("checked", true);
        }

        var form = $("#add_features_form");

        $.ajax({
            type: "POST",
            url: site_url + '/advanced_search/add_advanced_search_fields',
            data: form.serialize(),
            success: function (msg) {

                if (msg == '1') {
                    $('#fade_success').fadeIn();
                    $('#fade_success').fadeOut(4000);
                    add_features_form.reset();

                    window.setTimeout(function () {
                        location.reload()
                    }, 1000);

                } else if (msg == '0') {
                    $('#fade_error').fadeIn();
                    $('#fade_error').fadeOut(4000);
                } else if (msg == '2') {
                    //field list empty/user not logged
                    $('#fade_error').fadeIn();
                    $('#fade_error').fadeOut(4000);
                }
            }
        });
    }

    //Manufacturer on change 
    $('#manufacturer').on('change', function (e) {

        var manufacturer = $(this).val();

        $.post(site_url + '/vehicle_advertisements/get_models_for_manufacturer', {manufacturer: manufacturer}, function (msg)
        {
            $('#model_wrapper').html(msg);
        });
    });


</script>