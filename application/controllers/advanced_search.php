<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Advanced_search extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('advanced_search_content/advanced_search_content_model');
        $this->load->model('advanced_search_content/advanced_search_content_service');
        
        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');
    }

    function advanced_search_view() {
        $vehicle_advertisments_service = new Vehicle_advertisments_service();
        $data['latest_vehicles']= $vehicle_advertisments_service->get_new_arrival(2);
        $parials = array('content' => 'vehicle_adds/advanced_search', 'new_arrivals' => 'vehicle_adds/new_arrivals');
        $this->template->load('template/main_template', $parials,$data);
    }

    function add_advanced_search_fields() {

        $advanced_search_content_service = new Advanced_search_content_service();
        $features_list                   = $this->input->post('features', TRUE);

        $success_count = 0;
        $result_count  = 0;

        if ((!empty($features_list)) && ($this->session->userdata('USER_ID') != '')) {

            for ($i = 0; $i < count($features_list); $i++) {
                if ($features_list[$i] != "") {
                    ++$result_count;

                    $advanced_search_content_model = new Advanced_search_content_model();
                    $advanced_search_content_model->set_field_name($features_list[$i]);
                    $advanced_search_content_model->set_user_id($this->session->userdata('USER_ID'));
                    $advanced_search_content_model->set_is_deleted('0');
                    $advanced_search_content_model->set_added_by($this->session->userdata('USER_ID'));
                    $advanced_search_content_model->set_added_date(date("Y-m-d H:i:s"));

                    $msg = $advanced_search_content_service->add_advanced_search_fields($advanced_search_content_model);

                    if ($msg == '1') {
                        ++$success_count;
                    }
                }
            }

            if ($result_count == $success_count) {
                $data['fields'] = $advanced_search_content_service->get_user_advanced_search_field($this->session->userdata('USER_ID'));
                echo $this->load->view('vehicle_adds/advanced_search_fields', $data);
            } else {
                echo '0';
            }
        } else {
            echo '2';
        }
    }

}
