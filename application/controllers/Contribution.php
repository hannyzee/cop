<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contribution extends CI_Controller
 {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('contribution_model');

		
	}

	//code for insertin contribution 
	public function create()
	{
		$contribution_id = $this->input->post('cid');
		$contribution_name = $this->input->post('cname');
		$member_name = $this->input->post('mname');
		$contributory_amount = $this->input->post('amount');
		$start_date = $this->input->post('sdate');
		$end_date = $this->input->post('edate');
		$creator = $this->input->post('created_by');

		$this->contribution_model->contribute(array(
			$contribution_id,
			$contribution_name,
			$member_name,
			$contributory_amount,
			$start_date,
			$end_date,
			$creator
		));
		redirect ('home/contribution_status');
	}

	
}
