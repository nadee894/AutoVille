<?php

class Inquries_model extends CI_Model{
    
    var $id;
    var $name;
    var $email;
    var $message;
    var $is_deleted;    
    var $added_date;   
    
    function __construct() {
        parent::__construct();
    }
    
    function get_id() {
        return $this->id;
    }

    function get_name() {
        return $this->name;
    }

    function get_email() {
        return $this->email;
    }

    function get_message() {
        return $this->message;
    }

    function get_is_deleted() {
        return $this->is_deleted;
    }

    function get_added_date() {
        return $this->added_date;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function set_email($email) {
        $this->email = $email;
    }

    function set_message($message) {
        $this->message = $message;
    }

    function set_is_deleted($is_deleted) {
        $this->is_deleted = $is_deleted;
    }

    function set_added_date($added_date) {
        $this->added_date = $added_date;
    }


    

}