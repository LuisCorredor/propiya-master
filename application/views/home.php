<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYA - Somos la web d&oacute;nde encontrar&aacute;s tu pr&oacute;ximo hogar</title>
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
<?php require(__DIR__."/globals/menu.php") ?>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
<div class="parallax" data-background="<?= base_url() ?>/assets/images/home-parallax.jpg" data-color="#36383e" data-color-opacity="0.5" data-img-width="2500" data-img-height="1600">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="search-container">

					<!-- Form -->
					<h2>Encontr&aacute; tu pr&oacute;ximo hogar en PropiYA.com</h2>

					<!-- Row With Forms -->
					<div class="row with-forms">

						<!-- Property Type -->
						<div class="col-md-3">
							<select data-placeholder="Any Type" class="chosen-select-no-single" >
								<option>Departamento</option>
								<option>Casa</option>
								<option>Inmueble Comercial</option>
								<option>Cochera</option>
								<option>Terreno/Lote</option>
							</select>
						</div>

						<!-- Status -->
						<div class="col-md-3">
							<select data-placeholder="Any Status" class="chosen-select-no-single" >	
								<option>En Venta</option>
								<option>En Alquiler</option>
								<option>En Alquiler Temporal</option>
							</select>
						</div>

						<!-- Main Search Input -->
						<div class="col-md-6">
							<div class="main-search-input">
								<input type="text" placeholder="Busc&aacute; por ubicaci&oacute;n, direcci&oacute;n o palabra clave" value=""/>
								<button class="button" onclick="$(location).attr('href', 'listings-list-full-width.html')"><i class="fa fa-search"></i></button>
							</div>
						</div>

					</div>
					<!-- Row With Forms / End -->

					<!-- Browse Jobs -->
					<div class="adv-search-btn">
						Antes buscaste por: <a href="listings-list-full-width.html">Acá va la última búsqueda del usuario</a>
					</div>
					
					<!-- Announce -->
					<div class="announce">
						Tenemos más de 1000 propiedades para vos!
					</div>

				</div>

			</div>
		</div>
	</div>

</div>


		
<!-- Content
================================================== -->
<div class="container">
	<div class="row">
	
		<div class="col-md-12">
			<h3 class="headline margin-bottom-25 margin-top-65">Propiedades Destacadas</h3>
		</div>
		
		<!-- Carousel -->
		<div class="col-md-12">
			<div class="carousel">
				
				<!-- Listing Item -->
					<div class="carousel-item">
					<div class="listing-item">

						<a href="single-property-page-2.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Excelente</span>
								<span>En Venta</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">U$S 275,000 <i>U$S 520 / m2</i></span>
								<span class="like-icon tooltip"></span>
							</div>

							<div class="listing-carousel">
								<div><img src="<?= base_url() ?>/assets/images/listing-01.jpg" alt=""></div>
								<div><img src="<?= base_url() ?>/assets/images/listing-01b.jpg" alt=""></div>
								<div><img src="<?= base_url() ?>/assets/images/listing-01c.jpg" alt=""></div>
							</div>

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="single-property-page-2.html">3 de Febrero 257</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									3 de Febrero 257, Rafaela, Santa Fe
								</a>
							</div>

							<ul class="listing-features">
								<li>Sup. Cubierta <span>68 m2</span></li>
								<li>Ambientes <span>2</span></li>
								<li>Ba&ntilde;os <span>1</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-building-o"></i> Agencia de Rafaela <i style="color: #5d93fe;" class="fa fa-check-circle" title="Agencia Verificada"></i></a>
								<span><i class="fa fa-calendar-o"></i> 10-03-2017</span>
							</div>

						</div>

					</div>
				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item">

						<a href="single-property-page-2.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">A Estrenar</span>
								<span>En Alquiler</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">$ 900 <i>mensual</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="<?= base_url() ?>/assets/images/listing-02.jpg" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="single-property-page-2.html">Alquilo dpto en Sunchales</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									José Ingenieros 846, Sunchales, Santa Fe
								</a>
							</div>

							<ul class="listing-features">
								<li>Sup. Cubierta <span>66 m2</span></li>
								<li>Ambientes <span>3</span></li>
								<li>Ba&ntilde;os <span>2</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> David Gómez</a>
								<span><i class="fa fa-calendar-o"></i> 10-03-2017</span>
							</div>

						</div>

					</div>
				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item">


						<a href="single-property-page-2.html" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">Oportunidad</span>
								<span>En Alquiler Temporal</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">$ 2500 <i>Precio Alq. Temp.</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="<?= base_url() ?>/assets/images/listing-03.jpg" alt="">

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="single-property-page-2.html">Alquilo casa quinta en Esperanza</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									Donnet 241, Esperanza, Santa Fe
								</a>
							</div>

							<ul class="listing-features">
								<li>Sup. Total <span>800 m2</span></li>
								<li>Ambientes <span>6</span></li>
								<li>Ba&ntilde;os <span>3</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> Micaela Miller</a>
								<span><i class="fa fa-calendar-o"></i> 12-02-2017</span>
							</div>

						</div>
						<!-- Listing Item / End -->

					</div>
				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item">


						<a href="single-property-page-3.html" class="listing-img-container">

							<div class="listing-badges">
								<span>En Venta</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">U$S 30,000<i>Lote</i></span>
								<span class="like-icon"></span>
							</div>

							<div class="listing-carousel">
								<div><img src="<?= base_url() ?>/assets/images/listing-04.jpg" alt=""></div>
								<div><img src="<?= base_url() ?>/assets/images/listing-04b.jpg" alt=""></div>
							</div>

						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="single-property-page-3.html">Vendo lote en Rafaela</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									Calle Padre Normando Corti, Rafaela, Santa Fe
								</a>
							</div>

							<ul class="listing-features">
								<li>Sup. Total <span>420 m2</span></li>
								<li>Frente <span>20 m</span></li>
								<li>Fondo <span>40 m</span></li>
								<li>FOT <span>0</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-building-o"></i> Agencia de Esperanza <i style="color: #5d93fe;" class="fa fa-check-circle" title="Agencia Verificada"></i></a>
								<span><i class="fa fa-calendar-o"></i> 05-01-2017</span>
							</div>

						</div>
						<!-- Listing Item / End -->

					</div>
				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item">


						<a href="single-property-page-2.html" class="listing-img-container">
							<div class="listing-badges">
								<span class="featured">Oportunidad</span>
								<span>En Venta</span>
							</div>

							<div class="listing-img-content">
								<span class="listing-price">$ 200,000 <i>Lavadero de Ropa</i></span>
								<span class="like-icon"></span>
							</div>

							<img src="<?= base_url() ?>/assets/images/listing-05.jpg" alt="">
						</a>
						
						<div class="listing-content">

							<div class="listing-title">
								<h4><a href="single-property-page-2.html">Fondo de Comercio en Rafaela</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									Bv. G. Lehmann 425, Rafaela, Santa Fe
								</a>
							</div>

							<ul class="listing-features">
								<li>Estado <span>Muy Bueno</span></li>
								<li>Tipo de Fondo <span>Lavadero de Ropa</span></li>
								<li>Antigüedad <span>5 años</span></li>
							</ul>

							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> Mabel Calero</a>
								<span><i class="fa fa-calendar-o"></i> 30-01-2017</span>
							</div>

						</div>
						<!-- Listing Item / End -->

					</div>
				</div>
				<!-- Listing Item / End -->



			</div>
		</div>
		<!-- Carousel / End -->

	</div>
</div>



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-105" data-background-color="#f7f7f7">

	<!-- Box Headline -->
	<h3 class="headline-box">&iquest;Qu&eacute; est&aacute;s buscando hoy?</h3>
	
	<!-- Content -->
	<div class="container">
		<div class="row">

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Office"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">En Venta</a>
							<a href="listings-grid-standard-with-sidebar.html">En Alquiler</a>
						</div>
					</div>

					<h3>Departamento</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Home-2"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">En Venta</a>
							<a href="listings-grid-standard-with-sidebar.html">En Alquiler</a>
						</div>
					</div>

					<h3>Casa</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Car-3"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">En Venta</a>
							<a href="listings-grid-standard-with-sidebar.html">En Alquiler</a>
						</div>
					</div>

					<h3>Cochera</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<!-- Icon Box -->
				<div class="icon-box-1">

					<div class="icon-container">
						<i class="im im-icon-Clothing-Store"></i>
						<div class="icon-links">
							<a href="listings-grid-standard-with-sidebar.html">En Venta</a>
							<a href="listings-grid-standard-with-sidebar.html">En Alquiler</a>
						</div>
					</div>

					<h3>Inmueble Comercial</h3>
					<p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Fullwidth Section / End -->


<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-35 margin-top-10">Nuestra selecci&oacute;n de Agencias <span>Las mejores propiedades, las encontr&aacute;s en las mejores Agencias</span></h3>
		</div>
		
		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="<?= base_url() ?>/assets/images/popular-location-01.jpg">

				<!-- Badge -->
				<div class="listing-badges">
					<span class="featured">Destacada</span>
				</div>

				<div class="img-box-content visible">
					<h4>Agencia de Rafaela <i style="color: #5d93fe;" class="fa fa-check-circle" title="Agencia Verificada"></i></h4>
					<span>14 Propiedades</span>
				</div>
			</a>

		</div>	
			
		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="<?= base_url() ?>/assets/images/popular-location-02.jpg">
				<div class="img-box-content visible">
					<h4>Agencia de Esperanza <i style="color: #5d93fe;" class="fa fa-check-circle" title="Agencia Verificada"></i></h4>
					<span>24 Propiedades</span>
				</div>
			</a>

		</div>	

		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="<?= base_url() ?>/assets/images/popular-location-03.jpg">
				<div class="img-box-content visible">
					<h4>Agencia de Rafaela 2 <i style="color: #5d93fe;" class="fa fa-check-circle" title="Agencia Verificada"></i></h4>
					<span>18 Propiedades</span>
				</div>
			</a>

		</div>	
			
		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="<?= base_url() ?>/assets/images/popular-location-04.jpg">
				<div class="img-box-content visible">
					<h4>Agencia de Sunchalez <i style="color: #5d93fe;" class="fa fa-check-circle" title="Agencia Verificada"></i></h4>
					<span>9 Propiedades</span>
				</div>
			</a>

		</div>

	</div>
</div>
<!-- Container / End -->




<!-- Flip banner -->
<a href="listings-half-map-grid-standard.html" class="flip-banner parallax" data-background="<?= base_url() ?>/assets/images/flip-banner-bg.jpg" data-color="#fa5b0f" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
	<div class="flip-banner-content">
		<h2 class="flip-visible">Ayudamos a que las personas y los hogares se encuentren</h2>
		<h2 class="flip-hidden">Buscar Propiedad <i class="sl sl-icon-arrow-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->



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