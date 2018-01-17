<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MercadoPago extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		require_once ("mercadopago/mercadopago.php");

		/*
			Link de Credenciales:
			https://www.mercadopago.com/mla/herramientas/aplicaciones
		*/
		$client_id     = "7717099831017818";
		$client_secret = "ujMadF2Lzu6F9F0FegAWnNUzqFVETu7G";

		$mp = new MP ($client_id, $client_secret);

		/*
			Datos del pack de membresía a comprar.
		*/
		$pack = array (
			
			// DATOS DE ADQUISICIÓN

		    "items" => array (
		        array (
		            "title"       => "Test",
		            "quantity"    => 1,
		            "currency_id" => "ARG",
		            "unit_price"  => 0.01
		        )
		    ),

		    // DATOS DEL ABONANTE
		    
		    "payer" => array (
		    	"name"  => $this->session->userdata("nombre"),
		    	"email" => $this->session->userdata("user")
		    )
		);

		$response = $mp->create_preference($pack);
		$pago     = $response["response"]["id"];
		$link     = $response["response"]["init_point"];

	}
}
?>