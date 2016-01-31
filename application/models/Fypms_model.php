<?php

class Fypms_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function auth_user($data) {
        $this->db->select('user_id,user_name,user_email,user_gender,user_image,user_created_dtm,user_type,is_active');
        return $this->db->get_where('users', array('user_email' => $data['email'],'user_password'=>$data['password']), 1);
    }
    

}

?>