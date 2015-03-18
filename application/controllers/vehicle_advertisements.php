<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_advertisements extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function post_new_advertisement() {

        $data['heading'] = "Submit Your Advertisement";

        $parials = array('content' => 'content_pages/home_content');
        $this->template->load('template/main_template',$parials, $data);
    }

    
}
