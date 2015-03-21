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
     * Function to add administrator
     */

    function add_admin() {

        $user_model = new User_model();
        $user_service = new User_service();

        $user_model->set_title($this->input->post('title', TRUE));
        $user_model->set_name($this->input->post('name', TRUE));
        $user_model->set_profile_pic($this->input->post('profile_pic', TRUE));
        $user_model->set_user_name($this->input->post('user_name', TRUE));
        $user_model->set_user_type($this->input->post('user_type', TRUE));
        $user_model->set_email($this->input->post('email', TRUE));
        $user_model->set_address($this->input->post('address', TRUE));
        $user_model->set_contact_no_1($this->input->post('contact_no_1', TRUE));
        $user_model->set_contact_no_2($this->input->post('contact_no_2', TRUE));
        $user_model->set_password($this->input->post('password', TRUE));
        $user_model->set_added_by($this->session->userdata('USER_ID'));
        $user_model->set_added_date(date("Y-m-d H:i:s"));
//        $body_type_model->set_updated_date(date("Y-m-d H:i:s"));
//        $body_type_model->set_updated_by(1);
        $user_model->set_is_published('1');
        $user_model->set_is_deleted('0');

        echo $body_type_service->add_new_body_type($body_type_model);
    }

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

        echo $user_service->publish_status_of_user($user_model);
    }

    /*
     * Function to load the profile of a single user
     */

    function load_profile_of_user() {
        $user_model = new User_model();
        $user_service = new User_service();
        $user_model->set_id($this->session->userdata('USER_ID'));
        $user_type = $user_service->get_admin_by_id($user_model);
        $data['results'] = $user_type;

        $parials = array('content' => 'users/manage_admin_profile_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    /*
     * Function to load the recent activities of a profile
     */

    function load_user_activities() {
        echo $this->load->view('users/admin_activitity_filter_view');
    }

    /*
     * Function to load the admin edit profile
     */

    function load_Edit_user_profile() {
        echo $this->load->view('users/admin_profile_edit_view');
    }

    /*
     * Function to update user details
     */

    function update_user() {
        $user_model = new User_model();
        $user_service = new User_service();

        $user_model->set_id($this->session->userdata('USER_ID'));
        $user_model->set_title($this->input->post('title', TRUE));
        $user_model->set_name($this->input->post('name', TRUE));
        $user_model->set_user_name($this->input->post('user_name', TRUE));
        $user_model->set_user_type($this->input->post('user_type', TRUE));
        $user_model->set_email($this->input->post('email', TRUE));
        $user_model->set_address($this->input->post('address', TRUE));
        $user_model->set_contact_no_1($this->input->post('contact_no_1', TRUE));
        $user_model->set_contact_no_2($this->input->post('contact_no_2', TRUE));
        $user_model->set_password($this->input->post('profile_pic', TRUE));
        $user_model->set_profile_pic($this->input->post('pasword', TRUE));
        $user_model->set_updated_by($this->session->userdata('USER_ID'));
        $user_model->set_updated_date(date("Y-m-d H:i:s"));

        echo $user_service->update_user($user_model);
    }

    /*
     * Function to update user password and avatar
     */

    function reset_password_and_avatar() {
        $user_model = new User_model();
        $user_service = new User_service();
        $user_model->set_password($this->input->post('profile_pic', TRUE));
        $user_model->set_profile_pic($this->input->post('pasword', TRUE));
        $user_model->set_updated_by($this->session->userdata('USER_ID'));
        $user_model->set_updated_date(date("Y-m-d H:i:s"));

        echo $user_service->update_user($user_model);
    }

    /*
     * This function is to upload user avatar
     */

    function upload_user_avatar() {

        $uploaddir = './uploads/user_avatars/';
        $unique_tag = 'user_avatar';

        $filename = $unique_tag . time() . '-' . basename($_FILES['uploadfile']['name']); //this is the file name
        $file = $uploaddir . $filename; // this is the full path of the uploaded file

        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {
            echo $filename;
        } else {
            echo "error";
        }
    }

}
