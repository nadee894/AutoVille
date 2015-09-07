<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('USER_LOGGED_IN')) {
            redirect(site_url() . '/login/load_login');
        } else {
            $this->load->model('faq/faq_model');
            $this->load->model('faq/faq_service');
            $this->load->model('access_controll/access_controll_service');
        }
    }

    function manage_faq() {
        $faq_service = new faq_service();

        $data['heading'] = "Manage FAQs";
        $data['results'] = $faq_service->get_all_questions();

        $partials = array('content' => 'faq/faq_view');
        $this->template->load('template/main_template', $partials, $data);
    }

    function change_publish_status() {
        $faq_model = new faq_model();
        $faq_service = new faq_service();

        $faq_model->setId(trim($this->input->post('id', TRUE)));
        $faq_model->setIs_published(trim($this->input->post('value', TRUE)));

        echo $faq_service->publish_question($faq_model);
    }

    function load_update_faq_popup() {
        $faq_model = new faq_model();
        $faq_service = new faq_service();

        $faq_model->setId(trim($this->input->post('faq_id', TRUE)));
        $faq = $faq_service->get_question_by_id($faq_model);
        $data['faq'] = $faq;

        echo $this->load->view('faq/faq_edit_view', $data, TRUE);
    }

    function update_faq_answer() {
        $faq_model = new faq_model();
        $faq_service = new faq_service();

        $faq_model->setId($this->input->post('faq_id', TRUE));
        $faq_model->setAnswer($this->input->post('answer', TRUE));
        $faq_model->setUpdated_date("Y-m-d H:i:s");

        echo $faq_service->update_faq($faq_model);
    }

    function delete_faqs() {
        $faq_service = new faq_service();

        echo $faq_service->delete_faqs(trim($this->input->post('id', TRUE)));
    }

}
