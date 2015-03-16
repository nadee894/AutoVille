<?php

class Equipment_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('equipment/equipment_model');
    }

    function add_new_equipment($equipment_model) {
        return $this->db->insert('equipment', $equipment_model);
    }

    function get_all_equipment() {
        $this->db->select('equipment.*,user.name as username');
        $this->db->from('equipment');
        $this->db->join('user', 'user.id=equipment.added_by');
        $this->db->where('equipment.is_deleted', '0');
        $this->db->order_by('equipment.added_date', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    function delete_equipment($id) {
        $data = array('is_deleted' => '1');
        $this->db->where('id', $id);
        return $this->db->update('equipment', $data);
    }

    function publish_equipment($equipment_model) {
        $data = array('is_published' => $equipment_model->get_is_published());
        $this->db->update('equipment', $data, array('id' => $equipment_model->get_id()));
        return $this->db->affected_rows();
    }

    function update_equipment($equipment_model) {

        $data = array('name' => $equipment_model->get_name(),
            'updated_date' => $equipment_model->get_updated_date(),
            'updated_by' => $equipment_model->get_updated_by()
        );

        $this->db->where('id', $equipment_model->get_id());
        return $this->db->update('equipment', $data);
    }

    function get_equipment_by_id($equipment_model) {

        $query = $this->db->get_where('equipment', array('id' => $equipment_model->get_id(), 'is_deleted' => '0'));
        return $query->row();
    }
}
