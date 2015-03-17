<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reg_Users extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('reg_users/reg_user_model');
        $this->load->model('reg_users/reg_user_service');
    }

    function manage_registered_users() {
        $reg_user_service = new Reg_User_service();
        $reg_user_model = new Reg_User_model();
        $data['heading'] = "Manage Registered Users";
        $data['results'] = $reg_user_service->get_reg_user_details();

        $parials = array('content' => 'reg_users/manage_reg_user_view');
        $this->template->load('template/main_template', $parials, $data);
    }
    
    /*
     * Function to load the registered user profile, edit and send
     */

    function load_registered_user_profile() {
        $reg_user_model = new Reg_User_model();
        $reg_user_service = new Reg_User_service();

        $reg_user_model->set_id(trim($this->input->post('user_id', TRUE)));
        $reg_user_type = $reg_user_service->get_reg_user_by_id($reg_user_model);
        $data['user'] = $user_type;

        echo $this->load->view('reg_users/manage_reg_user_profile_view', $data, TRUE);
    }

}

