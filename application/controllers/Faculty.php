<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('Fypms_model');
    }

    public function index() {
        $this->load->view('includes/header');
        echo "Faculty";
        $this->load->view('includes/required_js');
    }


}
