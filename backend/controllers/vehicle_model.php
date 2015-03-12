<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_Model extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('vehicle_model/vehicle_model_model');
        $this->load->model('vehicle_model/vehicle_model_service');
    }

    /*
     * This will display all the vehicle models
     */

    function manage_models() {

        $vehicle_model_service = new Vehicle_model_service();

        $data['heading'] = "Manage Vehicle Models";
        $data['results'] = $vehicle_model_service->get_all_vehicle_models();

        $parials = array('content' => 'vehicle_model/manage_vehicle_model_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    /*
     * This function is to add a new vehicle model using the method add_new_vehicle_model 
     * in vehicle model service
     */

    function add_new_vehicle_model() {
        $perm = Access_controll_service::check_access('ADD_NEW_COMPANY');
        if ($perm) {

            $vehicle_model_model = new Vehicle_model_model();
            $vehicle_model_service = new Vehicle_model_service();

            $vehicle_model_model->set_id($this->input->post('id', TRUE));
            $vehicle_model_model->set_name($this->input->post('name', TRUE));
            $vehicle_model_model->set_is_published($this->input->post('is_published', TRUE));
            $vehicle_model_model->set_is_deleted('0');
            $vehicle_model_model->set_added_date(($this->input->post('added_date', TRUE)));
            $vehicle_model_model->set_added_by($this->input->post('added_by', TRUE));
            $vehicle_model_model->set_updated_date(($this->input->post('updated_date', TRUE)));
            $vehicle_model_model->set_updated_by($this->input->post('updated_by', TRUE));

            echo $vehicle_model_service->add_new_vehicle_model($vehicle_model_model);
        } else {
            
        }
    }

    /*
     * This is to represent the edit vehicle model view. This funtion is passing 
     * model id as the parameter 
     */

    function edit_company_view($company_code) {
        $perm = Access_controll_service::check_access('EDIT_COMPANY');
        if ($perm) {

            $company_service = new Company_service();


            $data['heading'] = "Edit Company Deatils";
            $data['company'] = $company_service->get_company_by_id($company_code);


            $partials = array('content' => 'company/edit_company_view');
            $this->template->load('template/main_template', $partials, $data);
        } else {
            
        }
    }

    /*
     * Edit vehicle model function using the update_company function in the 
     * Vehicle_model_service
     */

    function edit_vehicle_model() {

        $perm = Access_controll_service::check_access('EDIT_COMPANY');
        if ($perm) {

            $vehicle_model_model = new Vehicle_model_model();
            $vehicle_model_service = new Vehicle_model_service();

            $vehicle_model_model->set_id($this->input->post('id', TRUE));
            $vehicle_model_model->set_name($this->input->post('name', TRUE));
            $vehicle_model_model->set_is_published($this->input->post('is_published', TRUE));
            $vehicle_model_model->set_is_deleted('0');
            $vehicle_model_model->set_added_date(($this->input->post('added_date', TRUE)));
            $vehicle_model_model->set_added_by($this->input->post('added_by', TRUE));
            $vehicle_model_model->set_updated_date(($this->input->post('updated_date', TRUE)));
            $vehicle_model_model->set_updated_by($this->input->post('updated_by', TRUE));

            echo $vehicle_model_service->update_vehicle_model($vehicle_model_model);
        } else {
            
        }
    }

    /*
     * Printing reports 
     */

    public function print_company_pdf_report() {
        $company_service = new Company_service();

        $current_companies = $company_service->get_all_companies();
        $data['companies'] = $current_companies;

        $data['title'] = 'Company Report';
        $SResultString = $this->load->view('reports/view_company_report', $data, TRUE);
        $footer = $this->load->view('reports/pdf_footer', $data, TRUE);
        $this->load->library('MPDF56/mpdf');
        $mpdf = new mPDF('utf-8', 'A4');
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->SetFooter($footer);
        $mpdf->WriteHTML($SResultString);
        $mpdf->Output();
    }

    /*
     * This is to delete a vehicle model     
     */
    function delete_company() {

        $perm = Access_controll_service::check_access('DELETE_COMPANY');
        if ($perm) {
            $vehicle_model_service = new Vehicle_model_service();

            echo $vehicle_model_service->delete_vehicle_model(trim($this->input->post('id', TRUE)));
        } else {
            
        }
    }

}
