<?php

class User_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('users/user_model');
    }

    function get_admin_details() {
        $this->db->select('user.*','user_type.type');
        $this->db->from('user');
        $this->db->join('user_type','user.type= user_type.id');
        $this->db->where('user_type.id','2');
        $this->db->order_by("user.added_date","desc");
        return $query->result();
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

