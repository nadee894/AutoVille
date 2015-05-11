<div class="sort-view layer-one">                        		
    <div class="pagination">
        <?php echo $links; ?>                            
    </div>
</div>

<div class="layer-two">

    <div id="cars-list" class="grid-view list-content">

        <?php
        $resultcount = count($results);
        if ($resultcount == 0) {
            ?>
            <h4>No Result Found</h4>
            <?php
        } else {
            if ($resultcount == 3 || $resultcount > 3) {
                $class_no = 4;
            } else if ($resultcount == 2) {
                $class_no = 5;
            } else if ($resultcount == 1) {
                $class_no = 8;
            }
            ?>
            <div class="row">
                <?php foreach ($results as $result) { ?>
                    <!--one result-->
                    <div class="col-md-<?php echo $class_no; ?> col-sm-<?php echo $class_no; ?>">
                        <div class="item" >
                            <div class="image">
                                <div class="quick-view"><i class="fa fa-plus" 
                                    <?php if (!$this->session->userdata('USER_LOGGED_IN')) { ?>
                                                               onclick="save_in_browser(<?php echo $result->id; ?>)"
                                                           <?php } else { ?>                                                               
                                                               onclick="add_to_compare(<?php echo $result->id; ?>)"
                                                           <?php } ?>
                                                           ></i><span>Park & Compare</span></div>
                                <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $result->id; ?>">
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
                                <h3><?php echo $result->manufacture . " " . $result->model; ?></h3>
                                <figure><?php echo $result->body_type; ?></figure>
                                <div class="price"><?php echo "Rs. " . CurrencyFormat($result->price); ?></div>
                                <br>

                                <?php if ($result->is_featured == '2') { ?>
                                    <div class="type label-success label">
                                        <span>Featured</span>
                                    </div>
                                <?php } ?>

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
                    </div>
                    <!--end one result-->
                <?php } ?>
            </div>
        <?php } ?>				

    </div>

</div><!--.layer-two-->

<div class="layer-three">
    <div class="pagination">
        <?php echo $links; ?>
    </div>											
</div>

<?php

function CurrencyFormat($number) {
    $decimalplaces = 2;
    $decimalcharacter = '.';
    $thousandseparater = ',';
    return number_format($number, $decimalplaces, $decimalcharacter, $thousandseparater);
}
?>

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/json2/20110223/json2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="https://raw.github.com/andris9/jStorage/master/jstorage.js"></script>


<script type="text/javascript">

                                                       function add_to_compare(id) {

                                                           $.ajax({
                                                               type: "POST",
                                                               url: site_url + '/vehicle_compare/add_vehicle_to_compare',
                                                               data: "id=" + id,
                                                               success: function (msg) {
                                                                   if (msg != 0) {
                                                                       toastr.success("Successfully parked in Garage!!", "AutoVille");
                                                                       $('#compare_vehicle_list').html(msg);
                                                                   } else {
                                                                       alert('Error loading vehicles');
                                                                   }
                                                               }
                                                           });

                                                       }

                                                       function save_in_browser(id) {
                                                           alert('not loged in');

                                                           $.ajax({
                                                               type: "POST",
                                                               url: site_url + '/vehicle_compare/load_li_tags',
                                                               data: "id=" + id,
                                                               success: function (msg) {
                                                                   if (msg != 0) {

                                                                       $.jStorage.set("vehicle" + id, msg);
                                                                       jStorege_get_values();

                                                                   } else {
                                                                       alert('Error loading vehicles');
                                                                   }
                                                               }
                                                           });

                                                       }


                                                       function jStorege_get_values() {
                                                           var jSindex = $.jStorage.index();
                                                           console.log(jSindex);
                                                           var compareBtn = '<li><a href="<?php echo site_url(); ?>/vehicle_compare/load_compare_vehicles_dashboard" class="dealer-name"><button>Compare</button></a></li>';
                                                           var li_list = "";

                                                           if (jSindex.length == 0) {
                                                               li_list = '<li>Add Vehicle</li>';
                                                           }

                                                           for (i = 0; i < jSindex.length; i++) {
                                                               li_list += $.jStorage.get(jSindex[i]);
                                                           }

                                                           if (jSindex.length >= 2) {
                                                               li_list += compareBtn;
                                                           }
                                                           $('#added_vehicle_list').html(li_list);
                                                       }

</script>


