<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('userid')) {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('pages/dashboard');
	}


	public function details()
	{
		$this->load->view('pages/users');
	}

	public function open_account()
	{	
		$userid = $this->session->userdata('userid');
		$this->load->view('pages/accounts/account');
	}

	public function loans()

	{
		$this->load->view('pages/loan/loan');
	}

	public function approve_loan()

	{
		$this->load->view('pages/loan/approval');
	}

	public function deposits()

	{
		$this->load->view('pages/accounts/deposit.php');
	}

	public function balance()

	{
		$this->load->view('pages/accounts/balance.php');
	}

	public function withdraw()
	{
		$this->load->view('pages/accounts/withdrawal');
	}

	public function contribute()
	{
		$this->load->view('pages/contribution');
	}

	public function contacts()
	{
		$this->load->view('pages/contact');
	}

	public function contribution_status()
	{
		$this->load->view('pages/contribution_status');
	}


}
