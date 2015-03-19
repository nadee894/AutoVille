<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_advertisements extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('manufacture/manufacture_model');
        $this->load->model('manufacture/manufacture_service');
        
        $this->load->model('vehicle_model/vehicle_model_model');
        $this->load->model('vehicle_model/vehicle_model_service');
        
    }

    function post_new_advertisement() {
        
        $manufacture_service = new Manufacture_service();
        $vehicle_model_service = new Vehicle_model_service();

        $data['heading'] = "Sell your vehicle";
        
        $data['manufactures']=$manufacture_service->get_all_active_manufactures();
        $data['models']=$vehicle_model_service->get_all_active_vehicle_models();

        $parials = array('content' => 'vehicle_adds/add_new_advertisement');
        $this->template->load('template/main_template',$parials, $data);
    }

    
}
