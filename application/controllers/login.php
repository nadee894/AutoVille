<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('email');

        $this->load->model('users/user_model');
        $this->load->model('users/user_service');
        $this->load->model('register_users/register_users_service');

        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');
    }

    function activate() {
        if ($this->register_users_service->activate_user($_GET['email'], $_GET['token'])) {
            redirect(site_url() . '/login/load_login');
        }
    }

    function load_login() {

        $vehicle_advertisments_service = new Vehicle_advertisments_service();
        $data['latest_vehicles'] = $vehicle_advertisments_service->get_new_arrival(2);

        if ($this->session->userdata('USER_LOGGED_IN')) {
            redirect(site_url() . '/home/index');
        } else {
            $parials = array('content' => 'content_pages/login', 'new_arrivals' => 'vehicle_adds/new_arrivals');
            $this->template->load('template/main_template', $parials, $data);
        }
    }

    //Login details checking function 
    function authenticate_user() {

        $user_model = new User_model();
        $user_service = new User_service();

        $user_model->set_user_name($this->input->post('login_username', TRUE));
        $user_model->set_password(md5($this->input->post('login_password', TRUE)));

        $result_user = $user_service->authenticate_user_with_password($user_model);

        if (count($result_user) == 0) {
            $logged_user_result = false;
        } else {
            $logged_user_result = true;
        }

        if ($logged_user_result) {

            $this->session->set_userdata('USER_ID', $result_user->id);
            $this->session->set_userdata('USER_FULLNAME', $result_user->name);
            $this->session->set_userdata('USER_NAME', $result_user->user_name);
            $this->session->set_userdata('USER_TYPE', $result_user->user_type);
            $this->session->set_userdata('USER_EMAIL', $result_user->email);
            $this->session->set_userdata('USER_PHONE', $result_user->contact_no_1);
            $this->session->set_userdata('USER_ADDRESS', $result_user->address);
            $this->session->set_userdata('USER_PROFILE_PIC', $result_user->profile_pic);
            $this->session->set_userdata('USER_ONLINE', 'Y');
            $this->session->set_userdata('USER_LOGGED_IN', 'TRUE');

            $user_model->set_id($this->session->userdata('USER_ID'));
            $user_model->set_is_online('1');
            $user_service->update_user_online_status($user_model);

            echo 1;
        } else {
            echo 0;
        }
    }

    function logout() {

        $user_model = new User_model();
        $user_service = new User_service();

        $user_model->set_is_online('0');
        $user_model->set_id($this->session->userdata('USER_ID'));
        $user_service->update_user_online_status($user_model);

        $this->session->set_userdata('USER_ONLINE', 'N');
        $this->session->set_userdata('USER_LOGGED_IN', 'FALSE');

        $this->session->sess_destroy();
        redirect(site_url() . '/login/load_login');
    }

    function forget_password() {

        $user_service = new User_service();

        $reg_user_list = $user_service->get_all_active_registered_users();
        $input_email = trim($this->input->post('reset_pw_email', TRUE));

        foreach ($reg_user_list as $user) {

            if (strcmp($user->email, $input_email) == 0) {

                //send email
                $email_to = $user->email; //'heshani7.herath@gmail.com';
                $email_subject = "AutoVille Password Reset";
                $data['name'] = $user->name;
                $data['user_name'] = $user->user_name;
                $data['pasword'] = 'asda';

                $msg = $this->load->view('template/mail_template/forgot_password', $data, TRUE);

                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: AutoVille <info.autovillle@gmail.com>' . "\r\n";
                // $headers .= 'Cc: info.autovillle@gmail.com' . "\r\n";

                if (mail($email_to, $email_subject, $msg, $headers)) {
                    echo "1";
                    die();
                } else {
                    echo "2";
                    die();
                }
            }
        }

        echo '0';
    }

    function reset_password() {
        $parials = array('content' => 'content_pages/reset_password');
        $this->template->load('template/main_template', $parials);
    }

    function update_password() {

        $user_service = new User_service();

        $reg_user_list = $user_service->get_all_active_registered_users();
        $input_username = trim($this->input->post('username', TRUE));

        foreach ($reg_user_list as $user) {

            if (strcmp($user->user_name, $input_username) == 0) {

                $user_model = new User_model();
                $user_model->set_id($user->id);
                $user_model->set_password(md5($this->input->post('password', TRUE)));

                $result = $user_service->update_password($user_model);

                if ($result == '1') {
                    echo "1";
                    die();
                } else {
                    echo "2";
                    die();
                }
            }
        }

        echo '0';
    }

}
