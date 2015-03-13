<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fuel_Type extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('fuel_type/fuel_type_model');
        $this->load->model('fuel_type/fuel_type_service');
    }

    /*
     * This will display all the fuel types
     */

    function manage_fuel_types() {

        $fuel_type_service = new Fuel_Type_service();

        $data['heading'] = "Manage Fuel Types";
        $data['results'] = $fuel_type_service->get_all_fuel_types();

        $partials = array('content' => 'fuel_type/manage_fuel_type_view');
        $this->template->load('template/main_template', $partials, $data);
    }
    
    /*
     * This function is to add a new fuel type
     */
    
    function add_fuel_type(){
        $perm = Access_controll_service::check_access('ADD_NEW_FUEL_TYPE');
        if($perm){
            
            $fuel_type_model=new Fuel_Type_model();
            $fuel_type_service=new Fuel_Type_service();
            
            $fuel_type_model->set_id($this->input->post('id', TRUE));
            $fuel_type_model->set_name($this->input->post('name', TRUE));
            $fuel_type_model->set_is_published($this->input->post('is_published', TRUE));
            $fuel_type_model->set_is_deleted('0');
            $fuel_type_model->set_added_date(($this->input->post('added_date', TRUE)));
            $fuel_type_model->set_added_by($this->input->post('added_by', TRUE));
            $fuel_type_model->set_updated_date(($this->input->post('updated_date', TRUE)));
            $fuel_type_model->set_updated_by($this->input->post('updated_by', TRUE));
            
            echo $fuel_type_service->add_new_fuel_type($fuel_type_model);
            
        } else{
                
            }
        }
        
        /*
     * Edit fuel type function
     * 
     */

    function edit_fuel_type() {

        $perm = Access_controll_service::check_access('EDIT_FUEL_TYPE');
        if ($perm) {

            $fuel_type_model = new Fuel_Type_model();
            $fuel_type_service = new Fuel_Type_service();

            $fuel_type_model->set_id($this->input->post('id', TRUE));
            $fuel_type_model->set_name($this->input->post('name', TRUE));
            $fuel_type_model->set_is_published($this->input->post('is_published', TRUE));
            $fuel_type_model->set_is_deleted('0');
            $fuel_type_model->set_added_date(($this->input->post('added_date', TRUE)));
            $fuel_type_model->set_added_by($this->input->post('added_by', TRUE));
            $fuel_type_model->set_updated_date(($this->input->post('updated_date', TRUE)));
            $fuel_type_model->set_updated_by($this->input->post('updated_by', TRUE));

            echo $fuel_type_service->update_fuel_type($fuel_type_model);
        } else {
            
        }
    }
    
    /*
     * This is to delete a fuel type     
     */
    function delete_fuel_type() {

        $perm = Access_controll_service::check_access('DELETE_FUEL_TYPE');
        if ($perm) {
            $fuel_type_service = new Fuel_Type_service();

            echo $fuel_type_service->delete_fuel_type(trim($this->input->post('id', TRUE)));
        } else {
            
        }
    }

        
    }
    
