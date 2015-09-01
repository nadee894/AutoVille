<?php

class Website_advertisements_service extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->model('website_advertisements/website_advertisements_model');
    }
    
    /*
     * This is the service function to get all website advertisements
     */
    
    public function get_all_website_advertisements(){
        
        $this->db->select('website_advertisements.*,user.name as added_by_user');
        $this->db->from('website_advertisements');
        $this->db->join('user', 'user.id = website_advertisements.added_by');
        $this->db->where('website_advertisements.is_deleted', '0');
        $this->db->order_by("website_advertisements.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    /*
     * This service function to deleted website advertisements
     */
    
    public function delete_website_advertisements($advertisement_id){
        $date=array('is_deleted'=>'1');
        $this->db->where('id',$advertisement_id);
        return $this->db->update('website_advertisements',$date);
    }
    
     /*
     * This service function is to update publish status of a advertisement
     */
    public function publish_advertisement($website_advertisments_model) {
        $data = array('is_published' => $website_advertisments_model->get_is_published());
        $this->db->update('website_advertisements', $data, array('id' => $website_advertisments_model->get_id()));
        return $this->db->affected_rows();
    }
}

