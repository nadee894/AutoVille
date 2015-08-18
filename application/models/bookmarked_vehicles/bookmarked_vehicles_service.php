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

    function get_bookmarked_vehicles($limit, $start, $user_id) {

        $this->db->select('bookmarked_vehicles.id as bookmark_id,'
                . 'vehicle_advertisements.id,'
                . 'vehicle_advertisements.description,'
                . 'vehicle_advertisements.sale_type,'
                . 'vehicle_advertisements.year,'
                . 'vehicle_advertisements.price,'
                . 'vehicle_advertisements.kilometers,'
                . 'vehicle_images.image_path,'
                . 'manufacture.name as manufacture,'
                . 'model.name as model,'
                . 'transmission.name as transmission,'
                . 'fuel_type.name as fuel_type,'
                . 'body_type.name as body_type');
        $this->db->from('bookmarked_vehicles');
        $this->db->join('vehicle_advertisements', 'vehicle_advertisements.id = bookmarked_vehicles.vehicle_id');
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id', 'left');
        $this->db->join('transmission', 'transmission.id = vehicle_advertisements.transmission_id');
        $this->db->join('fuel_type', 'fuel_type.id = vehicle_advertisements.fuel_type_id');
        $this->db->join('body_type', 'body_type.id = vehicle_advertisements.body_type_id');
        $this->db->join('vehicle_images', 'vehicle_images.vehicle_id = vehicle_advertisements.id');
        $this->db->where('bookmarked_vehicles.is_deleted', '0');
        $this->db->where('vehicle_advertisements.is_deleted', '0');
        $this->db->where('bookmarked_vehicles.added_by', $user_id);
        $this->db->group_by('vehicle_advertisements.id');
        if ($limit != '' && $start != '') {
            $this->db->limit($limit, $start);
        }

        $query = $this->db->get();
        return $query->result();
    }

}
