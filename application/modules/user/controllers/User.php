<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MX_Controller {
    protected $user_login_id;

    function __construct() {
        parent::__construct();
       
    }

    public function index($name=''){
        $this->load->view('index');
    }
}
?>
