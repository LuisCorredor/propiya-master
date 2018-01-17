<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header id="header-container">

	<!-- Topbar -->
	<div id="top-bar">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Top bar -->
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i> (03492) 123-456 </li>
					<li><i class="fa fa-envelope"></i> <a href="#">hola@propiya.com</a></li>
					<li>
						<div class="top-bar-dropdown">
							<span>&iquest;Sos Agencia?</span>
							<ul class="options">
								<li><div class="arrow"></div></li>
								<li><a href="#">&iquest;C&oacute;mo registrar una Agencia?</a></li>
								<li><a href="#">&iquest;C&oacute;mo publicito una propiedad?</a></li>
								<li><a href="#">Quiero que me contacten</a></li>
							</ul>
						</div>
					</li>
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
				</ul>

			</div>
			<!-- Left Side Content / End -->

		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Topbar / End -->


	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="/"><img src="<?= base_url() ?>assets/images/logo.png" alt=""></a>
				</div>


				<!-- Mobile Navigation -->
				<div class="menu-responsive">
					<i class="fa fa-reorder menu-trigger"></i>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="current" href="<?= base_url() ?>"><i class="sl sl-icon-home"></i> Home</a></li>
						<li><a href="#">Tutoriales</a></li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					<!--
					<a href="my-profile.php" class="sign-in"><i class="fa fa-user"></i> Nombre</a>
					-->
					<?php
						if ($this->session->userdata("logged") == false)
						{
					?>
					<a href="<?= site_url() ?>/acceso" class="sign-in"><i class="fa fa-user"></i> Entrar / Registrar</a>
					<a href="#" class="button border">Publicar Propiedad</a>
					<?php
						}
						else
						{
					?>
					<?php
						$nombre       = $this->session->userdata("nombre");
						$agencia      = $this->session->userdata("agencia");
						$constructora = $this->session->userdata("constructora");
						$alias        = "";

						if ($nombre != "")
						{
							$alias = $nombre;
						}

						if ($agencia != "")
						{
							$alias = $agencia;
						}

						if ($constructora != "")
						{
							$alias = $constructora;
						}
					?>
					<a href="<?= site_url() ?>/perfil" class="sign-in"><i class="fa fa-user"></i> <?= $alias ?></a>
					<a href="<?= site_url() ?>/publicar" class="button border">Publicar Propiedad</a>
					<?php
						}
					?>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>