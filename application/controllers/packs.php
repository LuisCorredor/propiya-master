<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packs extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function comprar()
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
			Detección de tipo de pack a comprar.
		*/
		$pack_name = $this->uri->segment(3);

		/*
			Anti-Uri Injector según nombre faltante del pack.
		*/
		if ($pack_name == "free" || $pack_name == "silver" || $pack_name == "gold")
		{
			/*
				Obtención de datos de packs membresíacos.
			*/
			$this->db->like("opcion", "pack_".$pack_name);
			$query  = $this->db->get("configs");
			$result = $query->result();

			foreach ($result as $data)
			{
				/*
					Packs Data
				*/
				if (strpos($data->opcion, "precio") > 0)
				{
					$precio = $data->valor;
				}
				if (strpos($data->opcion, "dias") > 0)
				{
					$dias = $data->valor;
				}
				if (strpos($data->opcion, "posts") > 0)
				{
					$posts = intval($data->valor);
				}
			}

			/*
				API de MercadoPago
			*/
			require_once ("mercadopago/mercadopago.php");

			/*
				Link de Credenciales:
				https://www.mercadopago.com/mla/herramientas/aplicaciones
			*/
			$client_id      = "7717099831017818";
			$client_secret  = "ujMadF2Lzu6F9F0FegAWnNUzqFVETu7G";
			$codigo_propiya = "";

			for($i = 0; $i < 64; $i++)
			{
				$codigo_propiya .= str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz")[0];
			}

			$mp = new MP ($client_id, $client_secret);

			$pack = array (
				
				// DATOS DE ADQUISICIÓN

			    "items" => array (
			        array (
			            "title"       => "PropiYa - Pack ".ucfirst($pack_name),
			            "quantity"    => 1,
			            "currency_id" => "ARG",
			            "unit_price"  => (float) $precio
			        )
			    ),

			    // DATOS DEL ABONANTE
			    
			    "payer" => array (
			    	"name"  => $this->session->userdata("nombre"),
			    	"email" => $this->session->userdata("user")
			    ),

			    // BACK URLs

			    "back_urls" => array (
			    	"failure" => "https://propiya.com/packs/failure/" . $codigo_propiya . "/" . $this->session->userdata('email'),
			    	"pending" => "https://propiya.com/packs/pending/" . $codigo_propiya . "/" . $this->session->userdata('email'),
			    	"success" => "https://propiya.com/packs/success/" . $codigo_propiya . "/" . $this->session->userdata('email')
			    )
			);

			$response = $mp->create_preference($pack);

			$output = json_encode($response);
			echo "<script>console.log(" . $output . ");</script>";
			
			$data = array (
				"pack"   => ucfirst($pack_name),
				"mpago"  => $response["response"]["sandbox_init_point"],
				"codigo" => $codigo_propiya
			);

			/*
				Datos de la compra.
			*/
			$fecha = explode("T", $response["response"]["date_created"]);
			$pago  = array (
				"user"   => $this->session->userdata("id"),
				"pack"   => $pack_name,
				"pago"   => $data["mpago"],
				"codigo" => $data["codigo"],
				"estado" => "pendiente",
				"monto"  => (float) $precio,
				"fecha"  => $fecha[0]." ".$fecha[1],
			);

			/*
				Inserción de datos de la compra en DB.
			echo "<pre>";
			print_r($response["response"]);
			echo "</pre>";
			*/
			
			$this->db->insert("pagos", $pago);

			$this->load->view("packs-mercadopago", $data);

		}
		else
		{
			redirect("packs");
			die();
		}


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
			Obtención de datos de packs membresíacos.
		*/
		$this->db->like("opcion", "pack_");
		$query  = $this->db->get("configs");
		$result = $query->result();
		$pack   = [];

		$buffer = array("free", "silver", "gold");

		foreach ($result as $data)
		{
			/*
				Packs Data
			*/
			foreach ($buffer as $pack_name)
			{
				if ($data->opcion == "pack_".$pack_name."_precio")
				{
					$pack[$pack_name]["precio"] = floatval($data->valor);
				}
				if ($data->opcion == "pack_".$pack_name."_dias")
				{
					$pack[$pack_name]["dias"] = $data->valor;
				}
				if ($data->opcion == "pack_".$pack_name."_posts")
				{
					$pack[$pack_name]["posts"] = intval($data->valor);
				}
			}
		}

		/*
			Arreglo de mensajes en la lista de packs.
		*/
		foreach ($buffer as $data) {
			if ($pack[$data]["posts"] == 0)
			{
				$pack[$data]["posts_msg"] = "Publicaciones ilimitadas por ".$pack[$data]["dias"]." días.";
			}
			else if ($pack[$data]["posts"] == 1)
			{
				$pack[$data]["posts_msg"] = "1 publicación cada ".$pack[$data]["dias"]." días.";
			}
			else
			{
				$pack[$data]["posts_msg"] = $pack[$data]["posts"]." publicaciones cada ".$pack[$data]["dias"]." días.";
			}
		}

		/*
			Pack de membresía de usuario.
		*/
		if ($pack["gold"]["posts"] == 0)
		$data = array(

			"pack" => (object) array(

				"free" => (object) array(
					"titulo"  => "Free",
					"precio"  => "$".$pack["free"]["precio"],
					"info"    => array(
						$pack["free"]["posts_msg"],
						$pack["free"]["dias"]." días disponibles."
					)
				),

				"silver" => (object) array(
					"titulo"  => "Silver",
					"precio"  => "$".$pack["silver"]["precio"],
					"info"    => array(
						$pack["silver"]["posts_msg"],
						$pack["silver"]["dias"]." días disponibles."
					)
				),

				"gold" => (object) array(
					"titulo"  => "Gold",
					"precio"  => "$".$pack["gold"]["precio"],
					"info"    => array(
						$pack["gold"]["posts_msg"],
						$pack["gold"]["dias"]." días disponibles."
					)
				)

			)

		);

		/*
			Front-end del perfil
		*/
		$this->load->view("packs", $data);
	}

}
?>