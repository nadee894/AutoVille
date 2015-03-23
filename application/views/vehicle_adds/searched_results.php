<div class="container">
    <header><h2>Search Result</h2></header>
    <?php
    $resultcount = count($results);
    if ($resultcount == 0) {
        ?>
        <h4>No Result Found</h4>
    <?php } else { ?>
        <div class="row">
            <?php foreach ($results as $result) { ?>
                <!--one result-->
                <div class="col-md-3 col-sm-3">
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


<?php

function CurrencyFormat($number) {
    $decimalplaces = 2;
    $decimalcharacter = '.';
    $thousandseparater = ',';
    return number_format($number, $decimalplaces, $decimalcharacter, $thousandseparater);
}
?>
