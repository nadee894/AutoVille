<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Website_advertisements extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('website_advertisements/website_advertisements_model');
        $this->load->model('website_advertisements/website_advertisements_service');
        
        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');
    }
    
    function post_new_commercial_advertisement(){
        $vehicle_advertisement_service = new Vehicle_advertisments_service();
        
        $data['latest_vehicles'] = $vehicle_advertisement_service->get_new_arrival(2);
        $data['heading']       = "Promote your business";
        $parials = array('content'      => 'website_advertisements/add_new_website_advertisement', 'new_arrivals' => 'vehicle_adds/new_arrivals');
        $this->template->load('template/main_template', $parials, $data);
    }
    
}

