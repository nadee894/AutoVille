<?php

class Vehicle_advertisments_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
    }
   

    
    /*
     * This is the service function to get all transmissions
     */
    public function get_all_transmissions() {

        $this->db->select('transmission.*,user.name as added_by_user');
        $this->db->from('transmission');
        $this->db->join('user', 'user.id = transmission.added_by');
        $this->db->where('transmission.is_deleted','0');
        $this->db->order_by("transmission.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * This service function is to delete a transmission
     */
    function delete_transmission($transmission_id) {
        $data = array('is_deleted' => '1');
        $this->db->where('id', $transmission_id);
        return $this->db->update('transmission', $data);
    }

    
    /*
     * This service function is to update publish status of a transmission
     */
    public function publish_transmission($transmission_model) {
        $data = array('is_published' => $transmission_model->get_is_published());
        $this->db->update('transmission', $data, array('id' => $transmission_model->get_id()));
        return $this->db->affected_rows();
    }
    

    /*
     * This is the service function to get company by company_id passing the 
     * company_code as a parameter
     */
    function get_company_by_id($company_code) {

        $query = $this->db->get_where('company', array('company_code' => $company_code,'del_ind'=>'1'));
        return $query->row();
    }
    
    
}
