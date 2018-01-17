<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		redirect("home/buscar");
	}

	public function buscar()
	{
		$this->load->view('home');
	}
}
