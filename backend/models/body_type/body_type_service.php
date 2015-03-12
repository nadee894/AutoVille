<?php
class Body_type_service extends CI_Model{
     function __construct() {
        parent::__construct();
        $this->load->model('body_type/body_type_model');
    }
    
    public function get_all_body_types() {

        $this->db->select('*');
        $this->db->from('body_type');
        $this->db->where('is_deleted','0');
        $this->db->order_by("added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    function add_new_body_type($body_type_model) {
        return $this->db->insert('body_type', $body_type_model);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

