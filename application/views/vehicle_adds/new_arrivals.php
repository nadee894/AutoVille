<section>
    <h2>New Arrivals</h2>

    <?php foreach ($latest_vehicles as $result) { ?>
        <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $result->id; ?>" class="item-horizontal small">
            <h3><?php echo $result->manufacture . " " . $result->model; ?></h3>
            <figure><?php echo $result->body_type; ?></figure>
            <div class="wrapper">
                <div class="image">
                    <img alt="" src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $result->id . '/' . $result->image_path; ?>">
                </div>
                <div class="info">
                    <div class="type">
                        <figure style="color: #36b6ff;"><strong>Rs. <?php echo number_format($result->price, 2, '.', ','); ?></strong></figure>
                    </div>
                </div>
            </div>
        </a>
    <?php } ?>
</section>