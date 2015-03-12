<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Body_type extends CI_Controller{
    
      function __construct() {
        parent::__construct();

        $this->load->model('body_type/body_type_model');
        $this->load->model('body_type/body_type_service');
    }
}

 function manage_body_types() {

        $body_type_service = new Body_type_service();
        $data['heading'] = "Manage Body Types";
        $data['results'] = $body_type_service->get_all_body_types();

        $parials = array('content' => 'body_type/manage_body_type_view');
        $this->template->load('template/main_template', $parials, $data);
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

