<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MX_Controller {

	protected $user_login_id;
	
    function __construct() 
	{	
		parent::__construct();
		$this->load->library('cart');		
	}

	// ==== Samir Codes start ===///

	function index()
	{
		$data['content']='product';
        $this->load->view('master/master',$data);

	}

}

