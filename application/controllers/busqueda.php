<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(

			"filtros" => ""

		);

		$this->load->view("lista-busqueda", $data);
	}

}
?>