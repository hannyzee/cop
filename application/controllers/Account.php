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
		$this->load->library('session');
	    $this->session->set_userdata('myname', 'userid');
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
         $this->load->view('pages/accounts/account_table', ["acctype"=>$acctype]);
	}

	public function view_account($acctid)
	{
		 $accts = $this->account_model->acctype($acctid);
         $this->load->view('pages/accounts/view_account', ["accts"=>$accts]);
	}

	/*
	//update account
	public function update_acct()
	{
		$account_id = $this->input->post('acctid');
		$data = array(
			'account_name' => $this->input->post('acctname'),
			'minimum_balance' => $this->input->post('minbalance'),
			'fixed_charge' => $this->input->post('fixcharge'),
			'account_name' => $this->input->post('acctname'),
			'discription' => $this->input->post('discrip'),
			'date_created' => $this->input->post('datecreated'),
		);
		$this->account_model->acctype($account_id,$updatacct);
		$this->load->view('pages/accounts/update_account');
		$data['updateacct'] = $this->load->Account_model->acctype('$acctid');
		if (!empty($data['updateacct'])) {
			$this->load->view('pages/accounts/update_account',$data);
		}else{
			redirect(site_url());
		}
	}
*/

	public function update_acct()
	{
		$account_id = $this->input->post('acctid');
		$data = array(
			'account_name' => $this->input->post('acctname'),
			'minimum_balance' => $this->input->post('minbalance'),
			'fixed_charge' => $this->input->post('fixcharge'),
			'account_name' => $this->input->post('acctname'),
			'discription' => $this->input->post('discrip'),
			'date_created' => $this->input->post('datecreated'),
		);
		$this->account_model->acctype($account_id); 
		$this->load->view('accounts/update_account');
	}

}