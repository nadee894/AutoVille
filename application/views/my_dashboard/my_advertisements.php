<h2>My Advertisements</h2>
<div>
    <section class="block listing">
        <?php
        foreach ($my_advertisements as $my_advertisement) {
            ?>
            <div class="item list" id="list_<?php echo $my_advertisement->id; ?>">
                <div class="image">
                    <div class="quick-view">
                        <i class="fa fa-eye"></i>
                        <span>Quick View</span>
                    </div>
                    <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $my_advertisement->id; ?>">
                        <div class="overlay">
                            <div class="inner">
                                <div class="content">
                                    <h4>Description</h4>
                                    <p><?php echo $my_advertisement->description; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item-specific">
                            <span><?php echo $my_advertisement->sale_type; ?></span>
                        </div>
                        <img  class="lazy" src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $my_advertisement->id . '/' . $my_advertisement->image_path; ?>">
                    </a>
                </div>
                <div class="wrapper">
                    <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $my_advertisement->id; ?>">
                        <h3><?php echo $my_advertisement->manufacture . " " . $my_advertisement->model . " " . $my_advertisement->year; ?></h3>
                    </a>
                    <figure><?php echo $my_advertisement->body_type; ?></figure>
                    <div class="price"><?php echo "Rs. " . number_format($my_advertisement->price, 2, '.', ','); ?></div>
                    <div class="info">
                        <div class="type">
                            <a href="<?php echo site_url(); ?>/vehicle_advertisements/edit_new_advertisement/<?php echo $my_advertisement->id; ?>" title="Edit this advertisement"> <i class="fa fa-pencil"></i></a>
                            <a href="#" onclick="delete_advertisement(<?php echo $my_advertisement->id; ?>)" title="Remove this advertisement"> <i class="fa fa-trash-o"></i></a>
                        </div>

                        <?php if ($my_advertisement->is_published == '0') { ?>
                            <div class="type label-warning label">
                                <span>Processing Approval</span>
                            </div>
                        <?php } else if ($my_advertisement->is_published == '2') { ?>
                            <div class="type label-danger label">
                                <span>Rejected</span>
                            </div>
                        <?php } ?>

                        <?php if ($my_advertisement->is_featured == '0') { ?>
                            <button class="btn btn-send">Make Featured </button>
                        <?php } else if ($my_advertisement->is_featured == '1') { ?>
                            <div class="type label-warning label">
                                <span>Pending Featured Approval ..</span>
                            </div>
                        <?php } else if ($my_advertisement->is_featured == '2') { ?>
                            <div class="type label-success label">
                                <span>Featured</span>
                            </div>
                        <?php } ?>

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

<script src="<?php echo base_url(); ?>application_resources/assets/toastr-master/toastr.js"></script>
<script>
//delete advertisement
                                function delete_advertisement(id) {

                                    if (confirm('Are you sure want to remove this advertisement from your garage ?')) {

                                        $.ajax({
                                            type: "POST",
                                            url: '<?php echo site_url(); ?>/vehicle_advertisements/delete_advertisement',
                                            data: "id=" + id,
                                            success: function(msg) {
                                                if (msg == 1) {
                                                    $('#list_' + id).hide();
                                                    toastr.success("Successfully removed from your garage !!", "AutoVille");
                                                } else if (msg == 2) {
                                                    toastr.danger('Error occured. !!', "AutoVille");
                                                }
                                            }
                                        });
                                    }
                                }
</script>