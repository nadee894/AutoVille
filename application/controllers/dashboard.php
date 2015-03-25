<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

        $this->load->model('contents/content_model');
        $this->load->model('contents/content_service');
    }

    function index() {

        $manufacture_service   = new Manufacture_service();
        $vehicle_model_service = new Vehicle_model_service();
        $body_type_service     = new Body_type_service();
        $fuel_type_service     = new Fuel_Type_service();
        $transmission_service  = new Transmission_service();
        $district_service      = new District_service();
        $content_service       = new Content_service();

        $data['manufactures']  = $manufacture_service->get_all_active_manufactures();
        $data['models']        = $vehicle_model_service->get_all_active_vehicle_models();
        $data['body_types']    = $body_type_service->get_all_active_body_types();
        $data['fuel_types']    = $fuel_type_service->get_all_active_fuel_types();
        $data['transmissions'] = $transmission_service->get_all_active_transmissions();
        $data['locations']     = $district_service->get_all_districts();
        $data['why_us']        = $content_service->get_content_by_hcodes('WHYUS');
        
        $data['logos'] = $manufacture_service->get_manufacture_logo();

        $parials = array('content' => 'my_dashboard/my_dashboard');
        $this->template->load('template/main_template', $parials, $data);
    }

}