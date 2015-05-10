<div id="content" class="content full dashboard-pages">
    <div class="container">
        <div class="dashboard-wrapper">
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <!--                    <div>
                                            <img class="img-responsive img-circle" src="<?php echo base_url() . 'uploads/user_avatars/avatar.png'; ?>"/>
                                            <div id="upload">
                                                <button type="button" class="btn btn-primary btn-small" id="browse"><i class="fa fa-camera"></i></button>
                    
                                            </div>
                                            <div id="sta"><span id="status" ></span></div>
                                        </div>-->

                    <!-- SIDEBAR -->
                    <div class="users-sidebar tbssticky">
                        <ul class="list-group">
                            <li class="list-group-item"> <span class="badge">5</span> <a class="dashboard_link" href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="list-group-item"> <span class="badge">5</span> <a id="searched_view" href="#"><i class="fa fa-star-o"></i> Saved Searches</a></li>
                            <li class="list-group-item"> <span class="badge">12</span> <a href="user-dashboard-saved-cars.html"><i class="fa fa-folder-o"></i> Saved Cars</a></li>
                            <li class="list-group-item"> <a href="<?php echo site_url(); ?>/vehicle_advertisements/post_new_advertisement"><i class="fa fa-plus-square-o"></i> Create new Advertisement</a></li>
                            <li class="list-group-item active"> <span class="badge">2</span> <a class="dashboard_link" href="#"><i class="fa fa-edit"></i> My Advertisements</a></li>
                            <li class="list-group-item"> <a id="profile_link" href="#" ><i class="fa fa-user"></i> My Profile</a></li>
                            <li class="list-group-item"> <a href="user-dashboard-settings.html"><i class="fa fa-cog"></i> Account Settings</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8" id="dashboard_right_content">
                    <?php echo $this->load->view('my_dashboard/my_advertisements'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    //load profile view
    $('#profile_link').on('click', function(e) {

        $.post('<?php echo site_url(); ?>/reg_user_profile/load_profile_of_reg_user', {}, function(msg)
        {
            $('#dashboard_right_content').html(msg);
        });
    });

    //load dashboard view
    $('.dashboard_link').on('click', function(e) {

        $.post('<?php echo site_url(); ?>/dashboard/load_my_advertisements', {}, function(msg)
        {
            $('#dashboard_right_content').html(msg);
        });
    });
    
    
    //load saved searches view
    $('#searched_view').on('click', function(e) {

        $.post('<?php echo site_url(); ?>/dashboard/load_saved_searches', {}, function(msg)
        {
            $('#dashboard_right_content').html(msg);
        });
    });


</script>