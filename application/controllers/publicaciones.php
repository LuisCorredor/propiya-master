<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones extends CI_Controller {

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

		$query = $this->db->from('propiedad')
					  ->where('usuario_id', $this->session->userdata("id"))
					  ->get();

		if ($query->num_rows() > 0)
			$data['publicaciones'] = $query->result();
		else
			$data['publicaciones'] = [];

		/*
			Front-end del perfil
		*/
		$this->load->view("publicaciones", $data);
	}

}