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
<title>PropiYA - Mis Favoritos</title>
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

				<h2>Mis Publicaciones</h2>

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
			<table class="manage-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Propiedades</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Fecha de Vencimiento</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				<?php foreach ($publicaciones as $publicacion) { ?>
					<tr>
						<td class="title-container">
							<img src="<?= base_url() ?>/assets/images/listing-02.jpg" alt="">
							<div class="title">
								<h4><a href="#"><?= $publicacion->TituloPropiedad ?></a></h4>
								<span><?= 
									$publicacion->Direccion.', '.$publicacion->Ciudad.', '.$publicacion->CodigoPostal.' '.$publicacion->Provincia
								?></span>
								<span class="table-property-price">$<?= $publicacion->Precio ?> / monthly</span>
							</div>
						</td>
						<td class="expire-date">December 30, 2016</td>
						<td class="action">
							<a href="#"><i class="fa fa-pencil"></i> Editar</a>
							<a href="#"><i class="fa  fa-eye-slash"></i> Ocultar</a>
							<a href="#" class="delete"><i class="fa fa-remove"></i> Eliminar</a>
						</td>
					</tr>
				<?php } ?>
				<?php if (count($publicaciones) == 0) { ?>
					<tr>
						<td colspan="3">
							<h4>No tienes propiedades publicadas</h4>
						</td>
					</tr>
				<?php } ?>
			</table>
			<a href="submit-property.html" class="margin-top-40 button">Submit New Property</a>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<?php require("globals/footer.php") ?>
<!-- Footer / End -->

</div>
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