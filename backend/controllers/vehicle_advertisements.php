<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_advertisements extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');
        
        $this->load->model('users/user_model');
        $this->load->model('users/user_service');
    }

    /* manage_advertisements function
     * This will display all the advertisements
     */

    function manage_advertisements() {

        $vehicle_advertisments_service = new Vehicle_advertisments_service();
        $user_service= new User_service();

        $data['heading'] = "Advertisements";
        $data['results'] = $vehicle_advertisments_service->get_all_advertisements();
        $data['reg_users']=$user_service->get_all_active_registered_users();

        $parials = array('content' => 'vehicle_advertisements/manage_advertisements_view');
        $this->template->load('template/main_template', $parials, $data);
    }
    
     /*
      *  This function is to search advertisements
     */

    function search_advertisements() {

        $vehicle_advertisments_service = new Vehicle_advertisments_service();

        $data['results'] = $vehicle_advertisments_service->search_advertisements();

        $this->load->view('vehicle_advertisements/search_results_advertisements', $data);
    }

    /*
     * This is to delete a advertisement
     */
    function delete_advertisement() {

        $vehicle_advertisments_service = new Vehicle_advertisments_service();

        echo $vehicle_advertisments_service->delete_advertisement(trim($this->input->post('id', TRUE)));
    }
}