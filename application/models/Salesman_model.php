<?php

class Salesman_model extends CI_Model{


public function count_cart()
{
	$q = $this->db->get('cart');
	$result = $q->num_rows();
	return $result;
}

public function add_cart($data)
{
	$this->db->insert('cart',$data);
	return TRUE;
}

public function get_cart()
{
	$query = $this->db->get('cart');
    $res = $query->result();	
	return $res;
}


public function delete_item($id)
{
	$this->db->where('id',$id);
	$this->db->delete('cart');
	return TRUE;
}

public function truncate_cart()
{
     $this->db->truncate('cart');
	 return TRUE;
}

public function add_order($data)
{
	$this->db->insert('orders',$data);
	return TRUE;
}

public function get_order()
{
	$query = $this->db->get('cart');
    $res = $query->result();	
	return $res;
}

public function get_customer()
{
	$query = $this->db->get('orders');
    $res = $query->result();	
	return $res;
}

public function get_username()
{
	$this->db->where('type','Salesman');
	$query = $this->db->get('users');
	$res = $query->result();
	return $res;
}

}?>