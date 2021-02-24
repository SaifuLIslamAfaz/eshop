<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function check_login($email, $pass) {
        $check=substr($email,0,2);
        $this->db->select('*');
        $this->db->from('user_login');
        
        if(is_numeric($email) && $check!='88')
        {
            $this->db->where('email','88'.$email);
        }
        else{
            $this->db->where('email',$email);
        }
        
        $this->db->where('password',$pass);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function check_login_phn($email,$pass) {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('phone_number',$email);
        $this->db->where('password',$pass);
        $result = $this->db->get();
        return $result->result_array();
    }
     


    public function get_name($id)
    {
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where('login_id', $id);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function password_change($email,$data)
    {
        $this->db->where('email',$email);
        $this->db->update('login',$data);
    }

   public function chk_exist_eamil($email) {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('email',$email);
        
        $this->db->where('verfiy_status',1);
        $result = $this->db->get();
        return $result->result_array();
    }
  

}

?>