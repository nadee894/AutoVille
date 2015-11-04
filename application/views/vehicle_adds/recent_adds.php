<?php
$resultcount = count($vehicle_results);
if (!$resultcount == 0) {
    ?>
    <section id="recent" class="block">
        <div class="container">

            <header><h2>Recent</h2></header>
            <div class="row">

                <!--Recent Vehicles-->
                <?php foreach ($vehicle_results as $result) { ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="item list">
                            <div class="image">
                                <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $result->id; ?>">
                                    <div class="overlay">
                                        <div class="inner">
                                            <div class="content">
                                                <h4>Description</h4>
                                                <p><?php echo $result->description; ?></p>
                                            </div>
                                        </div>
                                    </div>                                
                                    <img src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $result->id . '/' . $result->image_path; ?>" height="180" width="260" alt=""/>
                                </a>
                            </div>
                            <div class="wrapper">
                                <a href=""><h3><?php echo $result->manufacture . " " . $result->model; ?></h3></a>
                                <figure><?php echo $result->body_type; ?></figure>
                                <div class="price"><?php echo "Rs. " . number_format($result->price, 2, '.', ','); ?></div>
                            </div>
                            <div class="description">
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
                <!-- /.item-->                                                                                    
            </div>
            <!-- /.col-md-9-->
            <!--end Recent Vehicles-->
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </section>
<?php } ?>