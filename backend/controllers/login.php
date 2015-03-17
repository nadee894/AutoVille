<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('users/user_model');
        $this->load->model('users/user_service');

        // $this->load->library("settings_option_handler");
    }

    function index() {
        if ($this->session->userdata('USER_LOGGED_IN')) {
            $this->template->load('template/main_template');
        } else {
            $this->template->load('template/login');
        }
    }

    //Login details checking function 
    function authenticate_user() {

        $user_model = new User_model();
        $user_service = new User_service();

        $username = $this->input->post('login_username', TRUE);

        $user_model->set_user_name($user_name);
        $user_model->set_password($this->input->post('login_password', TRUE));

        if (count($user_service->authenticate_user_with_password($user_model)) == 0) {
            $logged_user_result = false;
        } else {
            $logged_user_result = true;
        }

        if ($logged_user_result) {

            $user_model->set_is_online('1');

            $this->session->set_userdata('USER_ID', $user_model->get_id());
            $this->session->set_userdata('USER_NAME', $user_model->get_name());
            $this->session->set_userdata('USER_TYPE', $user_model->get_user_type());
            $this->session->set_userdata('USER_EMAIL', $user_model->get_email());
            $this->session->set_userdata('USER_PROFILE_PIC', $user_model->get_profile_pic());
            $this->session->set_userdata('USER_ONLINE', 'Y');

            $this->session->set_userdata('USER_LOGGED_IN', 'TRUE');
           
        }
    }

    function logout() {

        $user_model = new User_model();
        $user_service = new User_service();

        $user_model->set_is_online('0');
        $user_model->set_id($this->session->userdata('USER_ID'));

        $this->session->set_userdata('USER_ONLINE', 'N');
        $this->session->set_userdata('USER_LOGGED_IN', 'FALSE');

        $this->session->sess_destroy();
        redirect(site_url() . '/login/index');
    }

}
