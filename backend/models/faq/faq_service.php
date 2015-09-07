<?php

class Faq_service extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->model('faq/faq_model');
    }
    
    public function get_all_questions() {
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->where('faq.is_deleted', '0');
        $this->db->order_by("faq.added_date", "dsc");       
        $query = $this->db->get();
        return $query->result();
    }
    
    
}