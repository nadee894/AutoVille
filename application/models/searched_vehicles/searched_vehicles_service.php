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
    
    function get_searched_vehicles_for_user($limit, $start,$user_id) {

        $this->db->select('searched_vehicles.id as search_id,searched_vehicles.date,vehicle_advertisements.*,'
                . 'manufacture.name as manufacture,model.name as model,'
                . 'transmission.name as transmission,'
                . 'body_type.name as body_type');
        $this->db->from('searched_vehicles');
        $this->db->join('vehicle_advertisements', 'vehicle_advertisements.id = searched_vehicles.vehicle_id');
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id');
        $this->db->join('transmission', 'transmission.id = vehicle_advertisements.transmission_id');
        $this->db->join('body_type', 'body_type.id = vehicle_advertisements.body_type_id');
        $this->db->where('vehicle_advertisements.is_deleted', '0');
        $this->db->where('searched_vehicles.user_id', $user_id);
        $this->db->group_by('vehicle_advertisements.id');

        if ($limit != '' && $start !='') {
            $this->db->limit($limit, $start);
        }

        $query = $this->db->get();
        return $query->result();
    }
    
    function delete_serached_record($id){
       return $this->db->delete('searched_vehicles', array('id' => $id)); 
    }
    
    function get_view_count_for_advertisement($advertisement_id) {

        $this->db->select('searched_vehicles.*');
        $this->db->from('searched_vehicles');
        $this->db->where('searched_vehicles.vehicle_id', $advertisement_id);


        $query = $this->db->get();
        return $query->result();
    }

}
