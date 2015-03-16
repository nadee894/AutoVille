<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transmission extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('transmission/transmission_model');
        $this->load->model('transmission/transmission_service');
    }

    /* manage_companies function
     * This will display all the companies
     */

    function manage_transmissions() {

        $transmission_service = new Transmission_service();

        $data['heading'] = "Manage Transmissions";
        $data['results'] = $transmission_service->get_all_transmissions();

        $parials = array('content' => 'transmission/manage_transmission_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_transmission() {

        $transmission_model   = new Transmission_model();
        $transmission_service = new Transmission_service();

        $transmission_model->set_name($this->input->post('name', TRUE));
        $transmission_model->set_added_by(1);
        $transmission_model->set_added_date(date("Y-m-d H:i:s"));
        $transmission_model->set_is_published('1');
        $transmission_model->set_is_deleted('0');

        echo $transmission_service->add_new_transmission($transmission_model);
    }

    /*
     * This is to delete a transmission
     */

    function delete_transmissions() {

        $transmission_service = new Transmission_service();

        echo $transmission_service->delete_transmission(trim($this->input->post('id', TRUE)));
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
    
    /*
     * Edit transmission pop up content set up and then send .
     */
    function load_edit_transmission_content() {
        $transmission_model   = new Transmission_model();
        $transmission_service = new Transmission_service();

        $transmission_model->set_id(trim($this->input->post('transmission_id', TRUE)));
        $transmission = $transmission_service->get_transmission_by_id($transmission_model);
        $data['transmission'] = $transmission;


        echo $this->load->view('HR/Interviews/InterviewDetailPopUp', $data, TRUE);
    }

    /*
     * Edit company function using the update_company function in the 
     * company_service
     */

    function edit_company() {

        $perm = Access_controll_service::check_access('EDIT_COMPANY');
        if ($perm) {

            $company_model   = new company_model();
            $company_service = new company_service();

            $company_model->set_company_code($this->input->post('company_code', TRUE));
            $company_model->set_company_name($this->input->post('company_name', TRUE));
            $company_model->set_company_email($this->input->post('company_email', TRUE));
            $company_model->set_company_address($this->input->post('company_address', TRUE));
            $company_model->set_company_contact($this->input->post('company_contact', TRUE));
            $company_model->set_company_desc($this->input->post('company_description', TRUE));

            echo $company_service->update_company($company_model);
        } else {
            
        }
    }


}
