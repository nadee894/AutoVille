
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
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <img  class="lazy" data-original="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $my_advertisement->id . '/' . $my_advertisement->image_path; ?>">
                </a>
            </div>
            <div class="wrapper">
                <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $my_advertisement->id; ?>">
                    <h3><?php echo $my_advertisement->manufacture . " " . $my_advertisement->model . " " . $my_advertisement->year; ?></h3>
                </a>
                <figure><?php echo $my_advertisement->body_type; ?></figure>
                <div class="price"><?php echo "Rs. " . number_format($my_advertisement->price, 2, '.', ','); ?></div>
                <div>
                    <a href="<?php echo site_url(); ?>/vehicle_advertisements/edit_new_advertisement/<?php echo $my_advertisement->id; ?>" title="Edit this advertisement"> <i class="fa fa-pencil"></i></a>
                    <a onclick="delete_advertisement(<?php echo $my_advertisement->id; ?>)" title="Remove this advertisement"> <i class="fa fa-trash-o"></i></a>

                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>

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
                    }else if (msg == 2) {
                        toastr.danger('Error occured. !!', "AutoVille");
                    }
                }
            });
        }
    }
</script>