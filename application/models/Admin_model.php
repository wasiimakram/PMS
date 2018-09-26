<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  
  // -----------               All Admin CRUD Here _--------------------
  
  public function count_admin()
  {
	 $this->db->where('type','Admin');
	 $query = $this->db->get('users');
	 $result= $query->num_rows();
     return $result;
  }
  
    public function count_salesman()
  {
	 $this->db->where('type','Salesman');
	 $query = $this->db->get('users');
	 $result= $query->num_rows();
     return $result;
  }
  
    public function count_pharmist()
  {
	 $this->db->where('type','Pharmist');
	 $query = $this->db->get('users');
	 $result= $query->num_rows();
     return $result;
  }
  
      public function count_sales()
  {
	 $query = $this->db->get('orders');
	 $result= $query->num_rows();
     return $result;
  }
  
   public function total_sales()
  {
	 $query = $this->db->get('orders');
	 $result= $query->result();
     return $result;
  }
  
  public function users_list()
  {
	 $query = $this->db->get('users');
	 $result= $query->result();
	 return $result;
  }
  
  public function manager_reg($data)
  {
    
	  $query = $this->db->insert('users',$data);
	  if($query)
	  {
		  return TRUE;
	  }
  }

   // Deletion of user
   
   public function delete_user($id)
   {
	   
	   
	  $this->db->where('id',$id);  			 	//where id=$id;
	  $query = $this->db->delete('users'); 		// Delete from users 
	  return TRUE;
   }

  // Updation of user here

   public function get_user($id)
   {
	   $this->db->where('id',$id);
	   $query = $this->db->get('users'); 
	   $res =  $query->result();
	   return $res;
   }
   
   public function update_user($data,$id)
   {
	   $this->db->where('id',$id);
	   $this->db->update('users',$data);
	   return TRUE;
   }

public function get_username()
{
	$this->db->where('type','Admin');
	$query = $this->db->get('users');
	$res = $query->result();
	return $res;
}

}
?>