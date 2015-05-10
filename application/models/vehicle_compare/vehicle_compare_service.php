<?php

class Vehicle_compare_service extends CI_Model {

    function __construct() {
        parent::__construct();

        $this->load->model('vehicle_compare/vehicle_compare_model');
    }

    function add_vehicle_to_compare($vehicle_compare_model) {
        return $this->db->insert('vehicle_compare', $vehicle_compare_model);
    }

    function get_vehicles_to_compare($user_id) {
        $this->db->select('vehicle_advertisements.*,manufacture.name as manufacture,model.name as model,vehicle_images.image_path');
        $this->db->from('vehicle_advertisements');
        $this->db->where('vehicle_compare.user_id',$user_id);
        $this->db->join('vehicle_compare', 'vehicle_advertisements.id=vehicle_compare.vehicle_id');
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id');
        $this->db->join('vehicle_images', 'vehicle_images.vehicle_id = vehicle_advertisements.id');
        $this->db->order_by('vehicle_compare.added_date', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

}
