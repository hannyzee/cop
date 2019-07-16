<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model();
		if (!$this->session->userdata('userid')) {
			redirect('login');
		}	
	}

	public function reports()
	{
		$this->load->view('pages/report');
	}

	}
}
