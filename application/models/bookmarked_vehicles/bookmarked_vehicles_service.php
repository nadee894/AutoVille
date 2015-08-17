<?php

class Bookmarked_vehicles_service extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insert_bookmarked_vehicle($bookmarked_vehicles_model) {
        $this->db->insert('bookmarked_vehicles', $bookmarked_vehicles_model);
        return $this->db->insert_id();
    }

    function delete_bookmark($bookmark_id) {

        $this->db->where('id', $bookmark_id);
        return $this->db->delete('bookmarked_vehicles');
    }

}
