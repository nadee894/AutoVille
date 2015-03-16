<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Comments extends CI_Controller{
    function __construct() {
        parent::__construct();

        $this->load->model('comments/comments_model');
        $this->load->model('comments/comments_service');
    }
    
    function manage_comments() {

        $comments_service = new Comments_service();

        $data['heading'] = "Manage Reviews";
        $data['results'] = $comments_service->get_all_comments();

        $parials = array('content' => 'comments/manage_comments_view');
        $this->template->load('template/main_template', $parials, $data);
    }
}

