<div id="content" class="content full dashboard-pages">
    <div class="container">
        <div class="dashboard-wrapper">
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-4">
<!--                    <div>
                        <img class="img-responsive img-circle" src="<?php echo base_url() . 'uploads/user_avatars/avatar.png';?>"/>
                        <div id="upload">
                            <button type="button" class="btn btn-primary btn-small" id="browse"><i class="fa fa-camera"></i></button>

                        </div>
                        <div id="sta"><span id="status" ></span></div>
                    </div>-->

                    <!-- SIDEBAR -->
                    <div class="users-sidebar tbssticky">
                        <ul class="list-group">
                            <li class="list-group-item"> <span class="badge">5</span> <a href="user-dashboard.html"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="list-group-item"> <span class="badge">5</span> <a href="user-dashboard-saved-searches.html"><i class="fa fa-folder-o"></i> Saved Searches</a></li>
                            <li class="list-group-item"> <span class="badge">12</span> <a href="user-dashboard-saved-cars.html"><i class="fa fa-star-o"></i> Saved Cars</a></li>
                            <li class="list-group-item"> <a href="<?php echo site_url(); ?>/vehicle_advertisements/post_new_advertisement"><i class="fa fa-plus-square-o"></i> Create new Advertisement</a></li>
                            <li class="list-group-item active"> <span class="badge">2</span> <a href="user-dashboard-manage-ads.html"><i class="fa fa-edit"></i> Manage Ads</a></li>
                            <li class="list-group-item"> <a href="<?php echo site_url(); ?>/reg_user_profile/load_profile_of_reg_user"><i class="fa fa-user"></i> My Profile</a></li>
                            <li class="list-group-item"> <a href="user-dashboard-settings.html"><i class="fa fa-cog"></i> Account Settings</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <?php echo $this->load->view('my_dashboard/my_advertisements'); ?>
                </div>
            </div>
        </div>
    </div>
</div>