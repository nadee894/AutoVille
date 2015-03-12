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

}
