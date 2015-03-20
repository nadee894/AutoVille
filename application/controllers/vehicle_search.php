<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_search extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');
    }

    function search_advertisements() {

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
        echo $this->load->view('vehicle_adds/searched_results', $data);

    }

}
