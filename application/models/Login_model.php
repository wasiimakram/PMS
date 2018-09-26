<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

public function test()
{
	echo "test";
}
  
  public function login($data)
  {
	 // whrer condition
	 $this->db->where($data);
	 
	 //select * from login
	 $query  = $this->db->get('users');
	 $result = $query->num_rows();
	 return $result;
	
  }



}
?>