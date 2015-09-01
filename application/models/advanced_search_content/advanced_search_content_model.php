<?php

class Advanced_search_content_model extends CI_Model {

    var $advanced_search_content_id;
    var $user_id;
    var $field_name;
    var $is_deleted;
    var $added_by;
    var $added_date;
    var $updated_by;
    var $updated_date;

    function get_advanced_search_content_id() {
        return $this->advanced_search_content_id;
    }

    function get_user_id() {
        return $this->user_id;
    }

    function get_field_name() {
        return $this->field_name;
    }

    function get_is_deleted() {
        return $this->is_deleted;
    }

    function get_added_by() {
        return $this->added_by;
    }

    function get_added_date() {
        return $this->added_date;
    }

    function get_updated_by() {
        return $this->updated_by;
    }

    function get_updated_date() {
        return $this->updated_date;
    }

    function set_advanced_search_content_id($advanced_search_content_id) {
        $this->advanced_search_content_id = $advanced_search_content_id;
    }

    function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    function set_field_name($field_name) {
        $this->field_name = $field_name;
    }

    function set_is_deleted($is_deleted) {
        $this->is_deleted = $is_deleted;
    }

    function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

    function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

    function set_updated_by($updated_by) {
        $this->updated_by = $updated_by;
    }

    function set_updated_date($updated_date) {
        $this->updated_date = $updated_date;
    }

}
