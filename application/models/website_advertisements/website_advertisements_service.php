<?php

class Website_advertisements_service extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->model('website_advertisements/website_advertisements_model');
    }
    
    /*
     * This service function to add a website advertisement
     */
    
    function add_website_advertisement($website_advertisement) {
        return $this->db->insert('website_advertisements', $website_advertisement);
    }
    
    /*
     * this service function to get all advertisements
     */
    
    function get_advertisement_image(){
        $this->db->select('website_advertisements.*');
        $this->db->from('website_advertisements');
        $this->db->where('is_published','1');
        $this->db->where('is_deleted','0');
        $query=  $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
    }
}

