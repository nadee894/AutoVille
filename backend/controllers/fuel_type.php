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

    function add_fuel_type() {

        $fuel_type_model   = new Fuel_Type_model();
        $fuel_type_service = new Fuel_Type_service();

        $fuel_type_model->set_name($this->input->post('name', TRUE));
        $fuel_type_model->set_added_by(1);
        $fuel_type_model->set_added_date(date("Y-m-d H:i:s"));
        $fuel_type_model->set_is_published('1');
        $fuel_type_model->set_is_deleted('0');

        echo $fuel_type_service->add_new_fuel_type($fuel_type_model);
    }

    /*
     * This function is to delete a fuel type
     */

    function delete_fuel_type() {

        $fuel_type_service = new Fuel_Type_service();
        echo $fuel_type_service->delete_fuel_type(trim($this->input->post('id', TRUE)));
    }

    /*
     * This function is to change the published status of the fuel type 
     */

    function change_publish_status() {
        
        $fuel_type_model   = new Fuel_Type_model();
        $fuel_type_service = new Fuel_Type_service();

        $fuel_type_model->set_id(trim($this->input->post('id', TRUE)));
        $fuel_type_model->set_is_published(trim($this->input->post('value', TRUE)));

        echo $fuel_type_service->publish_fuel_type($fuel_type_model);
    }

    /*
     * Edit fuel type pop up content set up and then send .
     */

    function load_edit_fuel_type_content() {
        $fuel_type_model   = new Fuel_Type_model();
        $fuel_type_service = new Fuel_Type_service();

        $fuel_type_model->set_id(trim($this->input->post('fuel_type_id', TRUE)));
        $fuel_type = $fuel_type_service->get_fuel_type_by_id($fuel_type_model);
        $data['fuel_type'] = $fuel_type;


        echo $this->load->view('fuel_type/fuel_type_edit_pop_up', $data, TRUE);
    }

     /*
     * This function is to update the fuel type details
     */

    function edit_fuel_type() {

        $fuel_type_model   = new Fuel_Type_model();
        $fuel_type_service = new Fuel_Type_service();

        $fuel_type_model->set_id($this->input->post('fuel_type_id', TRUE));
        $fuel_type_model->set_name($this->input->post('name', TRUE));
        $fuel_type_model->set_updated_by(1);
        $fuel_type_model->set_updated_date(date("Y-m-d H:i:s"));

        echo $fuel_type_service->update_fuel_type($fuel_type_model);
    }
}