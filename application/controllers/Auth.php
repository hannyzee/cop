<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	/**
	 *
	 */

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('auth_model');
		$this->session->set_userdata('myname', 'userid');
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
		$email = $this->input->post('email', true);

		$user = $this->db->query('SELECT * FROM users_login WHERE email = ? OR userid = ?', [$username, $username],[$email, $email])->row();
		}
		if(password_verify($password, $user->pword)){
			$this->session->set_userdata('userid', $user->userid);
			redirect('home');
		}
		else{
			echo "Wrong username or password";
		}
	}

    /*public function updatepassword()
    {
    	$email = $this->input->post('email');
    	$username = $this->input->post('userid');
    	$this->db->where('userid', $this->session->userdata('userid'));
    	$this->db->where('userid', $username);
    	$query = $this->db->get('users_login');
    	if ($query->num_rows() > 0) {
    		return 1;
    	}
    	else{
    		return 0;
    	}

    	// if sucessfull redirects to
        redirect('home',@$data);
    }
    public function savepassword($newpassword)
    {
    	$data = array('pword' => $newpassword);
    	$this->db->where('userid', $this->input->post('userid'));
    	$this->db->upddate('userid', $data);
    	return true;
    }
    */

	/**
	 * Displays the login form
	 *
	 * @return void
	 */
    public function login()
	{
		$this->load->view('pages/login');
	}


	public function sign_up()
	{
		$this->load->view('pages/register');
	}


	/**
	 * recover password
	 *
	 * @return void
	 */
	public function recover_password()
	{
		$this->load->view('pages/recover');
	}


	/**
	 * Processes the registeration form
	 *
	 * @return void
	 */
	public function register()
	{
		$username = $this->input->post('userid');
		$email = $this->input->post('email');
		$password = $this->input->post('pword');

		$this->auth_model->register_user(array(
			$username,
			$email,
			password_hash($password, PASSWORD_DEFAULT)
		));

		if (password_verify($password, $user->pword)) {
			// if sucessfull redirects to
	        redirect('members/membership',@$data);
		}
	}


	public function logout()
	{
		session_destroy();
		redirect('login');
	}
}
