<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_Model extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('vehicle_model/vehicle_model_model');
        $this->load->model('vehicle_model/vehicle_model_service');
    }

    /*
     * This will display all the vehicle models
     */

    function manage_models() {

        $vehicle_model_service = new Vehicle_model_service();

        $data['heading'] = "Manage Vehicle Models";
        $data['results'] = $vehicle_model_service->get_all_vehicle_models();

        $parials = array('content' => 'vehicle_model/manage_vehicle_model_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    /*
     * This function is to add a new vehicle model using the method add_new_vehicle_model 
     * in vehicle model service
     */

    function add_new_vehicle_model() {

        $vehicle_model_model = new Vehicle_model_model();
        $vehicle_model_service = new Vehicle_model_service();

        $vehicle_model_model->set_name($this->input->post('name', TRUE));
        $vehicle_model_model->set_is_published('1');
        $vehicle_model_model->set_is_deleted('0');
        $vehicle_model_model->set_added_date(date("Y-m-d H:i:s"));
        $vehicle_model_model->set_added_by(2);
        $vehicle_model_model->set_updated_by(2);

        echo $vehicle_model_service->add_new_vehicle_model($vehicle_model_model);
    }

    
    /*
     * This is to delete a vehicle model     
     */

    function delete_vehicle_model() {

        $vehicle_model_service = new Vehicle_model_service();

        echo $vehicle_model_service->delete_vehicle_model(trim($this->input->post('id', TRUE)));
    } 
    
    /*
     * This function is to change publish status of a vehicle model using 
     * publish_vehicle_model function in vehicle_model_service
     */
    function change_publish_status(){
        $vehicle_model_model=new Vehicle_model_model();
        $vehicle_model_service=new Vehicle_model_service();
        
        $vehicle_model_model->set_id(trim($this->input->post('id',TRUE)));
        $vehicle_model_model->set_is_published(trim($this->input->post('value',TRUE)));
        
        echo $vehicle_model_service->publish_vehicle_model($vehicle_model_model);
    }
  
    /*
     * Edit vehicle model function using the update_company function in the 
     * Vehicle_model_service
     */

    function edit_vehicle_model() {

        $perm = Access_controll_service::check_access('EDIT_COMPANY');
        if ($perm) {

            $vehicle_model_model = new Vehicle_model_model();
            $vehicle_model_service = new Vehicle_model_service();

            $vehicle_model_model->set_id($this->input->post('id', TRUE));
            $vehicle_model_model->set_name($this->input->post('name', TRUE));
            $vehicle_model_model->set_is_published($this->input->post('is_published', TRUE));
            $vehicle_model_model->set_is_deleted('0');
            $vehicle_model_model->set_added_date(($this->input->post('added_date', TRUE)));
            $vehicle_model_model->set_added_by($this->input->post('added_by', TRUE));
            $vehicle_model_model->set_updated_date(($this->input->post('updated_date', TRUE)));
            $vehicle_model_model->set_updated_by($this->input->post('updated_by', TRUE));

            echo $vehicle_model_service->update_vehicle_model($vehicle_model_model);
        } else {
            
        }
    }    

}
