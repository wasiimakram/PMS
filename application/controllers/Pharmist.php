<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmist extends CI_Controller {

public function index()
{
	if(!$this->session->userdata('pharmist') || !$this->session->userdata('password'))
	{
		redirect('Login');
	}
	else
	{
	$data['user'] = $this->Pharmist_model->get_username();
	$data['medicines'] = $this->Pharmist_model->get_medicine();
	$this->load->view('index-pharmist',$data);
	}

}

public function add_medicine()
{
	$data['user'] = $this->Pharmist_model->get_username();
	$data['catagories']=$this->Pharmist_model->get_catagories();
	$data['types']=$this->Pharmist_model->get_types();	
	$this->load->view('add-medicine',$data);
}

// Medicines entery here


public function med_registration()
{
	$data['user'] = $this->Pharmist_model->get_username();
    $name =	$this->input->post('name');
	$catagory =	$this->input->post('catagories');
	$type =	$this->input->post('types');
	$quantity =	$this->input->post('quantity');
	$price =	$this->input->post('price');
	
	$data = array( 'name'=>$name,'catagoryID'=>$catagory,'typeID'=>$type, 'quantity'=>$quantity,'price'=>$price);
	//print_r($data);
	
    $result = $this->Pharmist_model->add_medicine($data);
	if($result)
	{
		$this->session->set_flashdata('add_medicine','New Medicine Entery Has done Successfully :)');
		redirect('Pharmist');
	}
}


public function update_medicine()
{
	$data['user'] = $this->Pharmist_model->get_username();	
	$this->load->view('update-medicine');
}




// Catagories function here
  
  public function catagories()
  {
	  $data['user'] = $this->Pharmist_model->get_username();
	  $data['catagories'] = $this->Pharmist_model->med_catagories();
	  $this->load->view('med-catagories',$data);
  }
  
    public function add_catagory()
  {
	  $data['user'] = $this->Pharmist_model->get_username();
	  $name = $this->input->post('name');
	  
	  $data = array('cat_name'=> $name);
	  
	  $res = $this->Pharmist_model->add_cat($data);
	  if($res)
	  {
		  redirect('Pharmist/catagories');
	  }
	  
  }

// Types function here
  
  public function types()
  {
	  $result['user'] = $this->Pharmist_model->get_username();
	 $result['types'] = $this->Pharmist_model->med_types(); 
	 $this->load->view('med-types',$result);
  }

    public function add_type()
  	{
		$data['user'] = $this->Pharmist_model->get_username();
	  $name = $this->input->post('name');
	  
	  $data = array('type_name'=> $name);
	  
	  $res = $this->Pharmist_model->add_type($data);
	  if($res)
	  {
		  redirect('Pharmist/types');
	  }
	  
  }



}
