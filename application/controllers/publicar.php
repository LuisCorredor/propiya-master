<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {

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
		$this->load->view("publicar-inmueble");
	}

	public function store()
	{
		/*
			Obtener variables POST enviadas
			por el formulario de registro.
		*/
		$data = $this->input->post();

		if (isset($data['checks'])) {
			$str = '';
			foreach ($data['checks'] as $value)
				$str.= $value.'|';

			$str = substr($str, 0, -1);

			unset($data['checks']);
			$data['OtrasCaracteristicas'] = $str;
		}

		$data['usuario_id'] = $this->session->userdata("id");

		/*
		 * Agregar los datos previos en la
		 * tabla Propiedad
		 */
		$this->db->insert('propiedad', $data);

		redirect("publicaciones");
	}

}
?>