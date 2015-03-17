<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $data['heading'] = "Manage Transmissions";

       // $parials = array('content' => 'transmission/manage_transmission_view');
        $this->template->load('template/main_template', '', $data);
    }

    
}
