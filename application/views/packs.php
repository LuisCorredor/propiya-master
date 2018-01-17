<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYA - Paquetes de membres&iacute;a</title>
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



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Paquetes de Membres&iacute;a</h2>

			</div>
		</div>
	</div>
</div>


<!-- Pricing Tables
================================================== -->

<!-- Container / Start -->
<div class="container">

	<!-- Row / Start -->
	<div class="row">

		<div class="col-md-12">
			<div class="pricing-container margin-top-30">

			<!-- Plan #1 -->

				<div class="plan">

					<div class="plan-price">
						<h3><?= $pack->free->titulo; ?></h3>
						<span class="value"><?= $pack->free->precio; ?></span>
					</div>

					<div class="plan-features">
						<ul>
							<?php
								foreach ($pack->free->info as $info) {
							?>
							<li><?= $info ?></li>
							<?php
								}
							?>
						</ul>
						<a class="button border" href="<?php echo site_url() ?>/packs/comprar/free">Conseguir</a>
					</div>

				</div>

				<!-- Plan #3 -->
				<div class="plan featured">

					<div class="listing-badges">
						<span class="featured">Destacado</span>
					</div>

					<div class="plan-price">
						<h3><?= $pack->gold->titulo; ?></h3>
						<span class="value"><?= $pack->gold->precio; ?></span>
					</div>
					<div class="plan-features">
						<ul>
							<?php
								foreach ($pack->gold->info as $info) {
							?>
							<li><?= $info ?></li>
							<?php
								}
							?>
						</ul>
						<a class="button" href="<?php echo site_url() ?>/packs/comprar/gold">Conseguir</a>
					</div>
				</div>

				<!-- Plan #3 -->
				<div class="plan">

					<div class="plan-price">
						<h3><?= $pack->silver->titulo; ?></h3>
						<span class="value"><?= $pack->silver->precio; ?></span>
					</div>

					<div class="plan-features">
						<ul>
							<?php
								foreach ($pack->silver->info as $info) {
							?>
							<li><?= $info ?></li>
							<?php
								}
							?>
						</ul>
						<a class="button border" href="<?php echo site_url() ?>/packs/comprar/silver">Conseguir</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Row / End -->

</div>
<!-- Container / End -->


<!-- Footer
================================================== -->
<?php include("globals/footer.php"); ?>
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