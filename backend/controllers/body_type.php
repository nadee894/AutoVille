<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Body_type extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('body_type/body_type_model');
        $this->load->model('body_type/body_type_service');
    }

    function manage_body_types() {

        $body_type_service = new Body_type_service();
        $data['heading'] = "Manage Body Types";
        $data['results'] = $body_type_service->get_all_body_types();

        $parials = array('content' => 'body_type/manage_body_type_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_body_type() {

        $body_type_model = new Body_type_model();
        $body_type_service = new Body_type_service();

        $body_type_model->set_name($this->input->post('name', TRUE));
        $body_type_model->set_added_by(3);
//        $body_type_model->set_added_date(date("Y-m-d H:i:s"));
//        $body_type_model->set_updated_date(date("Y-m-d H:i:s"));
        $body_type_model->set_updated_by(1);
        $body_type_model->set_is_published('1');
        $body_type_model->set_is_deleted('0');

        echo $body_type_service->add_new_body_type($body_type_model);
    }

    function delete_body_types() {
        $body_type_service = new Body_type_service();

        echo $body_type_service->delete_body_type(trim($this->input->post('id', TRUE)));
    }
    
    function change_publish_status(){
        $body_type_model = new Body_type_model();
        $body_type_service = new Body_type_service();
        
        $body_type_model->set_id(trim($this->input->post('id', TRUE)));
        $body_type_model->set_is_published(trim($this->input->post('value', TRUE)));
        
        echo $body_type_service->publish_body_types($body_type_model);
        
    }
    

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

