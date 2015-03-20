<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_advertisements extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('manufacture/manufacture_model');
        $this->load->model('manufacture/manufacture_service');

        $this->load->model('vehicle_model/vehicle_model_model');
        $this->load->model('vehicle_model/vehicle_model_service');

        $this->load->model('body_type/body_type_model');
        $this->load->model('body_type/body_type_service');

        $this->load->model('fuel_type/fuel_type_model');
        $this->load->model('fuel_type/fuel_type_service');

        $this->load->model('transmission/transmission_model');
        $this->load->model('transmission/transmission_service');

        $this->load->model('equipment/equipment_model');
        $this->load->model('equipment/equipment_service');

        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');

        $this->load->model('vehicle_images_temp/vehicle_images_temp_model');
        $this->load->model('vehicle_images_temp/vehicle_images_temp_service');
    }

    function post_new_advertisement() {

        $manufacture_service           = new Manufacture_service();
        $vehicle_model_service         = new Vehicle_model_service();
        $body_type_service             = new Body_type_service();
        $fuel_type_service             = new Fuel_Type_service();
        $transmission_service          = new Transmission_service();
        $equipment_service             = new Equipment_service();
        $vehicle_advertisement_service = new Vehicle_advertisments_service();

        $data['heading'] = "Sell your vehicle";

        $data['manufactures']  = $manufacture_service->get_all_active_manufactures();
        $data['models']        = $vehicle_model_service->get_all_active_vehicle_models();
        $data['body_types']    = $body_type_service->get_all_active_body_types();
        $data['fuel_types']    = $fuel_type_service->get_all_active_fuel_types();
        $data['transmissions'] = $transmission_service->get_all_active_transmissions();
        $data['equipments']    = $equipment_service->get_all_active_equipment();

        $result  = $vehicle_advertisement_service->get_last_advertisement_id();
        $last_id = '';
        if (!empty($result)) {
            $last_id = $result->id + 1;
        }

        $data['last_id'] = $last_id;

        $parials = array('content' => 'vehicle_adds/add_new_advertisement');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_temp_vehicle_images() {

        $vehicle_images_temp_model  = new Vehicle_images_temp_model();
        $vehicle_images_temp_service = new Vehicle_images_temp_service();

        $files = $this->input->post('file_name', TRUE);
        
//        $files = explode(',', $files);

        foreach ($files as $file) {

            $vehicle_images_temp_model->set_image_path($file);
            $vehicle_images_temp_model->set_is_published('1');
            $vehicle_images_temp_model->set_added_date(date("Y-m-d H:i:s"));
            $vehicle_images_temp_model->set_added_by($this->session->userdata('USER_ID'));


            echo $vehicle_images_temp_service->add_new_temp_images($vehicle_images_temp_model);
        }
    }
    
    /*
     * Add new vehicle advertisements
     */
    
     function add_new_advertisement() {
//        $perm = Access_controllerservice :: checkAccess('ADD_PRIVILEGES');
//        if ($perm) {

        $vehicle_advertisement_model = new Vehicle_advertisments_model();
        $vehicle_advertisement_service = new Vehicle_advertisments_service();
        $vehicle_images_temp_service = new Vehicle_images_temp_service();
        $vehicle_images_service = new Project_stuff_service();
        $vehicle_images_model = new Project_stuff_model();

        $project_temp_stuff = $project_stuff_temp_service->get_all_project_stuff_temp_for_company($this->session->userdata('EMPLOYEE_COMPANY_CODE'));

        $project_model->set_project_name($this->input->post('project_name', TRUE));
        $project_model->set_project_vendor($this->input->post('project_vendor', TRUE));
        $project_model->set_project_start_date($this->input->post('project_start_date', TRUE));
        $project_model->set_project_end_date($this->input->post('project_end_date', TRUE));
        $project_model->set_project_description($this->input->post('project_description', TRUE));
        $project_model->set_project_logo($this->input->post('project_logo', TRUE));
        $project_model->set_company_code($this->session->userdata('EMPLOYEE_COMPANY_CODE'));
        $project_model->set_del_ind('1');
        $project_model->set_added_date(date("Y-m-d H:i:s"));
        $project_model->set_added_by($this->session->userdata('EMPLOYEE_CODE'));



        $project_id = $project_service->add_new_project($project_model);
        $msg = 1;

        foreach ($project_temp_stuff as $stuff) {
            $project_stuff_model->set_stuff_name($stuff->stuff_name);
            $project_stuff_model->set_company_code($stuff->company_code);
            $project_stuff_model->set_project_id($project_id);
            $project_stuff_model->set_del_ind('1');
            $project_stuff_model->set_added_date(date("Y-m-d H:i:s"));
            $project_stuff_model->set_added_by($this->session->userdata('EMPLOYEE_CODE'));

            $msg = $project_stuff_service->add_new_project_stuff($project_stuff_model);
        }

        echo $msg;



//        } else {
//            $this->template->load('template/access_denied_page');
//        }
    }

}
