<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vehicle_reviews extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('vehicle_advertisments/vehicle_advertisments_model');
        $this->load->model('vehicle_advertisments/vehicle_advertisments_service');

        $this->load->model('vehicle_reviews/vehicle_reviews_model');
        $this->load->model('vehicle_reviews/vehicle_reviews_service');
    }

    /*
     * function to load all vehicle reviews
     */

    function load_all_vehicle_reviews() {
        $vehicle_reviews_service = new Vehicle_reviews_service();
        $vehicle_id=  $this->uri->segment(3);
        //echo $vehicle_id;
        $data['vehicle_reviews'] = $vehicle_reviews_service->get_all_vehicle_reviews($vehicle_id);

        $parials = array('content' => 'vehicle_adds/vehicle_detail_view');
        $this->template->load('template/main_template', $parials, $data);
    }

    function add_vehicle_reviews() {
        $vehicle_reviews_service = new Vehicle_reviews_service();
        $vehicle_reviews_model   = new Vehicle_reviews_model();
        $vehicle_id=  $this->uri->segment(3);

        $vehicle_reviews_model->set_description($this->input->post('description', TRUE));
        $vehicle_reviews_model->set_vehicle_id($this->input->post('vehicle_id', TRUE));
        if($this->session->userdata('USER_ID') !=''){
            $vehicle_reviews_model->set_user_id($this->session->userdata('USER_ID'));
        }
        $vehicle_reviews_model->set_added_date(date("Y-m-d H:i:s"));
        $vehicle_reviews_model->set_added_by($this->session->userdata('USER_ID'));
        $vehicle_reviews_model->set_is_published('1');
        $vehicle_reviews_model->set_is_deleted('0');

        $vehicle_reviews_service->add_vehicle_reviews($vehicle_reviews_model);
        $vehicle_reviews = $vehicle_reviews_service->get_all_vehicle_reviews($vehicle_id);

        foreach ($vehicle_reviews as $value) {
            ?>
            <li class="comment">
                <figure>
                    <div class="image">
                        <?php if ($value->profile_pic == '') { ?>
                            <img class="img-responsive img-circle" src="<?php echo base_url() . 'uploads/user_avatars/avatar.png'; ?>"/>
                        <?php } else { ?>
                            <img class="img-responsive img-circle" src="<?php echo base_url() . 'uploads/user_avatars/' . $value->profile_pic; ?>"/>
                        <?php } ?>
                    </div>
                </figure>
                <div class="comment-wrapper">
                    <?php if ($value->added_by_user != '') { ?>
                        <div class="name pull-left"><?php echo ucfirst($value->added_by_user); ?></div>
                    <?php } ?>
                    <span class="date pull-right">
                        <span class="fa fa-calendar"></span>
                        <?php echo date('Y.m.d', strtotime($value->added_date)); ?>
                    </span>
                    <p>
                        <?php echo $value->description; ?>
                </div>
            </li>
        <?php
        }
    }

    function delete_manufactures() {
        $vehicle_reviews_service = new Vehicle_reviews_service();
        echo $vehicle_reviews_service->delete_vehicle_reviews(trim($this->input->post('id', TRUE)));
    }

//    function edit_manufacture() {
//        $vehicle_reviews_service=new Vehicle_reviews_service();
//        $vehicle_reviews_model=new Vehicle_reviews_model();
//        
//        
//        
//    }
}
