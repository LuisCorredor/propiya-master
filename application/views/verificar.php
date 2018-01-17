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
<title>PropiYA - Verificar Agencia</title>
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

				<h2>Verificar Agencia</h2>

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
					<h4 class="margin-top-0 margin-bottom-30">Cambiar Contraseña</h4>

					<p>Para poder verificar su agencia, haga click en el botón que se encuentra debajo.</p>

					<p>Dentro de las 24 hs recibirá una email de confirmación a su email con un link al cual debe hacerle click para finalizar la verificación.</p>

					<a href="submit-property.html" class="margin-top-20 button">Verificar</a>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Recuerde revisar su casilla de spam en caso de no ver el email en su bandeja de entrada.</p>
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