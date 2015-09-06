<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('faq/faq_model');
        $this->load->model('faq/faq_service');
    }

    function load_all_questions() {
        $faq_service = new faq_service();
        $data['faq_questions'] = $faq_service->get_all_questions();

        $parials = array('content' => 'vehicle_adds/recent_adds');
        $this->template->load('template/main_template', $parials, $data);
    }
    
    function list_faq_questions(){
        $faq_service = new faq_service();
        $data['faq_question_list'] = $faq_service->get_all_questions_list();
        
        $parials= array('content' => 'content_pages/faq_view');
        $this->template->load('template/main_template', $parials, $data);
    }

}
