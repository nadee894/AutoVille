<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Website_comments extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('comments/comments_model');
        $this->load->model('comments/comments_service');
    }

    function load_all_website_comments() {
        $comments_service         = new Comments_service();
        $data['website_comments'] = $comments_service->get_all_comments();

        $parials = array('content' => 'vehicle_adds/recent_adds');
        $this->template->load('template/main_template', $parials, $data);
    }

    function list_website_comments() {
        $comments_service              = new Comments_service();
        $data['website_comments_list'] = $comments_service->get_all_comments_list();
        $parials                       = array('content' => 'vehicle_news/website_reviews_view');
        $this->template->load('template/main_template', $parials, $data);
    }

}
