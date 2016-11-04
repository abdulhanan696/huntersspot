<?php 

/**
* 
*/
class ShelfCont extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('shelfmodel');
	}

	function index()
	{
		$shelfItems = $this->shelfmodel->shelfItems();
		$this->load->view('public/shelfview',['shelfitems'=>$shelfItems]);
	}
}

