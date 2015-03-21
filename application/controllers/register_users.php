<?php

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register_Users extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
        //$this->load->model('register_users/register_users_model');
        //$this->load->model('register_users/register_user_service');
    }

function load_registration(){
    if($this->session->userdata('USER_LOGGED_IN')){
        redirect(site_url().'/home/index');
    }else{
        $this->template->load('register_user/register');
    }
}

function add_new_user(){
    
    $register_users_model= new Register_Users_model();
    $register_users_service=new Register_Users_service();
    
    $register_users_model->set_id($this->input->post('id', TRUE));
    $register_users_model->set_title($this->input->post('title', TRUE));
    $register_users_model->set_name($this->input->post('name', TRUE));
    $register_users_model->set_user_name($this->input->post('user_name', TRUE));
    $register_users_model->set_user_type($this->input->post('user_type', TRUE));
    $register_users_model->set_email($this->input->post('email', TRUE));
    $register_users_model->set_address($this->input->post('address', TRUE));
    $register_users_model->set_contact1($this->input->post('contact_no_1', TRUE));
    $register_users_model->set_contact2($this->input->post('contact_no_2', TRUE));
    $register_users_model->set_profile_pic($this->input->post('profile_pic', TRUE));
    $register_users_model->set_password($this->input->post('password', TRUE));
    $register_users_model->set_account_activation_code($this->input->post('account_activation_code', TRUE));
    $register_users_model->set_is_online($this->input->post('is_online', TRUE));
    $register_users_model->set_is_published($this->input->post('is_published', TRUE));
    $register_users_model->set_is_deleted($this->input->post('is_deleted', TRUE));
    $register_users_model->set_added_by($this->input->post('added_by', TRUE));
    $register_users_model->set_added_date($this->input->post('added_date', TRUE));
    //$register_users_model->set_updated_date($this->input->post('updated_date', TRUE));
    //$register_users_model->set_updated_by($this->input->post('updated_by', TRUE));
    
    
    
}

function validate_user_name(){
    
    
}

}
    
    
    


