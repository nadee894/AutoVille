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


        $this->load->model('vehicle_images/vehicle_images_model');
        $this->load->model('vehicle_images/vehicle_images_service');

        $this->load->model('district/district_model');
        $this->load->model('district/district_service');
        
        
        $this->load->model('vehicle_equipment/vehicle_equipment_model');
        $this->load->model('vehicle_equipment/vehicle_equipment_service');
    }

    function post_new_advertisement() {

        $manufacture_service           = new Manufacture_service();
        $vehicle_model_service         = new Vehicle_model_service();
        $body_type_service             = new Body_type_service();
        $fuel_type_service             = new Fuel_Type_service();
        $transmission_service          = new Transmission_service();
        $equipment_service             = new Equipment_service();
        $vehicle_advertisement_service = new Vehicle_advertisments_service();
        $vehicle_images_temp_service   = new Vehicle_images_temp_service();
        $district_service              = new District_service();

        $data['heading'] = "Sell your vehicle";

        $data['manufactures']  = $manufacture_service->get_all_active_manufactures();
        $data['models']        = $vehicle_model_service->get_all_active_vehicle_models();
        $data['body_types']    = $body_type_service->get_all_active_body_types();
        $data['fuel_types']    = $fuel_type_service->get_all_active_fuel_types();
        $data['transmissions'] = $transmission_service->get_all_active_transmissions();
        $data['equipments']    = $equipment_service->get_all_active_equipment();
        $data['locations']    = $district_service->get_all_districts();

        $vehicle_images_temp_service->truncate_temp_images();

        $result  = $vehicle_advertisement_service->get_last_advertisement_id();
        $last_id = '';
        if (!empty($result)) {
            $last_id = $result->id + 1;
        }else{
            $last_id=1;
        }

        $data['last_id'] = $last_id;

        $parials = array('content' => 'vehicle_adds/add_new_advertisement');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_temp_vehicle_images() {

        $vehicle_images_temp_model   = new Vehicle_images_temp_model();
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

        $vehicle_advertisement_model   = new Vehicle_advertisments_model();
        $vehicle_advertisement_service = new Vehicle_advertisments_service();
        $vehicle_images_temp_service   = new Vehicle_images_temp_service();
        $vehicle_images_service        = new Vehicle_images_service();
        $vehicle_images_model          = new Vehicle_images_model();
        $vehicle_equipment_model = new Vehicle_equipment_model();
        $vehicle_equipment_service = new Vehicle_equipment_service();

        $temp_images = $vehicle_images_temp_service->get_all_temp_images_for_user($this->session->userdata('USER_ID'));
        
        $vehicle_advertisement_model->set_model_id($this->input->post('model', TRUE));
        $vehicle_advertisement_model->set_manufacture_id($this->input->post('manufacturer', TRUE));
        $vehicle_advertisement_model->set_description($this->input->post('description', TRUE));
        $vehicle_advertisement_model->set_fuel_type_id($this->input->post('fuel_type', TRUE));
        $vehicle_advertisement_model->set_year($this->input->post('fabrication', TRUE));
        $vehicle_advertisement_model->set_transmission_id($this->input->post('transmission', TRUE));
        $vehicle_advertisement_model->set_body_type_id($this->input->post('body_type', TRUE));
        $vehicle_advertisement_model->set_doors($this->input->post('doors'));
        $vehicle_advertisement_model->set_location_id($this->input->post('location'));
        $vehicle_advertisement_model->set_colour($this->input->post('colour'));
        $vehicle_advertisement_model->set_sale_type($this->input->post('sale_type'));
        $vehicle_advertisement_model->set_chassis_no($this->input->post('chassis_no'));
        $vehicle_advertisement_model->set_kilometers($this->input->post('kilo_meters'));
        $vehicle_advertisement_model->set_price($this->input->post('price'));
        $vehicle_advertisement_model->set_is_deleted('0');
        $vehicle_advertisement_model->set_is_published('0');
        $vehicle_advertisement_model->set_added_date(date("Y-m-d H:i:s"));
        $vehicle_advertisement_model->set_added_by($this->session->userdata('USER_ID'));



        $advertisement_id = $vehicle_advertisement_service->add_new_advertisements($vehicle_advertisement_model);
        $msg              = 1;

        $equipments = $this->input->post('equipment', TRUE);

        if (!empty($equipments)) {
            foreach ($equipments as $equipment) {

                $vehicle_equipment_model->set_equipment_id($equipment);
                $vehicle_equipment_model->set_vehicle_id($advertisement_id);
                $vehicle_equipment_service->add_new_vehicle_equipment($vehicle_equipment_model);
            }
        }

        foreach ($temp_images as $image) {
            $vehicle_images_model->set_image_path($image->image_path);
            $vehicle_images_model->set_vehicle_id($advertisement_id);
            $vehicle_images_model->set_is_published('1');
            $vehicle_images_model->set_is_deleted('0');
            $vehicle_images_model->set_added_date(date("Y-m-d H:i:s"));
            $vehicle_images_model->set_added_by($this->session->userdata('USER_ID'));

            $msg = $vehicle_images_service->add_new_images($vehicle_images_model);
        }

        echo $msg;



//        } else {
//            $this->template->load('template/access_denied_page');
//        }
    }

}
