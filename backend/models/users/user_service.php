<?php

class User_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('users/user_model');
    }

    function get_admin_details() {
        $this->db->select('user.*, user_type.type');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type= user_type.id');
        $this->db->where('user_type.id in (2,1)');
        $this->db->order_by("user.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * Only admins and super admins can be authenticate using this function
     */

    function authenticate_user_with_password($user_model) {

        $data = array('user_name' => $user_model->get_user_name(), 'password' => $user_model->get_password(), 'user_type' => $user_model->get_user_type(), 'is_deleted' => '0', 'is_published' => '1');

        $this->db->select('user.*,user_type.name as user_type_name');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type = user_type.id');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row();
    }

    /*
     * To get all active registered users
     */

    function get_all_active_registered_users() {
        $this->db->select('user.*');
        $this->db->from('user');
        $this->db->where('user_type', 3);
        $this->db->where('is_published', '1');
        $this->db->where('is_deleted', '0');
        $this->db->order_by("user.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * To get admin details by passing id as a parameter
     */

    function get_admin_by_id($user_model) {

        $data = array('id' => $user_model->get_id(), 'is_deleted' => '0');
        $query = $this->db->get_where('user', $data);
        return $query->row();
    }

    function get_admin_by_name($letter) {

        $this->db->select('user.*, user_type.type');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type= user_type.id');
        $this->db->where('user_type.id in (2,1)');
        $this->db->where('user.name like "A%"');
//        echo $letter;
        $this->db->where('user.is_deleted', '0');
        $this->db->order_by("user.added_date", "desc");

        $query = $this->db->get();
        return $query->result();
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */













































































































