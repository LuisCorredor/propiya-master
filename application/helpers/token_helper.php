<?php

	/*
		Función para generar Tokens
		de 50 caracteres.
		(no quitar el +1 del FOR)
	*/
	function generarToken()
	{
		$len = 50;
		$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
		$buffer = "";

		for ($i = 0; $i < $len + 1; $i++)
		{ 
			$buffer .= substr($chars, rand(0, strlen($chars)), 1);
		}

		return $buffer;
	}

?>