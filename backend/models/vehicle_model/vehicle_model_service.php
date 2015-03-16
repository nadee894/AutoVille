<?php

class Vehicle_model_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('vehicle_model/vehicle_model_model');
    }

    /*
     * This is the service function to add a new vehicle model
     */

    function add_new_vehicle_model($vehicle_model_model) {
        return $this->db->insert('model', $vehicle_model_model);
    }

    /*
     * This is the service function to get all vehicle models
     */

    public function get_all_vehicle_models() {

        $this->db->select('model.*,user.name as added_by_user');
        $this->db->from('model');
        $this->db->join('user', 'user.id = model.added_by');
        $this->db->where('model.is_deleted', '0');
        $this->db->order_by("model.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * This is the service function to update vehicle models
     */

    function update_vehicle_model($vehicle_model_model) {

        $data = array('id' => $vehicle_model_model->get_id(),
            'name'         => $vehicle_model_model->get_name(),
            'is_published' => $vehicle_model_model->get_is_published(),
            'is_deleted'   => $vehicle_model_model->get_is_deleted(),
            'added_date'   => $vehicle_model_model->get_added_date(),
            'added_by'     => $vehicle_model_model->get_added_by(),
            'updated_date' => $vehicle_model_model->get_updated_date(),
            'updated_by'   => $vehicle_model_model->get_updated_by()
        );

        $this->db->where('id', $vehicle_model_model->get_id());
        return $this->db->update('model', $data); //table name,data
    }

    /*
     * This is the service function to get vehicle model by model id passing the 
     * id as a parameter
     */

    function get_vehicle_model_by_id($id) {

        $query = $this->db->get_where('model', array('id' => $id, 'is_deleted' => '0'));
        return $query->row();
    }

    /*
     * This service function is to delete a vehicle model
     */

    function delete_vehicle_model($id) {
        $data = array('is_deleted' => '1');
        $this->db->where('id', $id);
        return $this->db->update('model', $data);
    }
    
    /*
     * This service function is to change the published status
     */

    function publish_vehicle_model($vehicle_model_model){
        $data=array('is_published' => $vehicle_model_model->get_is_published());
        $this->db->update('model',$data, array('id' => $vehicle_model_model->get_id()));
        return $this->db->affected_rows();
    }
}
