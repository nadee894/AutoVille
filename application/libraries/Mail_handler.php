<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/*
 * Author : Viran
 * 
 * */

class Mail_handler extends CI_Controller {

    public function __construct() {

        parent::__construct();
        // Do something with $params
    }

    public function sendMailthoughtemplate($to, $email_subject, $msg_body, $lcs_system) {

        $data['lcs_system'] = $lcs_system; //System name , Ex : CCM , CRM , IMS , POLLS , TA etc.  



        $message = $this->load->view('template/mail_template/mis_main/header', $data, TRUE);
        $message .= $msg_body;
        $message .= $this->load->view('template/mail_template/mis_main/footer', $data, TRUE);


        $this->email->from('LocalTesting@lankacom.net', 'Local Testing MIS-'.$lcs_system);
        $this->email->to($to);
        $this->email->subject($email_subject.' Local Testing');
        $this->email->message($message);

      //  return $this->email->send();
    }
    public function sendMailthoughtemplatewithcc($to, $email_subject, $msg_body, $lcs_system, $cc) {

        $data['lcs_system'] = $lcs_system; //System name , Ex : CCM , CRM , IMS , POLLS , TA etc.



        $message = $this->load->view('template/mail_template/mis_main/header', $data, TRUE);
        $message .= $msg_body;
        $message .= $this->load->view('template/mail_template/mis_main/footer', $data, TRUE);


        $this->email->from('LocalTesting@lankacom.net', 'Local Testing MIS-'.$lcs_system);
        $this->email->to($to);
        $this->email->cc($cc);
        $this->email->subject($email_subject.' Local Testing');
        $this->email->message($message);

//       return $this->email->send();
    }



}

?>