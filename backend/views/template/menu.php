
<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a  href="<?php echo site_url(); ?>/dashboard" id="dashboard_menu">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" id="user_menu">
            <i class="fa fa-users"></i>
            <span>Users</span>
        </a> 
        <ul class="sub">
            <li><a  href="<?php echo site_url(); ?>/users/manage_admins">Manage Administrators</a></li>
            <li><a  href="<?php echo site_url(); ?>/reg_users/manage_registered_users">Manage Registered Users</a></li>
            <li><a  href="<?php echo site_url(); ?>/users/manage_admin_profile_view">Manage Admin Profiles</a></li>
        </ul>
    </li>
 

    <li class="sub-menu">
        <a href="javascript:;" id="advertisements_menu">
            <i class="fa fa-film"></i>
            <span>Advertisements</span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo site_url(); ?>/vehicle_advertisements/manage_advertisements">Vehicle Advertisements</a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" id="pages_menu">
            <i class="fa fa-folder-open"></i>
            <span>Manage Pages</span>
        </a> 
        <ul class="sub">
            <li><a href="<?php echo site_url(); ?>/contents/load_contents_by_hcode/ABOUTUS">About Us</a></li>
            <li><a href="<?php echo site_url(); ?>/contents/load_contents_by_hcode/DESTINATIONS">Destinations</a></li>
            <li><a href="<?php echo site_url(); ?>/contents/load_contents_by_hcode/RIGHTSIDESNIPPET">Rightside Snippet</a></li>
            <li><a href="<?php echo site_url(); ?>/contents/load_contents_by_hcode/WELCOMEHOMEPAGE">Welcomer Message Home Page</a></li>
            <li><a href="<?php echo site_url(); ?>/contents/load_contents_by_hcode/WELCOMEINNERPAGE">Welcomer Message Read Mor</a></li>
            <li><a href="<?php echo site_url(); ?>/contents/load_contents_by_hcode/FOOTERROGHT">Footer Right</a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" id="comments_menu">
            <i class="fa fa-comment-o"></i>
            <span>Reviews</span>
        </a> 
        <ul class="sub">
            <li><a  href="<?php echo site_url(); ?>/comments/manage_comments">Website Reviews</a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;" id="vehicle_spec_menu">
            <i class="fa fa-cogs"></i>
            <span>Vehicle Specifications</span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo site_url(); ?>/transmission/manage_transmissions">Manage Transmission</a></li>
            <li><a  href="<?php echo site_url(); ?>/vehicle_model/manage_models">Manage Vehicle Models</a></li>
            <li><a  href="<?php echo site_url(); ?>/manufacture/manage_manufactures">Manage Manufactures</a></li>
            <li><a  href="<?php echo site_url(); ?>/body_type/manage_body_types">Manage Vehicle Body Types</a></li>
            <li><a  href="<?php echo site_url(); ?>/fuel_type/manage_fuel_types">Manage Fuel Types</a></li>
            <li><a  href="<?php echo site_url(); ?>/equipment/manage_equipment">Manage Equipments</a></li>
        </ul>
        <ul class="sub">
            <li><a  href="<?php echo site_url(); ?>/users/manage_registered_users">Manage Registered Users</a></li>
        </ul>
    </li>




</ul>