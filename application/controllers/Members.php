<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('members_model');
		
	}

	// displays membership registeration form
	public function membership()
	{
		 
         $this->load->view('pages/members');
	}	


			
}
