<?php

class Transmission_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('transmission/transmission_model');
    }

    /*
     * This is the service function to get all transmissions
     */

    public function get_all_transmissions() {

        $this->db->select('transmission.*,user.name as added_by_user');
        $this->db->from('transmission');
        $this->db->join('user', 'user.id = transmission.added_by');
        $this->db->where('transmission.is_deleted', '0');
        $this->db->order_by("transmission.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    
    /*
     * This is the service function to get transmission detail by  passing the 
     * transmission_id as a parameter
     */

    function get_transmission_by_id($transmission_model) {

        $query = $this->db->get_where('transmission', array('id' => $transmission_model->get_id(), 'is_deleted' => '0'));
        return $query->row();
    }

}
