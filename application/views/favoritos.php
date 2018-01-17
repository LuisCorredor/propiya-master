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

				<h2>Listado de Favoritos</h2>

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
			<table class="manage-table bookmarks-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Favoritos</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
				<tr>
					<td class="title-container">
						<img src="<?= base_url() ?>/assets/images/listing-05.jpg" alt="">
						<div class="title">
							<h4><a href="#">Oak Tree Villas</a></h4>
							<span>71 Lower River Dr. Bronx, NY</span>
							<span class="table-property-price">$535,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Eliminar</a>
					</td>
				</tr>


				<!-- Item #2 -->
				<tr>
					<td class="title-container">
						<img src="<?= base_url() ?>/assets/images/listing-06.jpg" alt="">
						<div class="title">
							<h4><a href="#">Old Town Manchester</a></h4>
							<span> 7843 Durham Avenue, MD  </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Eliminar</a>
					</td>
				</tr>

				<!-- Item #3 -->
				<tr>
					<td class="title-container">
						<img src="<?= base_url() ?>/assets/images/listing-02.jpg" alt="">
						<div class="title">
							<h4><a href="#">Serene Uptown</a></h4>
							<span>6 Bishop Ave. Perkasie, PA </span>
							<span class="table-property-price">$900 / monthly</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Eliminar</a>
					</td>
				</tr>


				<!-- Item #4 -->
				<tr>
					<td class="title-container">
						<img src="<?= base_url() ?>/assets/images/listing-04.jpg" alt="">
						<div class="title">
							<h4><a href="#">Selway Apartments</a></h4>
							<span>33 William St. Northbrook, IL </span>
							<span class="table-property-price">$420,000</span>
						</div>
					</td>
					<td class="action">
						<a href="#" class="delete"><i class="fa fa-remove"></i> Eliminar</a>
					</td>
				</tr>

			</table>
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