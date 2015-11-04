<?php

class User_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('users/user_model');
    }

    /*
     * Only admins and super admins can be authenticate using this function
     */

    function authenticate_user_with_password($user_model) {
        // 'user_type' => $user_model->get_user_type(),
        $data = array('user_name' => $user_model->get_user_name(), 'password' => $user_model->get_password(), 'is_deleted' => '0', 'is_published' => '1');

        $this->db->select('user.*,user_type.type as user_type_name');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type = user_type.id');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row();
    }

    /*
     * update online status of the user 
     */

    function update_user_online_status($user_model) {

        $data = array('is_online' => $user_model->get_is_online());
        $this->db->where('id', $user_model->get_id());
        return $this->db->update('user', $data);
    }

    function get_user($id) {

        $this->db->select('user.*,user_type.type as user_type_name');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type = user_type.id');
        $this->db->where('user.id', $id);
        $this->db->where('user.is_published', '1');
        $this->db->where('user.is_deleted', '0');
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

    function update_password($user_model) {

        $data = array('password' => $user_model->get_password());
        $this->db->where('id', $user_model->get_id());
        return $this->db->update('user', $data);
    }

    function check_user_email_exist($email){
        $data = array('email' => $email, 'is_deleted' => '0');

        $this->db->select('user.*,user_type.type as user_type_name');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type = user_type.id');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row();
    }

}
