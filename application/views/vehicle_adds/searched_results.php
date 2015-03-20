<?php $i = 0; ?>
<div class="container">
    <header><h2>Search Result</h2></header>
    <div class="row">
        <?php foreach ($results as $result) { ?>
            <!--one result-->
            <div class="col-md-3 col-sm-3">
                <div class="item">
                    <div class="image">
                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                        <!--<a href="car-item-detail.html">-->
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
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <img src="<?php echo base_url(); ?>application_resources/assets/img/items/cars/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="wrapper">
                        <!--<a href="car-item-detail.html">--><h3><?php echo $result->manufacture . " " . $result->model; ?></h3></a>
                        <figure><?php echo $result->body_type; ?></figure>
                        <div class="price"><?php echo "Rs" . $result->price; ?></div>
                        <div class="info">
                            <dl>
                                <dt>Engine</dt>
                                <dd><?php echo $result->fuel_type; ?></dd>
                                <dt>Kilometers</dt>
                                <dd><?php echo $result->kilometers; ?></dd>
                                <dt>Year</dt>
                                <dd><?php echo $result->year; ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>                
            </div>
            <!--end one result-->
        <?php } ?>
    </div>
</div>
