<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favoritos extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		/*
			Redireccionar al login / register si la
			sesión no fue iniciada previamente.
		*/
		if ($this->session->userdata("logged") != true)
		{
			redirect("acceso");
			die();
		}

		/*
			Detección de tipo de usuario
		*/
		$tipo   = $this->session->userdata("tipo");
		$perfil = "perfil-".$tipo;

		/*
			Front-end del perfil
		*/
		$this->load->view("favoritos");
	}

}