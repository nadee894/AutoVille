<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $data['heading'] = "Manage Transmissions";

        $parials = array('content' => 'content_pages/home_content','vehicle_search_content'=>'vehicle_adds/search_advertisement');
        $this->template->load('template/main_template',$parials, $data);
    }

    
}
