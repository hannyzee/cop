<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('userid')) {
			redirect('login');
		}
	}

	// displays membership registeration form
	public function membership()
	{
		$this->load->view('pages/users')
	}

}
