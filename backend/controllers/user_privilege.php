<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_privilege extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('USER_LOGGED_IN')) {
            redirect(site_url() . '/login/load_login');
        } else {

            $this->load->model('user_privileges/user_privileges_model');
            $this->load->model('user_privileges/user_privileges_service');

            $this->load->model('privilege_master/privilege_master_model');
            $this->load->model('privilege_master/privilege_master_service');

            $this->load->model('privilege/privilege_model');
            $this->load->model('privilege/privilege_service');

            $this->load->model('users/user_model');
            $this->load->model('users/user_service');
        }
    }

    function manage_user_privileges($id) {

        $user_service = new User_service();
        $user_privilege_service = new User_privileges_service();

        $data['user_detail'] = $user_service->get_admin_by_id($id);

        $current_assigned_privileges = $user_privilege_service->get_assigned_privileges_by_user_id($id);
        $privileges = array();
        foreach ($current_assigned_privileges as $current_assigned_privilege) {
            array_push($privileges, $current_assigned_privilege->privilege_code);
        }

        $data['assigned_privileges'] = $privileges;
        $data['user_id'] = $id;

        $partials = array('content' => 'user_privilege/manage_user_privilege_view');
        $this->template->load('template/main_template', $partials, $data);
    }

    function add_user_privileges() {

        $user_privilege_model = new User_privileges_model();
        $user_privilege_service = new User_privileges_service();
        //setting the user id
        $user_privilege_model->set_user_code($this->input->post('emp_code', TRUE));
        $user_privilege_model->set_privilege_code($this->input->post('pri_code', TRUE));
        //adding the user piviledges based on the template
        echo $user_privilege_service->add_new_user_privilege($user_privilege_model);

    }

    function employee_privileges_add_all() {

        $employee_privilege_model = new Employee_privileges_model();
        $employee_privilege_service = new Employee_privileges_service();
        $privilege_service = new Privilege_service();
        $privilege_master_service = new Privilege_master_service();
        $employee_service = new employee_service();

        //setting the employe id
        $employee = $employee_service->get_employee_by_id($this->input->post('emp_id', TRUE));
        $employee_privilege_model->set_employee_code($this->input->post('emp_id', TRUE));

        $master_privileges = $privilege_master_service->get_privilege_master_by_system_code($this->input->post('system_code', TRUE));

        foreach ($master_privileges as $master_privilege) {
            $privileges = $privilege_service->get_privileges_by_master_privilege_assigned_for($master_privilege->privilege_master_code, $employee->employee_type);
            foreach ($privileges as $privilege) {
                $employee_privilege_model->set_privilege_code($privilege->privilege_code);

                $employee_privilege_service->add_new_employee_privilege_system($employee_privilege_model);
            }
        }
        //adding the employee piviledges based on the template
        echo 1;
    }

    function employee_privileges_delete_all() {

        $employee_privilege_model = new Employee_privileges_model();
        $employee_privilege_service = new Employee_privileges_service();
        $privilege_service = new Privilege_service();
        $privilege_master_service = new Privilege_master_service();
        $employee_service = new employee_service();

        //setting the employe id
        $employee = $employee_service->get_employee_by_id($this->input->post('emp_id', TRUE));
        $employee_privilege_model->set_employee_code($this->input->post('emp_id', TRUE));

        $master_privileges = $privilege_master_service->get_privilege_master_by_system_code($this->input->post('system_code', TRUE));

        foreach ($master_privileges as $master_privilege) {
            $privileges = $privilege_service->get_privileges_by_master_privilege_assigned_for($master_privilege->privilege_master_code, $employee->employee_type);
            foreach ($privileges as $privilege) {
                $employee_privilege_model->set_privilege_code($privilege->privilege_code);

                $employee_privilege_service->delete_new_employee_privilege_system($employee_privilege_model);
            }
        }

        //adding the employee piviledges based on the template
        echo 1;
    }

}
