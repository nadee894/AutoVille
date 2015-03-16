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
        $data['heading'] = "Manage Admins";
        $data['results'] = $user_service->get_admin_details();

        $partials = array('content' => 'users/manage_admin_view');
        $this->template->load('template/main_template', $parials, $data);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

