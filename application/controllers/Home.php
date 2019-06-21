<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/dashboard');
	}

	public function sign_up()
	{
		$this->load->view('pages/register');
	}

	public function details()
	{
		$this->load->view('pages/users');
	}

	public function open_account()

	{
		$this->load->view('pages/account');
	}

	public function loans()

	{
		$this->load->view('pages/loan');
	}

	public function approve_loan()

	{
		$this->load->view('pages/approval');
	}

	public function deposits()

	{
		$this->load->view('pages/deposit.php');
	}

	public function balance()

	{
		$this->load->view('pages/balance.php');
	}
	public function account_type()
	{
		$this->load->view('pages/accountype.php');
	}

	public function manages()
	{
		$this->load->view('pages/manage_account');
	}

	public function request()
	{
		$this->load->view('pages/view_loan');
	}

	public function withdraw()
	{
		$this->load->view('pages/withdrawal');
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
