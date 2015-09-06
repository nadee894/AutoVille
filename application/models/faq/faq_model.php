<?php

class Faq_service extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->model('faq/faq_model');
    }
    
}
