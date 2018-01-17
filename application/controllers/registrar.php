<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("token");
	}

	public function index()
	{
		/*
			Redireccionar al formulario de
			registro / login si se ingresa una
			URI incompleta.
		*/
		redirect("/acceso");
	}

	public function verificar()
	{
		/*
			Obtener variables POST
			del Ajax.
		*/
		$data = $this->input->post();

		/*
			Buscar existencia de usuario
			en la base de datos según email.
		*/
		$this->db->from("usuarios");
		$this->db->where("email", $data["check"]);

		/*
			Ejecución de Query y almacenamiento
			de resultados en un array.
		*/
		$query = $this->db->get();
		$result = $query->result_array();

		/*
			Conversión de array 2d a array normal.
		*/
		$result = array_shift($result);

		/*
			Mostrar ID de usuario.
		*/
		echo $result["id"];
	}

	public function datos()
	{
		/*
			Obtener variables POST enviadas
			por el formulario de registro.
		*/
		$data = $this->input->post();

		/*
			Si hay variables POST...
		*/
		if (count($data) > 0)
		{

			/*
				Almacenamiento prolijo de
				variables POST.
			*/
			$tipo   = $data["tipo"];
			$nombre = $data["name"];
			$email  = $data["email"];
			$pass   = $data["password1"];

			/*
				Datos de usuario a registrar,
				con contraseña SHA1.
			*/
			$buffer = array(
				"tipo"  => $tipo,
				"pack"  => "free",
				"email" => $email,
				"pass"  => sha1($pass)
			);

			/*
				Agregar cuenta de usuario
				y obtener ID generada.
			*/
			$this->db->insert('usuarios', $buffer);
			$last_id = $this->db->insert_id();

			/*
				Generar Token de usuario.
			*/
			$token = generarToken();

			/*
				Datos a agregar en la tabla
				Tokens.
			*/
			$buffer = array(
				"user"  => $last_id,
				"fecha" => date("Y-m-d H:i:s"),
				"token" => $token
			);

			/*
				Insertar los datos previos en
				la tabla Tokens.
			*/
			$this->db->insert('tokens', $buffer);

			/*
				Datos personales básicos
				del usuario.
			*/
			$buffer = array(
				"usuario" => $last_id,
				"nombre"  => $nombre,
				"email"   => $email
			);

			/*
				Agregar los datos previos en la
				tabla Datos_Personales
			*/
			$this->db->insert('datos_personales', $buffer);

			/*
				Cargar Front-End de registro
				finalizado.
			*/
			$this->load->view("register-ok");
		}
		else
		{
			/*
				Si no hay variables POST,
				redireccionar al registro / login.
			*/
			redirect("acceso");
		}
	}
}

