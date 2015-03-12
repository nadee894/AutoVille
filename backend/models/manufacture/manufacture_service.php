<?php

class Manufacture_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('manufacture/manufacture_model');
    }
    
    public function get_all_manufactures() {

        $this->db->select('*');
        $this->db->from('manufacture');
        $this->db->where('is_deleted','0');
        $this->db->order_by("added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}
