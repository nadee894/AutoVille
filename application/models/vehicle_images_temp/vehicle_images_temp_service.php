<?php

class Vehicle_images_temp_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('vehicle_images_temp/vehicle_images_temp_model');
    }

    /*
     * Insert data into temp images table
     */
    function add_new_temp_images($vehicle_images_temp_model) {
        return $this->db->insert('vehicle_images_temp', $vehicle_images_temp_model);
    }

    /*
     * Truncate the whole temp images table
     */
    function truncate_temp_images() {
        return $this->db->truncate('vehicle_images_temp');
    }

}
