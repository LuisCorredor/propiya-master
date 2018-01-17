<?php

	/*
		Detectar tipo de usuario para mostrar
		el menú correspondiente.
	*/
	$tipo = $this->session->userdata("tipo");

?>
<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYA - Cambiar contraseña</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/colors/orange.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
<?php require("globals/menu.php") ?>
<!-- Header Container / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Cambiar Contraseña</h2>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<!-- Widget -->
		<?php $this->load->view("globals/menu-".$tipo); ?>

		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6  my-profile">
					<form method="post" action="<?= site_url() ?>/seguridad/clave">
						<h4 class="margin-top-0 margin-bottom-30">Cambiar Contraseña</h4>
		    
		    			<!-- Success Message -->
		    			<div class="status error-box"><i class="fa fa-times"></i> Se ha producido un error al intentar cambiar su contraseña. Intente nuevamente más tarde.</div>

						<label>Nueva Contraseña</label>
						<input type="password" name="newpass" required>

						<label>Repetir Nueva Contraseña</label>
						<input type="password" name="chkpass" required>

						<button type="submit" class="margin-top-20 button">Guardar Cambios</button>
					</form>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Tu contraseña debe tener por lo menos 8 caracteres para que sea segura.</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<?php require("globals/footer.php") ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/chosen.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/rangeSlider.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/masonry.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/custom.js"></script>


</div>
<!-- Wrapper / End -->


</body>
</html>