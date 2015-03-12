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

        $transmission_model              = new Transmission_model();
        $transmission_service            = new Transmission_service();

        $transmission_model->set_name($this->input->post('name', TRUE));
        $transmission_model->set_added_by(1);
        $transmission_model->set_added_date(date("Y-m-d H:i:s"));
        $transmission_model->set_updated_by(1);
        $transmission_model->set_is_published('1');
        $transmission_model->set_is_deleted('0');

       echo $transmission_service->add_new_transmission($transmission_model);

        
    }

    //generate token
    public function generate_random_string($length = 10) {
        $characters    = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random_string = '';
        for ($i = 0; $i < $length; $i++) {
            $random_string .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $random_string;
    }

    public function account_activation($emp_id, $token) {

        $employee_service = new Employee_service();
        $employee_model   = new Employee_model();

        $employee_model->set_employee_code($emp_id);
        $employee_model->set_account_activation_code($token);

        $count = $employee_service->check_user_id_token_combination($employee_model);

        if ($count == 1) {
            $data['emp_id'] = $emp_id;
            $employee_model->set_del_ind('1');
            $employee_service->activate_employee_account($employee_model);

            echo $this->load->view('template/success_account_activated_view', $data);
        } else {
            $data['heading'] = "Invalid URL Request";

            echo $this->load->view('users/invalid_url', $data);
        }
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

    /*
     * This is to delete a company by checking the no. of employees assign to
     *  that company
     */

    function delete_company() {

        $perm = Access_controll_service::check_access('DELETE_COMPANY');
        if ($perm) {
            $company_service  = new Company_service();
            $employee_service = new employee_service();

            $employees = $employee_service->get_employees_by_company_id_manage(trim($this->input->post('code', TRUE)));

            //if no employees in company we can delete otherwise we cant delete the company
            if (count($employees) == 0) {
                echo $company_service->delete_company(trim($this->input->post('code', TRUE)));
            } else {
                echo 2;
            }
        } else {
            
        }
    }

}
