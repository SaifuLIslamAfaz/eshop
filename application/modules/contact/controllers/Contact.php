<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends MX_Controller {
    function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data['content']='contact';
        $this->load->view('master/master',$data);
    }   
}
?>