<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Advanced_search extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function advanced_search_view() {
        $parials = array('content' => 'vehicle_adds/advanced_search');
        $this->template->load('template/main_template', $parials);
    }

}
