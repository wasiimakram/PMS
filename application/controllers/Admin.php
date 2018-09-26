<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('admin') && $this->session->userdata('password'))
		{
		 
		 $userdata['user'] = $this->Admin_model->get_username();
	     $total_sales = $this->Admin_model->count_sales();	
	     $admin = $this->Admin_model->count_admin();
		 $saleman = $this->Admin_model->count_salesman();
		 $pharmist = $this->Admin_model->count_pharmist();
		// echo $saleman; die();
	    $data= array( 'admin'=>$admin , 'pharmist'=>$pharmist , 'salesman'=>$saleman , 
					'total_sales'=>$total_sales , );
		  
		$this->load->view('sidebar',$userdata);
		$this->load->view('index',$data);
		
		}
		else
		{
			redirect('Login');
		}
	}
	
	// * Manager functios here
	
	public function users()
	{
		 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
	   // we can store manny values just make indexes and we have to pass a single array 
	   $data['result']= $this->Admin_model->users_list();
	   $this->load->view('users',$data);
	}
	
	public function add_user()
	{	 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
       $this->load->view('add-user');		
	}
	
	// Manager registration done here 
	
		public function user_reg()
		{
			 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
			// $a = $_POST['a'];
			
			$name = $this->input->post('name');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$managerid = $this->input->post('managerid');
			$email = $this->input->post('email');
			$no = $this->input->post('no');
			$type = $this->input->post('type');
			
			$data = array('name'=>$name, 'username'=>$username, 'password'=>$password , 'managerid'=>$managerid , 
						  'email'=>$email,'no'=>$no,'type'=>$type);
			
							$this->form_validation->set_rules('name','Your Name is ', 'required');
							$this->form_validation->set_rules('username','Your UserName is ', 'required');
							$this->form_validation->set_rules('password','Password is ', 'required');
							$this->form_validation->set_rules('managerid','ManagerId is ', 'required|alpha_dash');
							$this->form_validation->set_rules('email',' Email ', 'required');
							$this->form_validation->set_rules('no',' Cell No ', 'required|exact_length[11]');
							$this->form_validation->set_rules('type','User Type ', 'required');
                            
							if($this->form_validation->run() == FALSE)
							{
							
							$this->session->set_flashdata('error',validation_errors());
						    redirect('Admin/add_user');
						    }
						
							else
							
							{
							if($this->Admin_model->manager_reg($data))
							{
								$this->session->set_flashdata('manager_reg','New Admin registration done successfully :)');
								redirect('Admin/users');
							}
			
		

						    }
		}
			

   // Deletion of user
   
   public function delete_user()
   {
	    $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
     $id=$this->uri->segment('3');
	 //$id = $_GET['id'];
	 $res = $this->Admin_model->delete_user($id);
	 if($res)
	 {
		 redirect('Admin/users');
	 }
   }
   
      // Updation of user
   
   public function get_user()
   {
	    $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
	   $id=$this->uri->segment('3');
	   $result['userdata'] = $this->Admin_model->get_user($id);
	   
	   $this->load->view('update-user',$result);
   }
   
   public function update_user()
   {
	    $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
	   
	   $id=$this->uri->segment('3');
	   $name = $this->input->post('name');
	   $username = $this->input->post('username');
	   $password = $this->input->post('password');
	   $managerid = $this->input->post('managerid');
	   $email = $this->input->post('email');
	   $no = $this->input->post('no');
	   $type = $this->input->post('type');
	   
	   $data = array(
	                 'name'=>$name,'username'=>$username,
					 'password'=>$password,'managerid'=>$managerid,'
					 email'=>$email,'no'=>$no,'type'=>$type, 
	                );
					
					
					$res = $this->Admin_model->update_user($data,$id);
					if($res)
					{
						$this->session->set_flashdata('update_data','Your Updation done successfully. Cheers :)');
						redirect('Admin/users');
					}
   }




   // - -------------------------------------------------------------------------------------------------------------

   // * Pharmist functions here

	public function pharmist()
	{
		 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
		
		$this->load->view('pharmist');
	}
	
	public function add_pharmist()
	{
		 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
		
       $this->load->view('add-pharmist');		
	}

   // * Salesman functions here

	public function salesman()
	{
		 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
		
		$this->load->view('salesman');
	}
	
	public function add_salesman()
	{
		 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
		
       $this->load->view('add-salesman');		
	}

   // *Medicines functioin here
   
    public function medicine()
	{
		 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
		
		$data['medicines'] = $this->Pharmist_model->get_medicine();
		$this->load->view('medicine',$data);
	}

   // *Total sales  function here
   
    public function total_sales()
	{
		 $userdata['user'] = $this->Admin_model->get_username();
	    $this->load->view('sidebar',$userdata);
		
		
		$data['orders'] = $this->Admin_model->total_sales();
		$this->load->view('orders',$data);
	}



}