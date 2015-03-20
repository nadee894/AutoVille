<?php

class District_model extends CI_Model {

    var $id;
    var $name;

    function __construct() {
        parent::__construct();
    }

    function get_id() {
        return $this->id;
    }

    function get_name() {
        return $this->name;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_name($name) {
        $this->name = $name;
    }


}
