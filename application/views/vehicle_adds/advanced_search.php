<header class="clearfix">                        
    <h2>
        <a href="#advanced-search" class="show-more pull-left" data-toggle="collapse" aria-expanded="false" aria-controls="advanced-search">Advanced Search</a>
    </h2>
    <br/>
</header>
<div class="advanced-search collapse" id="advanced-search" style="padding: 15px">    
    <h4>Features</h4>
    <form id="add_features_form" role="form" method="post">
        <div class="row col-md-12">
            <ul class="list-unstyled list-inline checkboxes clearfix">
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="price">Price</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="manufacture_id">Manufacture</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="model_id">Model</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="body_type_id">Body Type</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="year">Year</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="fuel_type_id">Fuel</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="sale_type">Sale Type</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="colour">Color</label></div></li>          
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="transmission_id">Transmission</label></div></li>              
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="kilometers">Kilometers</label></div></li>
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="location_id">Location</label></div></li>            
                <li><div class="checkbox col-md-2"><label><input type="checkbox" name="features[]" value="description">Keyword</label></div></li>
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

<div class="row col-md-12" id="added_search_features_div">
    <?php echo $this->load->view('vehicle_adds/advanced_search_fields'); ?>
</div>


<script type="text/javascript">

    function add_fields() {

        var form = $("#add_features_form");

        $.ajax({
            type: "POST",
            url: site_url + '/advanced_search/add_advanced_search_fields',
            data: form.serialize(),
            success: function(msg) {
                if (msg == '0') {
                    $('#fade_error').fadeIn();
                    $('#fade_error').fadeOut(4000);
                } else if (msg == '2') {
                    //field list empty/user not logged
                    $('#fade_error').fadeIn();
                    $('#fade_error').fadeOut(4000);
                } else {
                    $('#fade_success').fadeIn();
                    $('#fade_success').fadeOut(4000);
                    add_features_form.reset();
                    $('#added_search_features_div').html(msg);
                }
            }
        });
    }

</script>