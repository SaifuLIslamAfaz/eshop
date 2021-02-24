<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Whishlist extends MX_Controller {
    function __construct()
	{	
		parent::__construct();
	}

	// ==== Samir Codes start ===///

	function index()
	{ 
		$this->load->view("whishlist");
	}
}

