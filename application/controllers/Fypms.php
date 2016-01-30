<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fypms extends CI_Controller{
    	public function __construct()
	{
            // Call the CI_Model constructor
            parent::__construct();
            //$this->load->model('Users_model');
			
	}
        
        public function index (){
            $this->load->view('includes/header');
            $this->load->view('login');
            $this->load->view('includes/required_js');
        }
        
        public function login (){
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              
          }  
        }
        

}

