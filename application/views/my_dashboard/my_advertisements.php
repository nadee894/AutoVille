
<h2>My Advertisements</h2>
<figure class="filter clearfix">
    <div class="buttons pull-left">
        <a class="btn icon" href="listing-grid.html">
            <i class="fa fa-th"></i>
            Grid
        </a>
        <a class="btn icon active" href="listing-list.html">
            <i class="fa fa-th-list"></i>
            List
        </a>
    </div>
</figure>
<section class="block listing">
    <?php
    foreach ($my_advertisements as $my_advertisement) {
        ?>
        <div class="item list">
            <div class="image">
                <div class="quick-view">
                    <i class="fa fa-eye"></i>
                    <span>Quick View</span>
                </div>
                <a href="item-detail.html">
                    <div class="overlay">
                        <div class="inner">
                            <div class="content">
                                <h4>Description</h4>
                                <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-specific">
                        <span title="Bedrooms">
                            <img alt="" src="assets/img/bedrooms.png">
                            2
                        </span>
                        <span title="Bathrooms">
                            <img alt="" src="assets/img/bathrooms.png">
                            2
                        </span>
                        <span title="Area">
                            <img alt="" src="assets/img/area.png">
                            240m
                            <sup>2</sup>
                        </span>
                        <span title="Garages">
                            <img alt="" src="assets/img/garages.png">
                            1
                        </span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <img alt="" src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $my_advertisement->id . '/thumbnail/' . $my_advertisement->image_path; ?>">
                </a>
            </div>
            <div class="wrapper">
                <a href="item-detail.html">
                    <h3>Cash Cow Restaurante</h3>
                </a>
                <figure>63 Birch Street</figure>
                <div class="info">
                    <div class="type">
                        <i>
                            <img alt="" src="assets/icons/restaurants-bars/restaurants/restaurant.png">
                        </i>
                        <span>Restaurant</span>
                    </div>
                    <div class="rating" data-rating="4">
                        <span class="stars">
                            <i class="fa fa-star s1 active" data-score="1"></i>
                            <i class="fa fa-star s2 active" data-score="2"></i>
                            <i class="fa fa-star s3 active" data-score="3"></i>
                            <i class="fa fa-star s4 active" data-score="4"></i>
                            <i class="fa fa-star s5" data-score="5"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>