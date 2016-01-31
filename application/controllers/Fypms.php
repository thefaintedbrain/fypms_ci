<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fypms extends CI_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('Fypms_model');
    }

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('login');
        $this->load->view('includes/required_js');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() != FALSE) {
            $db_data = array();
            $db_data['email'] = $this->input->post('email', TRUE);
            $db_data['password'] = $this->input->post('password', TRUE);
            $res = $this->Fypms_model->auth_user($db_data);
            if ($res->result_id->num_rows == 1) {
                //$this->session->set_userdata($user);
                $res = $res->result();
                $this->session->set_userdata('user_id', $res[0]->user_id);
                
                switch ($res[0]->user_type) {
                    case "SA":
                        redirect('Superadmin');
                        break;
                    case "CO":
                        redirect('Coordinator');
                        break;
                    case "SU":
                        redirect('Supervisor');
                        break;
                    case "ST":
                        redirect('Student');
                        break;
                    case "FA":
                        redirect('Faculty');
                        break;
                    case "EE":
                        redirect('External_examiner');
                        break;
                    default:
                        ;
                }
            } else {
                $data['error'] = "Invalid Email or Password";
            }
        }
    }

    public function dashboard() {
        echo "dashboard";
        echo $this->session->userdata('item');
    }

}
