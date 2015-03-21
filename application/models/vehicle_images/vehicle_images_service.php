<?php

class Vehicle_images_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('vehicle_images/vehicle_images_model');
    }

    /*
     * Insert data into temp images table
     */
    function add_new_images($vehicle_images_model) {
        return $this->db->insert('vehicle_images', $vehicle_images_model);
    }

}
