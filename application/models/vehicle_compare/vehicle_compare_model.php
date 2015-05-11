<?php

class Vehicle_compare_model extends CI_Model {
    
    var $id;
    var $user_id;
    var $vehicle_id;
    var $added_date;    
    
    function __construct() {
        parent::__construct();
    }
    
    function get_id() {
        return $this->id;
    }

    function set_id($id) {
        $this->id = $id;
    }
       
    function get_user_id() {
        return $this->user_id;
    }

    function get_vehicle_id() {
        return $this->vehicle_id;
    }

    function get_added_date() {
        return $this->added_date;
    }

    function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    function set_vehicle_id($vehicle_id) {
        $this->vehicle_id = $vehicle_id;
    }

    function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

    
}