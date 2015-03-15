
<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a  href="<?php echo site_url(); ?>/dashboard" id="dashboard_menu">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
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

   

</ul>