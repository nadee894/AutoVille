<?php

class Register_Users_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('register_users/register_users_model');
    }

    /*
     * update user
     */

    function update_user($register_users_model) {

        $data = array(//'id'=>$register_users_model->get_id(),
            'title' => $register_users_model->get_title(),
            'name' => $register_users_model->get_name(),
            'user_name' => $register_users_model->get_user_name(),
            'email' => $register_users_model->get_email(),
            'address' => $register_users_model->get_address(),
            '$contact_no_1' => $register_users_model->get_contact_no_1(),
            '$contact_no_2' => $register_users_model->get_contact_no_2(),
            '$user_type' => $register_users_model->get_user_type(),
            '$profile_pic' => $register_users_model->get_profile_pic(),
            '$password' => $register_users_model->get_password(),
            '$account_activation_code' => $register_users_model->get_account_activation_code(),
            //'$is_online'=>$register_users_model->get_is_online(),
            //'$is_published'=>$register_users_model->get_is_published(),
            //'$is_deleted'=>$register_users_model->get_is_deleted(),
            //'$added_by'=>$register_users_model->get_added_by(),
            //'$added_date'=>$register_users_model->get_added_date(),
            '$updated_date' => $register_users_model->get_updated_date(),
            '$updated_by' => $register_users_model->get_updated_by());

        $this->db->where('id', $register_users_model->get_id());
        return $this->db->update('user', $data);
    }

    /*
     * update user profile
     */

    function update_user_profile($register_users_model) {

        $data = array('name' => $register_users_model->get_name(),
            'email' => $register_users_model->get_email(),
            '$contact_no_1' => $register_users_model->get_contact_no_1(),
            'user_name' => $register_users_model->get_user_name(),
            '$password' => $register_users_model->get_password(),
            '$password' => $register_users_model->get_password());

        $this->db->where('id', $register_users_model->get_id());
        return $this->db->update('user', $data);
    }

    /* function update_user_online_status($register_users_model){
      $data=array('is_online'=>$register_users_model->get_is_online());
      $this->db->where('id', $register_users_model->get_id());
      return $this->db->update('user', $data);
      }

      function authenticate_user_with_password($register_users_model){

      $data=array('user_name'=>$register_users_model->get_user_name(), 'password'=>$register_users_model->get_password(), 'is_deleted'=>'0','is_published'=>'1');
      $this->db->select('user.*,user_type.type as user_type_name');
      $this->db->from('user');
      $this->db->join('user_type', 'user.user_type = user_type.id');
      $this->db->where($data);
      $query = $this->db->get();
      return $query->row();
      }
     */

    function add_new_user_registration($register_users_model) {

        return $this->db->insert('user', $register_users_model);
    }
<<<<<<< HEAD

    function activate_user($email, $token) {
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('is_published', $token);
        $query = $this->db->get();
        $query = $query->result();
        foreach ($query as $q) {
            $data = array('is_published' => '1');
            $this->db->where('email', $email);
=======
    
    
    function activate_user($email, $token){

        $user = $this->db->get_where('user',array('email' => $email,'token' => $token,'is_published' => '0'));

        if(!empty($user)){
            $data=array('is_published'=>'1','token' => 'NULL');
            $this->db->where('id',$user->id);
>>>>>>> origin/master
            $this->db->update('user', $data);
            return true;
        }else{
            return false;
        }
    }

}
