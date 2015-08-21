<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    function contact_us() {

        $data['']='';
        
        $parials = array('content' => 'content_pages/contact_us');
        $this->template->load('template/main_template', $parials, $data);
    }

}
