<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transmission extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('transmission/transmission_model');
        $this->load->model('transmission/transmission_service');
    }

    /* manage_companies function
     * This will display all the companies
     */

    function manage_transmissions() {

        $transmission_service = new Transmission_service();

        $data['heading'] = "Manage Transmissions";
        $data['results'] = $transmission_service->get_all_transmissions();

        $parials = array('content' => 'transmission/manage_transmission_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_transmission() {

        $transmission_model   = new Transmission_model();
        $transmission_service = new Transmission_service();

        $transmission_model->set_name($this->input->post('name', TRUE));
        $transmission_model->set_added_by(1);
        $transmission_model->set_added_date(date("Y-m-d H:i:s"));
        $transmission_model->set_updated_by(1);
        $transmission_model->set_is_published('1');
        $transmission_model->set_is_deleted('0');

        echo $transmission_service->add_new_transmission($transmission_model);
    }

    /*
     * This is to delete a transmission
     */

    function delete_transmissions() {

        $transmission_service = new Transmission_service();

        echo $transmission_service->delete_transmission(trim($this->input->post('id', TRUE)));
    }

    /*
     * This function is to add a new company using the method add_new_company 
     * in company service
     */

    function add_new_company() {
        $perm = Access_controll_service::check_access('ADD_NEW_COMPANY');
        if ($perm) {

            $company_model   = new Company_model();
            $company_service = new Company_service();

            $company_model->set_company_code($this->input->post('company_code', TRUE));
            $company_model->set_company_name($this->input->post('company_name', TRUE));
            $company_model->set_company_email($this->input->post('company_email', TRUE));
            $company_model->set_company_address($this->input->post('company_address', TRUE));
            $company_model->set_company_contact(($this->input->post('company_contact', TRUE)));
            $company_model->set_company_desc($this->input->post('company_description', TRUE));
            $company_model->set_del_ind('1');


            echo $company_service->add_new_company($company_model);
        } else {
            
        }
    }

    /*
     * This is to represent the edit company view. This funtion is passing 
     * company_code as the parameter 
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
     * Edit company function using the update_company function in the 
     * company_service
     */

    function edit_company() {

        $perm = Access_controll_service::check_access('EDIT_COMPANY');
        if ($perm) {

            $company_model   = new company_model();
            $company_service = new company_service();

            $company_model->set_company_code($this->input->post('company_code', TRUE));
            $company_model->set_company_name($this->input->post('company_name', TRUE));
            $company_model->set_company_email($this->input->post('company_email', TRUE));
            $company_model->set_company_address($this->input->post('company_address', TRUE));
            $company_model->set_company_contact($this->input->post('company_contact', TRUE));
            $company_model->set_company_desc($this->input->post('company_description', TRUE));

            echo $company_service->update_company($company_model);
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
        $footer        = $this->load->view('reports/pdf_footer', $data, TRUE);
        $this->load->library('MPDF56/mpdf');
        $mpdf          = new mPDF('utf-8', 'A4');
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->SetFooter($footer);
        $mpdf->WriteHTML($SResultString);
        $mpdf->Output();
    }

}
