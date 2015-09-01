<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Website_advertisements extends CI_Controller{
    
    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('USER_LOGGED_IN')) {
            redirect(site_url() . '/login/load_login');
        } else {
            $this->load->model('website_advertisements/website_advertisements_model');
            $this->load->model('website_advertisements/website_advertisements_service');

            $this->load->model('users/user_model');
            $this->load->model('users/user_service');

            $this->load->model('access_controll/access_controll_service');
        }
    }
    
    /*
     * This fuction will display all advertisements
     */
    
    function manage_advertisements() {

        $perm = Access_controll_service::check_access('ADD_ADVERTISEMENT');
        if ($perm) {
            $website_advertisments_service = new Website_advertisements_service();
            $user_service = new User_service();

            $data['heading'] = "Advertisements";
            $data['results'] = $website_advertisments_service->get_all_website_advertisements();
            $data['reg_users'] = $user_service->get_all_active_registered_users();
          

            $parials = array('content' => 'website_advertisements/manage_advertisements_view');
            $this->template->load('template/main_template', $parials, $data);
        }
    }
    
    /*
     * This function is to delete a advertisement
     */

    function delete_advertisement() {

        $website_advertisments_service = new Website_advertisements_service();

        echo $website_advertisments_service->delete_website_advertisements(trim($this->input->post('id', TRUE)));
    }
    
    /*
     * This is to approve or reject advertisement
     */

    function change_publish_status() {
        $website_advertisments_model = new Website_advertisements_model();
        $website_advertisments_service = new Website_advertisements_service();

        $website_advertisments_model->set_id(trim($this->input->post('id', TRUE)));
        $website_advertisments_model->set_is_published(trim($this->input->post('value', TRUE)));

        echo $website_advertisments_service->publish_advertisement($website_advertisments_model);
    }
    
    /*
     *  This function is to search advertisements
     */

    function search_advertisements() {

        $website_advertisments_service = new Website_advertisements_service();

        $data['results'] = $website_advertisments_service->get_all_website_advertisements();

        $this->load->view('website_advertisements/search_results_advertisements', $data);
    }
    
}

