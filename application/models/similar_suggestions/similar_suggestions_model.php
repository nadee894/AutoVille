<?php

class Similar_suggestions_model extends CI_Model {

    var $id;
    var $transmission_id;
    var $year;
    var $manufacture_id;
    var $model_id;
    var $body_type_id;

    function __construct() {
        parent::__construct();
    }

    public function get_id() {
        return $this->id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function get_transmission_id() {
        return $this->transmission_id;
    }

    public function set_transmission_id($transmission_id) {
        $this->transmission_id = $transmission_id;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function get_manufacture_id() {
        return $this->manufacture_id;
    }

    public function set_manufacture_id($manufacture_id) {
        $this->manufacture_id = $manufacture_id;
    }

    public function get_model_id() {
        return $this->model_id;
    }

    public function set_model_id($model_id) {
        $this->model_id = $model_id;
    }

    public function get_body_type_id() {
        return $this->body_type_id;
    }

    public function set_body_type_id($body_type_id) {
        $this->body_type_id = $body_type_id;
    }

}
