<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('manufacture/manufacture_model');
        $this->load->model('manufacture/manufacture_service');
        
        $this->load->model('vehicle_model/vehicle_model_model');
        $this->load->model('vehicle_model/vehicle_model_service');
        
        $this->load->model('body_type/body_type_model');
        $this->load->model('body_type/body_type_service');
        
        $this->load->model('fuel_type/fuel_type_model');
        $this->load->model('fuel_type/fuel_type_service');
        
        $this->load->model('transmission/transmission_model');
        $this->load->model('transmission/transmission_service');
        
        $this->load->model('district/district_model');
        $this->load->model('district/district_service');
    }

    function index() {
        
        $manufacture_service = new Manufacture_service();
        $vehicle_model_service = new Vehicle_model_service();
        $body_type_service = new Body_type_service();
        $fuel_type_service = new Fuel_Type_service();
        $transmission_service = new Transmission_service();
        $district_service=new District_service();
        
        $data['manufactures']=$manufacture_service->get_all_active_manufactures();
        $data['models']=$vehicle_model_service->get_all_active_vehicle_models();
        $data['body_types'] = $body_type_service->get_all_body_types();
        $data['fuel_types'] = $fuel_type_service->get_all_fuel_types();
        $data['transmissions'] = $transmission_service->get_all_transmissions();
        $data['locations'] = $district_service->get_all_districts();

        $parials = array('content' => 'content_pages/home_content','vehicle_search_content'=>'vehicle_adds/load_vehicle_sepecs_for_search');
        $this->template->load('template/main_template',$parials, $data);
    }

    
}
