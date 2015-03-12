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
     * adding a manufactoure
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

}
