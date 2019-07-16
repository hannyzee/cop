
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends CI_Controller
 {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loan_model');	
	}

	//code for inserting loan request 
	
	public function loans()
	{
		$loan_id = $this->input->post('loan_id');
		$loan_date = $this->input->post('loan_date');
		$loan_amount = $this->input->post('amount');
		$loan_requestor = $this->input->post('user_id');
		$loan_duration = $this->input->post('duration');

		$this->loan_model->loan_request(array(
			$loan_id,
			$loan_date,
			$loan_amount,
			$loan_requestor,
			$loan_duration
		));
		redirect('loan/loans');
	}

	// view loan request t
	
	public function request()
	
		 $loans = $this->loan_model->view_loanrequest();
         $this->load->view('pages/loan/view_loan', ["loans"=>$loans]);
	}

	//display loan approval form\
	public function loan_approval($loan_id)
	{
		if (!$this->session->userdata('usertype') != "admin") {
			redirect('home');
		}
		$approve = $this->loan_model->approve_loan($loan_id);
		$this->load->view('pages/loan/approval', ["approve"=>$approve]);
	}

	public function FunctionName($value='')
	{
		# code...
	}

}
