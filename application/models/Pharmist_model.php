<?php 

class Pharmist_model extends CI_Model{


// Add , SElect Med Catagories

public function med_catagories()
{
	$query = $this->db->get('catagories');
	$result = $query->result();
	return $result;
}

public function add_cat($data)
{
	$this->db->insert('catagories',$data);
	return TRUE;
}


public function get_catagories()
{
   $query = $this->db->get('catagories');
   $res = $query->result();
   return $res;
}



// Add , Select  Medicine types

public function med_types()
{
	$query = $this->db->get('types');
	$result = $query->result();
	return $result;
}

public function add_type($data)
{
	$this->db->insert('types',$data);
	return TRUE;
}

public function get_types()
{
   $query = $this->db->get('types');
   $res = $query->result();
   return $res;
}



// ------------------------------ Registration, Selection of New Medicines -------------------------------------------

public function add_medicine($data)
{
	$this->db->insert('medicines',$data);
	return TRUE;
}

public function get_medicine()
{
   $search = "SELECT medicines.id, medicines.name , medicines.price,medicines.quantity ,
    		catagories.cat_name , types.type_name
		    FROM medicines
	 	    INNER JOIN catagories ON medicines.CatagoryID= catagories.id
	 	    INNER JOIN types on medicines.TypeID = types.id";
			
			$query = $this->db->query($search);
			$res =   $query->result();
			return $res;
}

public function get_username()
{
	$this->db->where('type','Pharmist');
	$query = $this->db->get('users');
	$res = $query->result();
	return $res;
}

}
?>