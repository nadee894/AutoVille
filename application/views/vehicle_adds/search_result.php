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
                                <div class="quick-view"><i class="fa fa-plus"></i><span>Park & Compare</span></div>
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
                                <!--<a href="car-item-detail.html">--><h3><?php echo $result->manufacture . " " . $result->model; ?></h3></a>
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


