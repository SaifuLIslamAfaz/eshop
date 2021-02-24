<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');
    class Page extends MX_Controller {

        protected $user_login_id;
    
        //public $counter=0;

        function __construct() {
            parent::__construct();
    
        }

        public function index()
        {
            $data['content']='blog';

            $this->load->view('master/master',$data);
        }
}
