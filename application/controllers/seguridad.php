<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {

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
		$this->load->view("cambiar-clave");
	}

	public function clave()
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
		else
		{
			$pass = array(
				"new" => $this->input->post("newpass"),
				"chk" => $this->input->post("chkpass")
			);

			if ($pass["new"] == $pass["chk"] && strlen($pass["new"]) >= 6)
			{
				$array = array(
					"pass" => sha1($pass["new"])
				);

				$this->db->where("id", $this->session->userdata("id"));
				$this->db->update("usuarios", $array);
				$this->load->view("cambiar-clave-ok");
			}
			else
			{
				$this->load->view("cambiar-clave-desigual");
			}
		}
	}

	public function error()
	{
		$this->load->view("cambiar-clave-error");
	}

}
?>