<?php

class Vehicle_equipment_model extends CI_Model {

    var $id;
    var $vehicle_id;
    var $equipment_id;

    function __construct() {
        parent::__construct();
    }

    public function get_id() {
        return $this->id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function get_vehicle_id() {
        return $this->vehicle_id;
    }

    public function set_vehicle_id($vehicle_id) {
        $this->vehicle_id = $vehicle_id;
    }

    public function get_equipment_id() {
        return $this->equipment_id;
    }

    public function set_equipment_id($equipment_id) {
        $this->equipment_id = $equipment_id;
    }

}
