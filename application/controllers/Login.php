<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}
	
	
	public function do_login()
	{
			
		// $_POST['username'];
		
	$username =	$this->input->post('username');
	$password =	$this->input->post('password');
	$type     =	$this->input->post('type');
	
	$data = array( 'username'=>$username, 'password'=>$password, 'type'=>$type );
	
	// Before this load model
	 $result = $this->Login_model->login($data);
	 if($result)
	 {
	
	  // Before load session library
     //	 session_start();
	 // $name = $_SESSION['username'];
	 
//	 $this->session->set_userdata('username',$username);
//	 $this->session->set_userdata('password',$password);
	 if($type == Admin)
	 {
	    $this->session->set_userdata('admin',$username);
		$this->session->set_userdata('password',$password);
	 	redirect('Admin'); 
	 }
	 
	 else if ($type == Pharmist)
	 {
		$this->session->set_userdata('pharmist',$username);
		$this->session->set_userdata('password',$password);
		 redirect('Pharmist');
	 }
	 else if ($type == Salesman)
	 {
	    $this->session->set_userdata('salesman',$username);
		$this->session->set_userdata('password',$password);
		 redirect('Salesman');
	 }

	  
	  
	 } // main if bracket	
	
	else
	{
		redirect('Login');
	}	
	
	
	}

 // Logout
 
 public function logout()
 
 {
//	 session_destroy();
      $this->session->sess_destroy();
	  redirect('Login');
 }

}
