<?php 

/**
* 
*/
class Shelfmodel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function shelfItems()
	{
		$query = $this->db->select('name, image, discription, brand, price')
							->from('airguns')
							->get();
		return $query->result();
	}
}


