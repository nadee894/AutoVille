<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');
    }

    function index() {

        $vehicle_advertisements_service = new Vehicle_advertisments_service();

        $data['my_advertisements'] = $vehicle_advertisements_service->get_advertisements_for_user($this->session->userdata('USER_ID'));


        $parials = array('content' => 'my_dashboard/my_dashboard');
        $this->template->load('template/main_template', $parials, $data);
    }

}
