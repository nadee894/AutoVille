<?php

class Searched_vehicles_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('searched_vehicles/searched_vehicles_model');
    }

    /*
     * Add new search record for user 
     */

    function add_search_record($searched_vehicles_model) {
        return $this->db->insert('searched_vehicles', $searched_vehicles_model);
    }

}
