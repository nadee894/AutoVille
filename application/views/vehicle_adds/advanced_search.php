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
    </form>
    <br/>
</div>

<div class="row col-md-12" id="added_search_features_div">

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
                    //error
                } else if (msg == '2') {
                    //field list empty/user not logged
                } else {
                    $('added_search_features_div').html(msg);
                }
            }
        });
    }

</script>