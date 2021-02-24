<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Checkout extends MX_Controller {

    function __construct() {
        parent::__construct();
    }
    

    public function index()
	{
        $data['content']='checkout';

        $this->load->view('master/master',$data);
   }
}

?>