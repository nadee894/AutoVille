<?php

class Vehicle_images_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('vehicle_images/vehicle_images_model');
    }

    /*
     * Insert data into temp images table
     */

    function add_new_images($vehicle_images_model) {
        return $this->db->insert('vehicle_images', $vehicle_images_model);
    }

    function get_last_advertisement_id() {
        $this->db->select('id');
        $this->db->from('vehicle_advertisements');
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row();
    }

    function get_images_for_advertisement($advertisement_id) {
        $this->db->select('*');
        $this->db->from('vehicle_images');
        $this->db->where("vehicle_id", $advertisement_id);
        $this->db->where("is_published", "1");
        $this->db->where("is_deleted", "0");
        $query = $this->db->get();

        return $query->result();
    }

    function get_images_for_advertisement_one($advertisement_id) {
        $this->db->select('*');
        $this->db->from('vehicle_images');
        $this->db->where("vehicle_id", $advertisement_id);
        $this->db->where("is_published", "1");
        $this->db->where("is_deleted", "0");
        $this->db->limit("1");
        $query = $this->db->get();

        return $query->row();
    }

}
