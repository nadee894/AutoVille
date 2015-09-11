<?php

class Advanced_search_content_service extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add_advanced_search_fields($advanced_search_content_model) {
        return $this->db->insert('advanced_search_content', $advanced_search_content_model);
    }

    function get_user_advanced_search_field($user_id) {

        $this->db->select('advanced_search_content.advanced_search_content_id,advanced_search_content.field_name');
        $this->db->from('advanced_search_content');
        $this->db->where('advanced_search_content.is_deleted', '0');
        $this->db->where('advanced_search_content.user_id', $user_id);
        $this->db->order_by("advanced_search_content.advanced_search_content_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function advanced_search_vehicle($manufacture, $model, $body_type, $maxyear, $minyear, $fuel_type
    , $sale_type, $color, $maxprice, $minprice, $transmission, $kilometers, $location, $keyword, $limit, $start, $type, $fields) {

        $this->db->select('vehicle_advertisements.*,vehicle_images.image_path,user.name as added_by_user,'
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
        $this->db->join('vehicle_images', 'vehicle_images.vehicle_id = vehicle_advertisements.id', 'left');
        $this->db->where('vehicle_advertisements.is_deleted', '0');
        $this->db->where('vehicle_advertisements.is_published', '1');
        $this->db->group_by('vehicle_advertisements.id');

        foreach ($fields as $field) {

            if ($field->field_name == 'manufacture_id') {
                if (!empty($manufacture) && !is_null($manufacture)) {
                    $this->db->where('vehicle_advertisements.manufacture_id', $manufacture);
                }
            }
            if ($field->field_name == 'model_id') {
                if (!empty($model) && !is_null($model)) {
                    $this->db->where('vehicle_advertisements.model_id', $model);
                }
            }
            if ($field->field_name == 'body_type_id') {
                if (!empty($body_type) && !is_null($body_type)) {
                    $this->db->where('vehicle_advertisements.body_type_id', $body_type);
                }
            }
            if ($field->field_name == 'fuel_type_id') {

                if (!empty($fuel_type) && !is_null($fuel_type)) {
                    $this->db->where('vehicle_advertisements.fuel_type_id', $fuel_type);
                }
            }
            if ($field->field_name == 'transmission_id') {
                if (!empty($transmission) && !is_null($transmission)) {
                    $this->db->where('vehicle_advertisements.transmission_id', $transmission);
                }
            }
            if ($field->field_name == 'year') {
                if (!empty($maxyear) && !is_null($maxyear)) {
                    $this->db->where('vehicle_advertisements.year <=', $maxyear);
                    $this->db->where('vehicle_advertisements.year >=', $minyear);
                }
            }
            if ($field->field_name == 'colour') {
                if (!empty($color) && !is_null($color)) {
                    $this->db->where('vehicle_advertisements.colour', $color);
                }
            }
            if ($field->field_name == 'price') {
                if (!empty($maxprice) && !is_null($maxprice)) {
                    $this->db->where('vehicle_advertisements.price <=', $maxprice);
                    $this->db->where('vehicle_advertisements.price >=', $minprice);
                }
            }
            if ($field->field_name == 'kilometers') {
                if (!empty($kilometers) && !is_null($kilometers)) {
                    $this->db->where('vehicle_advertisements.kilometers', $kilometers);
                }
            }
            if ($field->field_name == 'location_id') {
                if (!empty($location) && !is_null($location) && $location != 0) {
                    $this->db->where('vehicle_advertisements.location_id', $location);
                }
            }
            if ($field->field_name == 'sale_type') {
                if (!empty($sale_type) && !is_null($sale_type)) {
                    $this->db->like('vehicle_advertisements.sale_type', $sale_type);
                }
            }
            if ($field->field_name == 'description') {
                if (!empty($keyword) && !is_null($keyword)) {
                    $this->db->like('vehicle_advertisements.description', $keyword);
                    $this->db->or_like('user.address', $keyword);
                }
            }
        }


        $this->db->order_by("vehicle_advertisements.added_date", "desc");
        if ($type == 'half') {
            $this->db->limit($limit, $start);
        }
        $query = $this->db->get();
//        echo $this->db->last_query();
//        die;
        return $query->result();
    }

}
