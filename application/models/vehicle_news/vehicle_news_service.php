<?php

class Vehicle_news_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('/vehicle_news/vehicle_news_model'); //load the getters and setters of the model
    }

    /*
     * service funtion to add a new vehicle news
     */

    function add_new_vehicle_news($vehicle_news_model) {
        return $this->db->insert('vehicle_news', $vehicle_news_model);
    }

//    function get_latest_vehicle_news() {
//        $this->db->select('vehicle_news');
//        $this->db->from('vehicle_news');
//        $this->db->where('vehicle_news.is_deleted', '0');
//        $this->db->where('vehicle_news.is_published', '1');
//        $this->db->where('vehicle_news.is_latest', '1');
//        $this->db->order_by("vehicle_news.name", "asc");
//        $this->db->limit(1);
//        $query = $this->db->get();
//        return $query->result();
//    }

    function get_vehicle_news() {
        $this->db->select('vehicle_news.title,vehicle_news.content');
        $this->db->from('vehicle_news');
        $this->db->where('vehicle_news.is_deleted', '0');
        $this->db->where('vehicle_news.is_published', '1');
        $this->db->where('vehicle_news.is_latest', '1');
        $this->db->order_by("vehicle_news.title", "asc");
        $this->db->limit(1);
        $query = $this->db->get();       
        return $query->result();
    }
    
    function get_vehicle_news_list(){
        $this->db->select('vehicle_news.title,vehicle_news.content');
        $this->db->from('vehicle_news');
        $this->db->where('vehicle_news.is_deleted', '0');
        $this->db->where('vehicle_news.is_published', '1');
        $this->db->order_by("vehicle_news.title", "desc");
        $query = $this->db->get();       
        return $query->result();
    }

}
