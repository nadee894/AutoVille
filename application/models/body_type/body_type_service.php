<?php

class Body_type_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('body_type/body_type_model');
    }

    /*
     * Load All body type Details from database     
     */

    public function get_all_body_types() {

        $this->db->select('body_type.*,user.name as added_by_user');
        $this->db->from('body_type');
        $this->db->join('user', 'user.id =body_type.added_by');
        $this->db->where('body_type.is_deleted', '0');
        $this->db->order_by("body_type.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    
    function get_body_type_by_id($body_type_model) {

        $data = array('id' => $body_type_model->get_id(), 'is_deleted' => '0');
        $query = $this->db->get_where('body_type', $data);
        return $query->row();
    }

}


