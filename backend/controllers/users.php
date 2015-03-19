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

    function load_admins_by_letter() {
        $user_service = new User_service();

        $letter = $this->input->post('myletter', TRUE);
        $user_type = $user_service->get_admin_by_name($letter);

        $data['results'] = $user_type;

        $this->load->view('users/admin_filter_view', $data);
    }

    /*
     * Function to delete user
     */

    function delete_users() {
        $user_service = new User_service();
        echo $user_service->delete_users(trim($this->input->post('user_id', TRUE)));

//        $this->load->view('users/admin_filter_view', $data);
    }

    /*
     * Function to change publish status of a user
     */

    function change_publish_status() {
        $user_model = new User_model();
        $user_service = new User_service();

        $user_model->set_id(trim($this->input->post('id', TRUE)));
        $user_model->set_is_published(trim($this->input->post('value', TRUE)));

        echo $user_service->publish_body_types($user_model);
    }

}
