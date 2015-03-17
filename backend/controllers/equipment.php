<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Equipment extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('equipment/equipment_model');
        $this->load->model('equipment/equipment_service');
    }

    function manage_equipment() {

        $equipment_service = new Equipment_service();

        $data['heading'] = "Manage Equipment";
        $data['results'] = $equipment_service->get_all_equipment();

        $parials = array('content' => 'equipment/manage_equipment_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_new_equipment() {
        $equipment_model = new Equipment_model();
        $equipment_service = new Equipment_service();

        $equipment_model->set_name($this->input->post('name', TRUE));
        $equipment_model->set_is_published('1');
        $equipment_model->set_is_deleted('0');
        $equipment_model->set_added_date(date("Y-m-d H:i:s"));
        $equipment_model->set_added_by($this->session->userdata('USER_ID'));

        echo $equipment_service->add_new_equipment($equipment_model);
    }

    function delete_equipment() {
        $equipment_service = new Equipment_service();

        echo $equipment_service->delete_equipment(trim($this->input->post('id', TRUE)));
    }

    function change_publish_status() {
        $equipment_model = new Equipment_model();
        $equipment_service = new Equipment_service();

        $equipment_model->set_id(trim($this->input->post('id', TRUE)));
        $equipment_model->set_is_published(trim($this->input->post('value', TRUE)));

        echo $equipment_service->publish_equipment($equipment_model);
    }

    function edit_equipment() {

        $equipment_model = new Equipment_model();
        $equipment_service = new Equipment_service();

        $equipment_model->set_id($this->input->post('equipment_id', TRUE));
        $equipment_model->set_name($this->input->post('name', TRUE));
        $equipment_model->set_updated_date(date("Y-m-d H:i:s"));
        $equipment_model->set_updated_by($this->session->userdata('USER_ID'));

        echo $equipment_service->update_equipment($equipment_model);
    }

    function load_edit_equipment_content() {

        $equipment_model = new Equipment_model();
        $equipment_service = new Equipment_service();

        $equipment_model->set_id(trim($this->input->post('equipment_id', TRUE)));
        $equipment = $equipment_service->get_equipment_by_id($equipment_model);
        $data['equipment'] = $equipment;

        echo $this->load->view('equipment/equipment_edit_pop_up', $data, TRUE);
    }

}
