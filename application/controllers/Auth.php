<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/login');
	}
    
   /**
	 * Processes the login form
	 * @return void
	 */
   public function authentication()
   {
   		$this->load->library('form_validation');

    	$this->form_validation->set_rules('userid', 'Userid', 'required');
    	$this->form_validation->set_rules('pword', 'Pword', 'required');

        if ($this->form_validation->run() == TRUE)
        {
    	$this->load->model('auth_model');
		$username = $this->input->post('userid', true);
		$password = $this->input->post('pword', true);

		$user = $this->db->query('SELECT * FROM users WHERE eemail = ? OR userid = ?', [$username, $username])->row();
		}
		if(password_verify($password, $user->pword)){
			$this->session->set_userdata('userid', $user->userid);
			redirect('home');
		}
		else{
			echo "Wrong username or password";
		}
	}


    public function login()
	{
		$this->load->view('pages/login');
	}

	public function sign_up()
	{
		$this->load->view('pages/register');
	}

	/**
	 * Processes the registeration form
	 * @return void
	 */

	public function register()
	{
		$this->load->model('auth_model');

		$username = $this->input->post('userid');
		$email = $this->input->post('eemail');
		$password = $this->input->post('pword');

		$this->auth_model->register_user(array(
			$username,
			$email,
			password_hash($password, PASSWORD_DEFAULT)
		));

		// if sucessfull redirects to
        redirect('members/membership');    

	}
    
    public function membership($userid)
	{
		 $regmeb = $this->member_model->reg_members();
         $this->load->view('pages/members', ["regmeb"=>$regmeb]);
	}
	public function logout()
	{
		session_destroy();
		redirect('login');
	}
	
}
