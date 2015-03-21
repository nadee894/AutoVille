<?php

class Vehicle_equipment_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('vehicle_equipment/vehicle_equipment_model');
    }

     /*
     * Insert data into equipment table
     */
    function add_new_vehicle_equipment($vehicle_equipment_model) {
        return $this->db->insert('vehicle_equipment', $vehicle_equipment_model);
    }

}
