<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Manufacture extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('manufacture/manufacture_model');
        $this->load->model('manufacture/manufacture_service');
    }

    /* manage manufacture functions
     * this will display all the manufacture
     */

    function manage_manufactures() {

        $manufacture_service = new Manufacture_service();

        $data['heading'] = "Manage Manufactures";
        $data['results'] = $manufacture_service->get_all_manufactures();

        $parials = array('content' => 'manufacture/manage_manufacture_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    /*
     * adding a manufacture
     */

    function add_manufacture() {
        $manufacture_model = new Manufacture_model();
        $manufacture_service = new Manufacture_service();

        $manufacture_model->set_name($this->input->post('name', TRUE));
        $manufacture_model->set_description($this->input->post('description', TRUE));
        $manufacture_model->set_added_by(1);
        $manufacture_model->set_added_date(date("Y-m-d H:i:s"));
        $manufacture_model->set_updated_by(1);
        $manufacture_model->set_is_published('1');
        $manufacture_model->set_is_deleted('0');

        echo $manufacture_service->add_new_manufacture($manufacture_model);
    }

    /*
     * Delete manufacture
     */

    function delete_manufactures() {
        $manufacture_service = new Manufacture_service();
        echo $manufacture_service->delete_manufacture(trim($this->input->post('id', TRUE)));
    }

    /*
     * change the publish status of the manufacture
     */

    function change_publish_status() {
        $manufacture_model = new Manufacture_model();
        $manufacture_service = new Manufacture_service();

        $manufacture_model->set_id(trim($this->input->post('id', TRUE)));
        $manufacture_model->set_is_published(trim($this->input->post('value', TRUE)));

        echo $manufacture_service->publish_manufacture($manufacture_model);
    }

    /*
     * Edit manufacture pop up content set up and then send
     */

    function load_edit_manufacture_content() {
        $manufacure_model = new Manufacture_model();
        $manufacure_service = new Manufacture_service();

        $manufacure_model->set_id(trim($this->input->post('manufacture_id', TRUE)));
        $manufacure = $manufacure_service->get_manufacure_by_id($manufacure_model);
        $data['manufacture'] = $manufacure;

        echo $this->load->view('manufacture/manufacture_edit_pop_up', $data, TRUE);
    }

    /*
     * update the manufacute details
     */

    function edit_manufacture() {
        $manufacure_model = new Manufacture_model();
        $manufacure_service = new Manufacture_service();
        
        $manufacure_model->set_id($this->input->post('manufacture_id', TRUE));
        $manufacure_model->set_name($this->input->post('name',TRUE));
        $manufacure_model->updated_by(1);
        $manufacure_model->updated_date(date("Y-m-d H:i:s"));
        
        echo $manufacure_service->update_manufacure($manufacure_model);

    }

}
