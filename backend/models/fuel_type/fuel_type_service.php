<?php

class Fuel_Type_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('fuel_type/fuel_type_model');
    }
    
    /*
     * This is the service function to add a new fuel_type
     */
    function add_new_fuel_type($fuel_type_model) {
        return $this->db->insert('model', $fuel_type_model);
    }        
    
    /*
     * This is the service function to get all fuel types
     */
    public function get_all_fuel_types() {

        $this->db->select('*');
        $this->db->from('fuel_type');
        $this->db->where('is_deleted','0');
        $this->db->order_by("added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    /*
     * This is the service function to update fuel types
     */
    function update_fuel_type($fuel_type_model) {

        $data = array('id' => $fuel_type_model->get_id() ,
            'name' => $fuel_type_model->get_name(),
            'is_published' => $fuel_type_model->get_is_published(),
            'is_deleted' => $fuel_type_model->get_is_deleted(),
            'added_date' => $fuel_type_model->get_added_date(),
            'added_by' => $fuel_type_model->get_added_by(),
            'updated_date' => $fuel_type_model->get_updated_date(),
            'updated_by' => $fuel_type_model->get_updated_by()
        );

        $this->db->where('id', $fuel_type_model->get_id());
        return $this->db->update('fuel_type', $data);
    }
    

    /*
     * This is the service function to get fuel type by fuel type id passing the 
     * id as a parameter
     */
    function get_fuel_type_by_id($id) {

        $query = $this->db->get_where('fuel_type', array('id' => $id,'is_deleted'=>'0'));
        return $query->row();
    }
    
    /*
     * This service function is to delete a fuel type
     */
    function delete_fuel_type($id) {
        $data = array('is_deleted' => '1');
        $this->db->where('id', $id);
        return $this->db->update('fuel_type', $data);
    }

}

