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

    function send_faq_answer_email() {
        $faq_model = new faq_model();
        $faq_service = new faq_service();
        $faq_model->setId($this->input->post('id', TRUE));
        $faq_question = $faq_service->get_question_by_id($faq_model);


        $email_subject = "AutoVille FAQ Answer";
        $data['user_name'] = 'Sir/Madam';
        $data['name'] = 'Sir/Madam';
        $data['user_email'] = $faq_question->email;
//        $data['phone']        = $this->input->post('phone', TRUE);
        $sender_email = $this->input->post('sender_email', TRUE);
        $data['msg'] = 'Your Question has been answered and Updated. To check Your Answer refer below Link'
                . ''
                . ''
                . 'http://localhost:8080/autoville/index.php/faq/list_faq_questions';

        $msg = $this->load->view('template/mail_template/faq_answer_mail', $data, TRUE);

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: AutoVille <info.autovillle@gmail.com>' . "\r\n";
        $headers .= 'Cc: gayathma3@gmail.com,niklakshaya@gmail.com,heshani7.herath@gmail.com' . "\r\n";

//        if (mail($sender_email, $email_subject, $msg, $headers)) {
//            echo "1";
//            echo 'Mail sent successfully';
//        } else {
//            echo "0";
//            echo 'Mail not sent successfully';
//        }
        if (mail($data['sender_email'], $email_subject, $msg, $headers)) {
            echo "1";
        } else {
            echo "0";
        }
    }

}
