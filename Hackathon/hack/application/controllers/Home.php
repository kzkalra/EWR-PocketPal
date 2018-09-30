<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('string');
	}

	public function index() {
		$user = $this->session->userdata('username');

		if ($user) {
			$data['user'] = $user;
			$this->load->view('home', $data, FALSE);
		}

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */