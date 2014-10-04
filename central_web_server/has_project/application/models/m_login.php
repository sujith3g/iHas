<?php

class M_login extends CI_Model {

public function __construct() {
    parent::__construct();
    $this->load->database();
}

public function log_write($user_id = 'hack') {
    $this->load->helper('file');
    write_file('log/login.txt', $user_id.'|'.$this->input->ip_address().'|'.date('Y-m-d H:i:s')."\r\n", 'a');
}

public function validate($user_id, $password) {
	if($this->session->userdata('v_try')) {
		$try = $this->session->userdata('v_try');
		$this->session->set_userdata('v_try', $try + 1);
	} else {
		$try = 1;
		$this->session->set_userdata('v_try', $try);
	}
	if($try >= 5) redirect('controller/captcha', 'refresh'); // > 5 error redirect to captcha page
	else {
	    $this->db->select('active, email, perm');
    	$this->db->where('email', $user_id);
    	$this->db->where('password', $password);
    	$qA = $this->db->get('login');
    	if($qA->num_rows() >= 1) { // login success code
        	if($qA->row()->active != 'Y') return '<div id="Notice"><h1>ERROR NOTIFICATION</h1><p>This E Mail is not user activation</p></div>';
			else {
				$this->session->set_userdata('v_id', $qA->row()->email);
            	$this->session->set_userdata('v_perm', $qA->row()->perm);
        		if($this->session->userdata('v_try')) $this->session->unset_userdata('v_try');
        		return 'Y';
			}
    	} else return '<div id="Notice"><h1>ERROR NOTIFICATION</h1><p>The E Mail / Password is wrong</p></div>';
	}
}

}