<?php

class Bookmarked_vehicles_service extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insert_bookmarked_vehicle($bookmarked_vehicles_model) {
        return $this->db->insert('bookmarked_vehicles', $bookmarked_vehicles_model);
    }

    function delete_bookmark($bookmark_id) {
        $data = array('is_deleted' => '1');
        $this->db->where('id', $bookmark_id);
        return $this->db->update('bookmarked_vehicles', $data);
    }

}
