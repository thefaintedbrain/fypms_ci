<?php


	function login_user(){
		$CI =& get_instance();
		$user_id = $CI->session->userdata('user_type');
		if(empty($admin_id)){
			redirect("admin/users");
		}
	}


