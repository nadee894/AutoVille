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

        //$manufacture = trim($this->input->post('manufacture_id', TRUE));

        $vehicle_advertisments_service->search_vehicle($manufacture, $model, $body_type, $maxyear, $minyear, $fuel_type, $sale_type, $color, $maxprice, $minprice, $transmission, $kilometers, $location, $keyword);
    }

}
