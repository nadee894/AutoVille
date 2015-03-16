<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_advertisements extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');
    }

    /* manage_advertisements function
     * This will display all the advertisements
     */

    function manage_advertisements() {

        $vehicle_advertisments_service = new Vehicle_advertisments_service();

        $data['heading'] = "Advertisements";
        $data['results'] = $vehicle_advertisments_service->get_all_advertisements();

        $parials = array('content' => 'vehicle_advertisements/manage_advertisements_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    /*
     * This is to delete a advertisement
     */
    function delete_advertisement() {

        $vehicle_advertisments_service = new Vehicle_advertisments_service();

        echo $vehicle_advertisments_service->delete_advertisement(trim($this->input->post('id', TRUE)));
    }

    /*
     * This is to change the published status of the transmission 
     */

    function change_publish_status() {
        $transmission_model   = new Transmission_model();
        $transmission_service = new Transmission_service();

        $transmission_model->set_id(trim($this->input->post('id', TRUE)));
        $transmission_model->set_is_published(trim($this->input->post('value', TRUE)));

        echo $transmission_service->publish_transmission($transmission_model);
    }

}
