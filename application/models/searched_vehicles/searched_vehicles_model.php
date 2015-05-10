<?php

class Searched_vehicles_model extends CI_Model {

    var $id;
    var $user_id;
    var $vehicle_id;
    var $date;

    function __construct() {
        parent::__construct();
    }

    public function get_id() {
        return $this->id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function get_user_id() {
        return $this->user_id;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    public function get_vehicle_id() {
        return $this->vehicle_id;
    }

    public function set_vehicle_id($vehicle_id) {
        $this->vehicle_id = $vehicle_id;
    }

    public function get_date() {
        return $this->date;
    }

    public function set_date($date) {
        $this->date = $date;
    }


   

}
