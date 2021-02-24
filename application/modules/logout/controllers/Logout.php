<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MX_Controller {
    function __construct() {
        parent::__construct();
       
    }
	
	public function index($id='')
	{	
		$this->session->unset_userdata('login_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('type');
		$this->session->set_flashdata('type', 'success');
		$this->session->set_flashdata('msg', 'Successfully Logged-Out!!');
		redirect('login','refresh');
	}

}
