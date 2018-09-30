<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('string');
	}

	public function checkLogin() {
		$user_fname = $this->session->userdata('user_fname');
		if ($user_fname == '') {
			$path = $this->config->site_url() . "welcome";
			header("location:$path");
			exit;
		}
	}

	public function index($err = '') {
		//   $this->checkLogin();
		$error = '';
		$this->load->helper('url');
		$this->load->database();

		if (isset($_POST['submit'])) {

			$username = $this->input->post('email');

			$password = MD5($this->input->post('password'));

			if (strcasecmp($username, "admin") == 0 && strcmp($password, MD5("admin")) == 0) {
				$data['error'] = '';

				$userData = array(
					'username' => $username,
					'logged_in' => TRUE,
				);
				$this->session->set_userdata($userData);
			} else {

				$error = 'Invalid Username or Password';

			}
		}

		if ($this->session->userdata('username')) {
			$data['error'] = '';
			$path = "/index.php/home";
			header("location:" . $this->config->item('base_url') . $path);
			exit;
		} else {
			$data['error'] = $error;
			$this->load->view('welcome_message', $data);
		}
	}
	/* Functionality for logging out of the database*/
	function logout() {

		$array_items = array('user_id' => '', 'email' => '', 'user_fname' => '', 'user_lname' => '');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		$path = 'welcome';
		header("location:" . $this->config->item('base_url') . $path);
	}
}
