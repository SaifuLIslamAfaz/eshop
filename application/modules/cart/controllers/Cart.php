<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MX_Controller {

	protected $user_login_id;
	
    function __construct() 
	{	
		parent::__construct();
		
		$login_id =  $this->user_login_id =  $this->session->userdata('login_id');
	}

	// ==== Samir Codes start ===//

	function index()
	{
		
		$data['content']='cart';

        $this->load->view('master/master',$data);

	}

}

