<?php

class Advanced_search_content_service extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add_advanced_search_fields($advanced_search_content_model) {
        return $this->db->insert('advanced_search_content', $advanced_search_content_model);
    }

    function get_user_advanced_search_field($user_id) {

        $this->db->select('advanced_search_content.advanced_search_content_id,advanced_search_content.field_name');
        $this->db->from('advanced_search_content');
        $this->db->where('advanced_search_content.is_deleted', '0');
        $this->db->where('advanced_search_content.user_id', $user_id);
        $this->db->order_by("advanced_search_content.advanced_search_content_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

}
