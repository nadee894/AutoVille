<?php

class Website_advertisements_model extends CI_Model{
    
    var $id;
    var $topic;
    var $description;
    var $price;
    var $image;
    var $url;
    var $is_front_page;
    var $is_published;
    var $is_deleted;
    var $added_date;
    var $added_by;
    var $updated_date;
    var $updated_by;
    //var $is_featured;
    
    function __construct() {
        parent::__construct();
    }
    
    function get_id() {
        return $this->id;
    }

    function get_topic() {
        return $this->topic;
    }

    function get_description() {
        return $this->description;
    }

    function get_price() {
        return $this->price;
    }

    function get_image() {
        return $this->image;
    }
    
    function get_url() {
        return $this->url;
    }

    function get_is_front_page() {
        return $this->is_front_page;
    }

    function set_url($url) {
        $this->url = $url;
    }

    function set_is_front_page($is_front_page) {
        $this->is_front_page = $is_front_page;
    }

    
    function get_is_published() {
        return $this->is_published;
    }

    function get_is_deleted() {
        return $this->is_deleted;
    }

    function get_added_date() {
        return $this->added_date;
    }

    function get_added_by() {
        return $this->added_by;
    }

    function get_updated_date() {
        return $this->updated_date;
    }

    function get_updated_by() {
        return $this->updated_by;
    }

//    function get_is_featured() {
//        return $this->is_featured;
//    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_topic($topic) {
        $this->topic = $topic;
    }

    function set_description($description) {
        $this->description = $description;
    }

    function set_price($price) {
        $this->price = $price;
    }

    function set_image($image) {
        $this->image = $image;
    }

    function set_is_published($is_published) {
        $this->is_published = $is_published;
    }

    function set_is_deleted($is_deleted) {
        $this->is_deleted = $is_deleted;
    }

    function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

    function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

    function set_updated_date($updated_date) {
        $this->updated_date = $updated_date;
    }

    function set_updated_by($updated_by) {
        $this->updated_by = $updated_by;
    }

//    function set_is_featured($is_featured) {
//        $this->is_featured = $is_featured;
//    }


}

