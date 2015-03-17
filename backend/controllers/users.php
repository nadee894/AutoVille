<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('users/user_model');
        $this->load->model('users/user_service');
    }

    function manage_admins() {
        $user_service = new User_service();
//        $user_model = new User_model();
        $data['heading'] = "Manage Admins";
        $data['results'] = $user_service->get_admin_details();

        $parials = array('content' => 'users/manage_admin_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    /*
     * Function to load admin profile, edit and sen
     */

    function load_admin_profile() {
        $user_model = new User_model();
        $user_service = new User_service();

        $user_model->set_id(trim($this->input->post('user_id', TRUE)));
        $user_type = $user_service->get_admin_by_id($user_model);
        $data['user'] = $user_type;

        echo $this->load->view('users/manage_admin_profile_view', $data, TRUE);
    }
//
//    function load_admins_by_letter() {
//        $user_model = new User_model();
//        $user_service = new User_service();
//
//        $user_model->set_id(trim($this->input->post('user_id', TRUE)));
//        $user_type = $user_service->get_admin_by_name($user_model);
//        $data['user'] = $user_type;
//
//        echo $this->load->view('users/manage_admin_profile_view', $data, TRUE);
//    }

    function load_admins_by_letter($letter) {
        $user_service = new User_service();

        $user_type = $user_service->get_admin_by_name($letter);
        $data['results'] = $user_type;

        echo $this->load->view('users/manage_admin_view', $data, TRUE);
    }

}
