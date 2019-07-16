<?php
/**
 * 
 */
class Account extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
		if (!$this->session->userdata('userid')) {
			redirect('login');
		}	
	}

    public function account_type()
	{
		$this->load->view('pages/accounts/accountype.php');
	}
	public function create_account()
	{
		$account_id = $this->input->post('acctid');
		$account_name = $this->input->post('acctname');
		$minimum_balance = $this->input->post('minbalance');
		$fixed_charges = $this->input->post('fixcharge');
		$discription = $this->input->post('dicrip');
		$created_by = $this->input->post('createdby');
		$date_created = $this->input->post('datecreated');

		$this->account_model->accounts(array(
			$account_id,
			$account_name,
			$minimum_balance,
			$fixed_charges,
			$discription,
			$created_by,
			$date_created
		));
		redirect ('home');

	}

	//displays types of  account(account type)
	public function manage()
	{
	 	 $acctype = $this->account_model->view_accountype();
         $this->load->view('pages/accounts/view_account', ["acctype"=>$acctype]);
	}

}