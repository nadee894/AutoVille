<?php

class Content_service extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getContentbyhcode($content_model) {
        $query = $this->db->get_where('mn_contents', array(
            'content_hcode' => $content_model->getContent_hcode()
        ));
        return $query->row();
    }

    function updateContentsbyid($content_model) {


        $data = array(
            'content' => $content_model->getContent()
        );

        $this->db->where('content_id', $content_model->getContent_id());
        return $this->db->update('mn_contents', $data);
    }

}

?>
