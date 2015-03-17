<?php

class Fuel_Type_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('fuel_type/fuel_type_model');
    }
    
    /*
     * This is the service function to add a new fuel type
     */

    function add_new_fuel_type($fuel_type_model) {
        return $this->db->insert('fuel_type', $fuel_type_model);
    }
    
    /*
     * This is the service function to get all fuel types
     */

    public function get_all_fuel_types() {

        $this->db->select('fuel_type.*,user.name as added_by_user');
        $this->db->from('fuel_type');
        $this->db->join('user', 'user.id = fuel_type.added_by');
        $this->db->where('fuel_type.is_deleted', '0');
        $this->db->order_by("fuel_type.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    /*
     * This service function is to delete a fuel type
     */

    function delete_fuel_type($fuel_type_id) {
        $data = array('is_deleted' => '1');
        $this->db->where('id', $fuel_type_id);
        return $this->db->update('fuel_type', $data);
    }
    
    /*
     * This service function is to update publish status of a fuel type
     */

    public function publish_fuel_type($fuel_type_model) {
        $data = array('is_published' => $fuel_type_model->get_is_published());
        $this->db->update('fuel_type', $data, array('id' => $fuel_type_model->get_id()));
        return $this->db->affected_rows();
    }
    
    //update fuel type
    function update_fuel_type($fuel_type_model) {

        $data = array('name' => $fuel_type_model->get_name(),
            'updated_date' => $fuel_type_model->get_updated_date(),
            'updated_by' => $fuel_type_model->get_updated_by()
        );

        $this->db->where('id', $fuel_type_model->get_id());
        return $this->db->update('fuel_type', $data);
    }
    
    /*
     * This is the service function to get fuel type details by  passing the 
     * fuel_type_id as a parameter
     */

    function get_fuel_type_by_id($fuel_type_model) {

        $query = $this->db->get_where('fuel_type', array('id' => $fuel_type_model->get_id(), 'is_deleted' => '0'));
        return $query->row();
    }
}
    
    