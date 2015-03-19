<?php

class Comments_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('comments/comments_model');
    }
    
     public function get_all_comments() {

        $this->db->select('*');
        $this->db->from('comment');
        $this->db->where('comment.is_deleted', '0');
        $this->db->order_by("comment.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }
 
}

