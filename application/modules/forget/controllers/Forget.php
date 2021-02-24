<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forget extends MX_Controller {

    function __construct()
    {
        
    }

    public function index() {
        $data['content']='forget_password';
        $this->load->view('master/master',$data);
    }

   
}
