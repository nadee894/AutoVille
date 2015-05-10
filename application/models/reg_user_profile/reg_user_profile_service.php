<?php

class Reg_User_Profile_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('reg_user_profile/reg_user_profile_model');
    }

    function get_reg_user_details() {
        $this->db->select('user.*, user_type.type');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type= user_type.id');
        $this->db->where('user_type.id in (3)');
        $this->db->where('is_deleted', '0');
        $this->db->order_by("user.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
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
     * To get registered user details by passing id as a parameter
     */

    function get_reg_user_by_id($reg_user_profile_model) {

        $this->db->select('user.*, user_type.type');
        $this->db->from('user');
        $this->db->join('user_type', 'user.user_type= user_type.id');
//        $this->db->where('user_type.id in (3)');
        $this->db->where('user.is_deleted', '0');
        $this->db->where('user.id', $reg_user_profile_model->get_id());
        $query = $this->db->get();

        return $query->row();
    }

    function delete_reg_user_profile($user_id){
        $data=array('is_deleted'=>'1');
        $this->db->where('id', $user_id);
        return $this->db->update('user', $data);
    }
    
    function update_reg_user($reg_user_profile_model){
        
        $data = array('title' => $reg_user_profile_model->get_title(),
            'name' => $reg_user_profile_model->get_name(),
            'user_name' => $reg_user_profile_model->get_user_name(),
            'user_type' => $reg_user_profile_model->get_user_type(),
            'email' => $reg_user_profile_model->get_email(),
            'address' => $reg_user_profile_model->get_address(),
            'contact_no_1' => $reg_user_profile_model->get_contact1(),
            'contact_no_2' => $reg_user_profile_model->get_contact2(),
            'password' => $reg_user_profile_model->get_password(),
            'profile_pic' => $reg_user_profile_model->get_profile_pic(),
            'updated_by' => $reg_user_profile_model->get_updated_by(),
            'updated_date' => $reg_user_profile_model->get_updated_date());
        $this->db->where('id', $reg_user_profile_model->get_id());
        return $this->db->update('user', $data);
    }

    function add_user_profile($reg_user_profile_model){
        return $this->db->insert('user', $reg_user_profile_model);
    }
    
    /*
     * update password and avatar of a registered user   
     */

    function update_password_and_avatar($reg_user_profile_model) {
        $data = array('password' => $reg_user_profile_model->get_password(),
            'profile_pic' => $reg_user_profile_model->get_profile_pic(),
            'updated_by' => $reg_user_profile_model->get_updated_by(),
            'updated_date' => $reg_user_profile_model->get_updated_date());
        $this->db->where('id', $reg_user_profile_model->get_id());
        return $this->db->update('user', $data);
    }

    
}
