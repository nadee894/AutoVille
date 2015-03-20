<?php

class Vehicle_advertisments_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
    }

    /*
     * This is the service function to get all advertisements
     */

    public function get_all_advertisements() {

        $this->db->select('vehicle_advertisements.*,user.name as added_by_user,'
                . 'manufacture.name as manufacture,model.name as model,'
                . 'transmission.name as transmission,fuel_type.name as fuel_type,'
                . 'body_type.name as body_type');
        $this->db->from('vehicle_advertisements');
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id');
        $this->db->join('transmission', 'transmission.id = vehicle_advertisements.transmission_id');
        $this->db->join('fuel_type', 'fuel_type.id = vehicle_advertisements.fuel_type_id');
        $this->db->join('body_type', 'body_type.id = vehicle_advertisements.body_type_id');
        $this->db->join('user', 'user.id = vehicle_advertisements.added_by');
        $this->db->where('vehicle_advertisements.is_deleted', '0');
        $this->db->order_by("vehicle_advertisements.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * This is the service function to search all advertisements
     */

    public function search_advertisements() {

        $this->db->select('vehicle_advertisements.*,user.name as added_by_user,'
                . 'manufacture.name as manufacture,model.name as model,'
                . 'transmission.name as transmission,fuel_type.name as fuel_type,'
                . 'body_type.name as body_type');
        $this->db->from('vehicle_advertisements');
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id');
        $this->db->join('transmission', 'transmission.id = vehicle_advertisements.transmission_id');
        $this->db->join('fuel_type', 'fuel_type.id = vehicle_advertisements.fuel_type_id');
        $this->db->join('body_type', 'body_type.id = vehicle_advertisements.body_type_id');
        $this->db->join('user', 'user.id = vehicle_advertisements.added_by');
        $this->db->where('vehicle_advertisements.is_deleted', '0');
        $this->db->order_by("vehicle_advertisements.added_date", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * This is the service function to search all vehicles by 
     * vehicle specifications
     */
    public function search_vehicle($manufacture, $model, $body_type, $maxyear, $minyear, $fuel_type
    , $sale_type, $color, $maxprice, $minprice, $transmission, $kilometers, $location, $keyword) {

        $this->db->select('vehicle_advertisements.*,vehicle_images.*,user.name as added_by_user,'
                . 'manufacture.name as manufacture,model.name as model,'
                . 'transmission.name as transmission,fuel_type.name as fuel_type,'
                . 'body_type.name as body_type');
        $this->db->from('vehicle_advertisements');
        $this->db->join('manufacture', 'manufacture.id = vehicle_advertisements.manufacture_id');
        $this->db->join('model', 'model.id = vehicle_advertisements.model_id');
        $this->db->join('transmission', 'transmission.id = vehicle_advertisements.transmission_id');
        $this->db->join('fuel_type', 'fuel_type.id = vehicle_advertisements.fuel_type_id');
        $this->db->join('body_type', 'body_type.id = vehicle_advertisements.body_type_id');
        $this->db->join('user', 'user.id = vehicle_advertisements.added_by');
        $this->db->join('vehicle_images', 'vehicle_images.vehicle_id = vehicle_advertisements.id');
        $this->db->where('vehicle_advertisements.is_deleted', '0');
        $this->db->where('vehicle_advertisements.is_published', '1');
        $this->db->group_by('vehicle_advertisements.id');

        if (!empty($manufacture) && !is_null($manufacture)) {
            $this->db->where('vehicle_advertisements.manufacture_id', $manufacture);
        }
        if (!empty($model) && !is_null($model)) {
            $this->db->where('vehicle_advertisements.model_id', $model);
        }
        if (!empty($body_type) && !is_null($body_type)) {
            $this->db->where('vehicle_advertisements.body_type_id', $body_type);
        }
        if (!empty($fuel_type) && !is_null($fuel_type)) {
            $this->db->where('vehicle_advertisements.fuel_type_id', $fuel_type);
        }
        if (!empty($transmission) && !is_null($transmission)) {
            $this->db->where('vehicle_advertisements.transmission_id', $transmission);
        }
        if (!empty($maxyear) && !is_null($maxyear)) {
            $this->db->where('vehicle_advertisements.year <=', $maxyear);
            $this->db->where('vehicle_advertisements.year >=', $minyear);
        }
        if (!empty($sale_type) && !is_null($sale_type)) {
            $this->db->like('vehicle_advertisements.sale_type', $sale_type);
        }
        if (!empty($color) && !is_null($color)) {
            $this->db->where('vehicle_advertisements.colour', $color);
        }
        if (!empty($maxprice) && !is_null($maxprice)) {
            $this->db->where('vehicle_advertisements.price <=', $maxprice);
            $this->db->where('vehicle_advertisements.price >=', $minprice);
        }
        if (!empty($kilometers) && !is_null($kilometers)) {
            $this->db->where('vehicle_advertisements.kilometers', $kilometers);
        }
        if (!empty($location) && !is_null($location)) {
            $this->db->like('user.address', $location);
        }
        if (!empty($keyword) && !is_null($keyword)) {
            $this->db->like('vehicle_advertisements.description', $keyword);
        }

        $this->db->order_by("vehicle_advertisements.added_date", "desc");

        $query = $this->db->get();
        //echo $this->db->last_query();
        //die;        
        return $query->result();
    }

}
