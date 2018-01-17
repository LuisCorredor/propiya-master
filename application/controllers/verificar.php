<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verificar extends CI_Controller {

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
			Detección de tipo de usuario.
		*/
		$tipo   = $this->session->userdata("tipo");
		$perfil = "perfil-".$tipo;

		/*
			Redirigir a verificación de agencia
			sólo si es un usuario de tipo agencia.
		*/
		if ($tipo == "particular" || $tipo == "")
		{
			redirect("perfil");
			die();
		}

		/*
			Front-end del perfil
		*/
		$this->load->view("verificar");
	}

	public function agencia()
	{
		/*
			Obtener token de usuario a verificar.
		*/
		$token = $this->uri->segment(3);

		if ($token == "")
		{
			/*
				Si no se definió el token correspondiente
				al usuario, se redirecciona al perfil.

			*/
			redirect("perfil");
		}
		else
		{
			/*
				Obtener ID de usuario según
				Token ingresado.
			*/
			$this->db->from("tokens");
			$this->db->where("token", $token);
			$query = $this->db->get();
			$result = $query->result_array();

			/*
				Convertir array 2d a array común.
			*/
			$result = array_shift($result);
			$user   = $result["user"];
			
			/*
				Verificar agencia según
				el ID obtenido.
			*/
			$this->db->where("id", $user);
			$this->db->update("usuarios", array(
				"verificado" => "1"
			));

			/*
				Rediccionar al perfil.
			*/
			redirect("perfil");
		}
	}

}
?>