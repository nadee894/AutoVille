<h2>My Bookmarks</h2>
<div>
    <section class="block listing">
        <?php
        foreach ($bookmarked_vehicles as $vehicle) {
            ?>
            <div class="item list" id="list_<?php echo $vehicle->bookmark_id; ?>">
                <div class="image">
                    <div class="quick-view">
                        <i class="fa fa-eye"></i>
                        <span>Quick View</span>
                    </div>
                    <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $vehicle->id; ?>">
                        <div class="overlay">
                            <div class="inner">
                                <div class="content">
                                    <h4>Description</h4>
                                    <p><?php echo $vehicle->description; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item-specific">
                            <span><?php echo $vehicle->sale_type; ?></span>
                        </div>
                        <img  class="lazy" src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $vehicle->id . '/' . $vehicle->image_path; ?>">
                    </a>
                </div>
                <div class="wrapper">
                    <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $vehicle->id; ?>">
                        <h3><?php echo $vehicle->manufacture . " " . $vehicle->model; ?></h3>
                    </a>
                    <figure><?php echo $vehicle->body_type; ?></figure>
                    <div class="price"><?php echo "Rs. " . number_format($vehicle->price, 2, '.', ','); ?></div>
                    <div class="info">
                        <div class="type">                           
                            <a href="#" onclick="remove_bookmark(<?php echo $vehicle->bookmark_id; ?>)" title="Remove Bookmark"> <i class="fa fa-trash-o"></i></a>
                        </div>

                    </div>
                </div>
                <div class="description">
                    <div class="info">
                        <dl>
                            <?php if (!is_null($vehicle->fuel_type)) { ?>
                                <dt>Engine</dt>
                                <dd><?php echo $vehicle->fuel_type; ?></dd>
                            <?php } ?>

                            <?php if (!is_null($vehicle->kilometers)) { ?>
                                <dt>Kilometers</dt>
                                <dd><?php echo $vehicle->kilometers; ?></dd>
                            <?php } ?>

                            <?php if (!is_null($vehicle->year)) { ?>
                                <dt>Year</dt>
                                <dd><?php echo $vehicle->year; ?></dd>
                            <?php } ?>
                        </dl>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
    <nav>
        <ul class="pagination pull-right">
            <?php echo $links; ?>
        </ul>
    </nav>
</div>


<script type="text/javascript">

    function remove_bookmark(bookmark_id) {

        if (confirm('Remove Bookmark?')) {

            $.ajax({
                type: "POST",
                url: site_url + '/bookmarked_vehicles/remove_bookmark',
                data: "bookmark_id=" + bookmark_id,
                success: function(msg) {
                    if (msg != 0) {
                        toastr.success("Bookmark Removed Successfully!!", "AutoVille");
                        $('#list_' + bookmark_id).hide();
                    } else {
                        alert('Error!');
                    }
                }
            });
        }

    }
</script>