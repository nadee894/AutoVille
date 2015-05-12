<div class="container">
    <header><h2>Price Drop</h2></header>
    <div class="row">
        <?php foreach ($price_drop_vehicles as $result) { ?>
        <div class="col-md-3 col-sm-3">
            <div class="item">
                <div class="image">
                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                    <a href="car-item-detail.html">
                        <div class="overlay">
                            <div class="inner">
                                <div class="content">
                                    <h4>Description</h4>
                                    <p><?php echo $result->description; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item-specific">
                            <span>Used Car</span>
                        </div>
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $result->id . '/' . $result->image_path; ?>" height="180" width="260" alt=""/>
                    </a>
                </div>
                <div class="wrapper">
                    <a href=""><h3><?php echo $result->manufacture . " " . $result->model; ?></h3></a>
                    <figure><?php echo $result->body_type; ?></figure>
                    <!--<div class="price">$12.000</div>-->
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
        <?php } ?>
    </div>        
</div>

