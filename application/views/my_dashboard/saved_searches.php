<h2>Saved Searches</h2>
<div>
    <div class="dashboard-block">
        <div class="">
            <table class="table table-bordered table-striped  dashboard-tables saved-cars-table">
                <thead>
                    <tr>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Timestamp</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($my_advertisements as $my_advertisement) {
                        ?>
                        <tr>
                            <td>
                                <a class="car-image" href="<?php echo site_url().'vehicle_advertisements/vehicle_advertisement_detail_view/'.$my_advertisement->id;?>">
                                     <img  class="lazy" src="<?php echo base_url() . 'uploads/vehicle_images/vh_' . $my_advertisement->id . '/thumbnail/' . $my_advertisement->image_path; ?>">
                                </a>
                  
                                    <h5>
                                        <a href="<?php echo site_url() ?>/vehicle_advertisements/vehicle_advertisement_detail_view/<?php echo $my_advertisement->id; ?>"><?php echo $my_advertisement->manufacture . " " . $my_advertisement->model . " " . $my_advertisement->year; ?></a>
                                    </h5>
                                    <ul class="inline list-unstyled">
                                        <li>
                                            <i class="fa fa-caret-right"></i>
                                            <?php echo $my_advertisement->body_type; ?>
                                        </li>
                                        
                                    </ul>
                       
                            </td>
                            <td>
                                <div class="price"> <?php echo "Rs. " . number_format($my_advertisement->price, 2, '.', ','); ?></div>
                            </td>

                            <td><span class="text-success"><?php echo strtotime(date('"Y-m-d H:i a',$my_advertisement->date));?></span></td>

                            <td><span class="text-success"><?php echo date('"Y-m-d H:i a',$my_advertisement->date);?></span></td>

                            <td align="center">
                                <a href="#" onclick="delete_advertisement(<?php echo $my_advertisement->search_id; ?>)" title="Remove"> <i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

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