<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_reviews extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');

        $this->load->model('vehicle_reviews/vehicle_reviews_model');
        $this->load->model('vehicle_reviews/vehicle_reviews_service');
    }

    /*
     * function to load all vehicle reviews
     */

    function load_all_vehicle_reviews() {
        $vehicle_reviews_service = new Vehicle_reviews_service();
        $data['vehicle_reviews'] = $vehicle_reviews_service->get_all_vehicle_reviews();

        $parials = array('content' => 'vehicle_adds/vehicle_detail_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_vehicle_reviews() {
        $vehicle_reviews_service = new Vehicle_reviews_service();
        $vehicle_reviews_model   = new Vehicle_reviews_model();

        $vehicle_reviews_model->set_title($this->input->post('title', TRUE));
        $vehicle_reviews_model->set_description($this->input->post('description', TRUE));
        $vehicle_reviews_model->set_vehicle_id($this->input->post('vehicle_id', TRUE));
        $vehicle_reviews_model->set_added_date(date("Y-m-d H:i:s"));
        $vehicle_reviews_model->set_updated_by(1);
        $vehicle_reviews_model->set_is_published('1');
        $vehicle_reviews_model->set_is_deleted('0');

        echo $vehicle_reviews_service->add_vehicle_reviews($vehicle_reviews_model);
    }

    function delete_manufactures() {
        $vehicle_reviews_service = new Vehicle_reviews_service();
        echo $vehicle_reviews_service->delete_vehicle_reviews(trim($this->input->post('id', TRUE)));
    }

//    function edit_manufacture() {
//        $vehicle_reviews_service=new Vehicle_reviews_service();
//        $vehicle_reviews_model=new Vehicle_reviews_model();
//        
//        
//        
//    }
}
