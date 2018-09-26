<?php 

class Salesman extends CI_Controller{


public function index()
{
	if($this->session->userdata('salesman') && $this->session->userdata('password'))
	{
	$no = $this->Salesman_model->count_cart();	
    $data= array ('no' => $no);
	$data['user'] = $this->Pharmist_model->get_username();
	$data['medicines'] = $this->Pharmist_model->get_medicine();
	$this->load->view('index-salesman',$data);
	}
	else
	{
		$this->Salesman_model->truncate_cart();
		redirect('Login');
	}
}

public function add_cart()
{
	 $name     = $this->uri->segment('3');
	 $quantity = $this->uri->segment('4');
	 $price    = $this->uri->segment('5');
	 $id       = $this->uri->segment('6');
   
   $data['user'] = $this->Pharmist_model->get_username();
	 $data = array(
        'price'    => $price,
        'name'     => $name,
		'quantity' =>'1'
                   );
	$res = $this->Salesman_model->add_cart($data);
	if($res)
	{
		$this->session->set_flashdata('add_cart','Your Medicine is added in cart , Check it Out :)');
		redirect('Salesman');
	}



	
}

public function view_cart()
{
  $data['user'] = $this->Pharmist_model->get_username();
  $data['cart_data']= $this->Salesman_model->get_cart();
  
  $this->load->view('cart',$data);
}

public function delete_item()
{
      $id = $this->uri->segment('3');
	  $res = $this->Salesman_model->delete_item($id);
	  if($res)
	  {
		  redirect('Salesman/view_cart');
	  }
}

public function truncate_cart()
{
      $res = $this->Salesman_model->truncate_cart();
	  if($res)
	  {
		  redirect('Salesman/view_cart');
	  }
}

public function print_invoice()
{
	$cname = $this->input->post('name');
	$cno = $this->input->post('no');
	$price = $this->input->post('price'); 
	
	$this->form_validation->set_rules('name',' Name ', 'required');
	$this->form_validation->set_rules('no','Phone  ', 'required');
                            
	if($this->form_validation->run() == TRUE)
	{
	$data = array('customer_name'=>$cname,'customer_no'=>$cno,'total'=>$price);
    $this->Salesman_model->add_order($data); // order is added
	
    $data['cart_data'] = $this->Salesman_model->get_order();
    $this->load->view('print_invoice',$data);
	$this->Salesman_model->truncate_cart();
	}
	else 
	{
		$this->session->set_flashdata('error',validation_errors());
		redirect('Salesman/view_cart');
	}
}



}
?>