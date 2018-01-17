<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Acceso extends CI_Controller {
	function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$sesion = $this->session->userdata("logged");

		if ($sesion)
		{
			redirect("perfil");
			die();
		}

		/*
			Cargar formulario de registro
			e inicio de sesión.
		*/
		$this->load->view('acceso');
	}
	public function iniciar()
    {
         
        /*
			Guardar variables POST
			en variables normales.
        */   
        $email = $this->input->post("email");
        $pass  = $this->input->post("pass");
        $pass  = sha1($pass);
        
        $this->db->where(array(
        	"email" => $email,
        	"pass" => $pass
        ));

        $query = $this->db->get('usuarios');

        if($query->num_rows() == 1)
        {
         
         	/*
				Obtener datos personales.
         	*/
            $sql    = "SELECT * FROM datos_personales WHERE email='$email'";
            $query  = $this->db->query($sql);
            $result = array_shift($query->result_array());
            
            $array = array(
                "logged"       => true,
                "id"           => $result["usuario"],
                "email"        => $result["email"],
                "agencia"      => $result["agencia"],
                "constructora" => $result["constructora"],
                "nombre"       => $result["nombre"],
                "telefono"     => $result["telefono"],
                "acerca"       => $result["acerca"],
                "twitter"      => $result["twitter"],
                "facebook"     => $result["facebook"],
                "google"       => $result["google"],
                "linkedin"     => $result["linkedin"]
            );
         
         	/*
				Obtener id de tipo de usuario
				y tipo de membresía.
         	*/
            $id     = $array["id"];
            $sql    = "SELECT * FROM usuarios WHERE id='$id'";
            $query  = $this->db->query($sql);
            $result = array_shift($query->result_array());

            $array = array_merge($array,
            	array(
            		"tipo"       => $result["tipo"],
            		"pack"       => $result["pack"],
            		"verificado" => $result["verificado"]
            	)
            );
         
         	/*
				Obtener string de tipo de usuario
				según el id indicado.
         	*/
            $id = $array["tipo"];
            $sql    = "SELECT * FROM tipos_usuario WHERE id='$id'";
            $query  = $this->db->query($sql);
            $result = array_shift($query->result_array());
            $array["tipo"] = $result["tipo"];
         
         	/*
				Iniciar datos de sesión y
				redireccionar al perfil de usuario.
         	*/
            $this->session->set_userdata($array);
            redirect('perfil');

        } else {
                $this->load->view("error-login");
        }
	}
    
	public function cerrar()
	{
		/*
			Destruir sesión y redireccionar
			al login / register.
		*/
		$this->session->sess_destroy();
		redirect('acceso');
	}
	public function activado()
	{
		/*
			Cargar formulario de registro
			e inicio de sesión informando que
			la cuenta fue activada.
		*/
		$this->load->view('success-register');
	}
	public function activar()
	{
		$token = $this->uri->segment(3);
		if ($token != "" && strlen($token) == 50)
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
				Activar cuenta de usuario según
				el ID obtenido.
			*/
			$this->db->where("id", $user);
			$this->db->update("usuarios", array(
				"activado" => "1"
			));
			
			/*
				Rediccionar registro / inicio de
				sesión informando que la cuenta fue
				activada.
			*/
			redirect("/acceso/activado");
		}
		else
		{
			/*
				Redireccionar al formulario de 
				registro / login si no se detectó 
				un Token correcto.
			*/
			redirect("/acceso");
		}
	}
}