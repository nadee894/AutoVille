<?php

class Inquries extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('inquries/inquries_model');
        $this->load->model('inquries/inquries_service');
    }

    /*
     * This service function to add an inqurie
     */

    function add_inqurie() {
        $inqurie_model = new Inquries_model();
        $inqurie_service = new Inquries_service();

        $inqurie_model->set_name($this->input->post('name', TRUE));
        $inqurie_model->set_email($this->input->post('email', TRUE));
        $inqurie_model->set_message($this->input->post('message', TRUE));
        $inqurie_model->set_added_by($this->session->userdata('USER_ID'));
        $inqurie_model->set_added_date(date("Y-m-d H:i:s"));
        $inqurie_model->set_updated_by(1);        
        $inqurie_model->set_is_deleted('0');

        echo $inqurie_service->add_inquries($inqurie_model);
    }

}
