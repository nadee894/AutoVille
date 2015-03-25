<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_search extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');

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

    function search_advertisements() {
        
        $manufacture_service = new Manufacture_service();
        $vehicle_model_service = new Vehicle_model_service();
        $body_type_service = new Body_type_service();
        $fuel_type_service = new Fuel_Type_service();
        $transmission_service = new Transmission_service();
        $district_service = new District_service();
        $content_service = new Content_service();

        $data['manufactures'] = $manufacture_service->get_all_active_manufactures();
        $data['models'] = $vehicle_model_service->get_all_active_vehicle_models();
        $data['body_types'] = $body_type_service->get_all_active_body_types();
        $data['fuel_types'] = $fuel_type_service->get_all_active_fuel_types();
        $data['transmissions'] = $transmission_service->get_all_active_transmissions();
        $data['locations'] = $district_service->get_all_districts();
                               

        $vehicle_advertisments_model = new Vehicle_advertisments_model();
        $vehicle_advertisments_service = new Vehicle_advertisments_service();

        $manufacture = trim($this->input->post('manufacture', TRUE));
        $model = trim($this->input->post('model', TRUE));
        $body_type = trim($this->input->post('body_type', TRUE));
        $maxyear = trim($this->input->post('maxyear', TRUE));
        $minyear = trim($this->input->post('minyear', TRUE));
        $fuel_type = trim($this->input->post('fuel_type', TRUE));
        $sale_type = trim($this->input->post('sale_type', TRUE));
        $color = trim($this->input->post('color', TRUE));
        $maxprice = trim($this->input->post('maxprice', TRUE));
        $minprice = trim($this->input->post('minprice', TRUE));
        $transmission = trim($this->input->post('transmission', TRUE));
        $kilometers = trim($this->input->post('kilometers', TRUE));
        $location = trim($this->input->post('location', TRUE));
        $keyword = trim($this->input->post('keyword', TRUE));

        $data['results'] = $vehicle_advertisments_service->search_vehicle($manufacture, $model, $body_type, $maxyear, $minyear, $fuel_type, $sale_type, $color, $maxprice, $minprice, $transmission, $kilometers, $location, $keyword);
        //echo $this->load->view('vehicle_adds/searched_results', $data);

        return $data;
    }
    
    function load_view($data){
        $parials = array('content' => 'vehicle_adds/search_advertisement');
        $this->template->load('template/main_template', $parials, $data);
    }

}
