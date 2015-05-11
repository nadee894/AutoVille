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
    
    function get_vehicle_to_compare_for_user($user_id){
        $this->db->select('vehicle_advertisements.*,vehicle_images.image_path,'
                . 'manufacture.name as manufacture,model.name as model,'
                . 'transmission.name as transmission,fuel_type.name as fuel_type,'
                . 'body_type.name as body_type');
        $this->db->from('vehicle_advertisements');
        $this->db->join('vehicle_compare', 'vehicle_advertisements.id=vehicle_compare.vehicle_id');
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id');
        $this->db->join('transmission', 'transmission.id = vehicle_advertisements.transmission_id');
        $this->db->join('fuel_type', 'fuel_type.id = vehicle_advertisements.fuel_type_id');
        $this->db->join('body_type', 'body_type.id = vehicle_advertisements.body_type_id');        
        $this->db->join('vehicle_images', 'vehicle_images.vehicle_id = vehicle_advertisements.id');            
        $this->db->where('vehicle_advertisements.is_deleted', '0');
        $this->db->where('vehicle_advertisements.is_published', '1');
        $this->db->where('vehicle_compare.user_id',$user_id);
        $this->db->group_by('vehicle_advertisements.id');
        
        $query = $this->db->get();
        return $query->result();
    }

    
    function delete_compared_vehicle($user_id,$vehicle_id){
        return $this->db->delete('vehicle_compare', array('user_id' => $user_id,'vehicle_id'=>$vehicle_id)); 
    }
    
    
    function get_vehicles_to_compare_for_unregistered_user($vehicle_id) {
        $this->db->select('vehicle_advertisements.*,manufacture.name as manufacture,model.name as model,vehicle_images.image_path');
        $this->db->from('vehicle_advertisements');
        $this->db->where('vehicle_advertisements.id',$vehicle_id);        
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id');
        $this->db->join('vehicle_images', 'vehicle_images.vehicle_id = vehicle_advertisements.id');        
        $query = $this->db->get();
        return $query->result();
    }
    
}
