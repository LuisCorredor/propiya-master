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
<?php require("globals/menu.php") ?>
<!-- Header Container / End -->



<!-- Search
================================================== -->
<section class="search margin-bottom-50">
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<!-- Title -->
			<h3 class="search-title">B&uacute;squeda Avanzada</h3>

			<!-- Form -->
			<div class="main-search-box no-shadow">


				<!-- Row With Forms -->
				<div class="row with-forms">

					<!-- Status -->
					<div class="col-md-3">
						<select data-placeholder="Estado" class="chosen-select-no-single" >
							<option>Cualquiera</option>	
							<option>En Venta</option>
							<option>En Alquiler</option>
						</select>
					</div>

					<!-- Property Type -->
					<div class="col-md-3">
						<select data-placeholder="Tipo de Inmueble" class="chosen-select-no-single" >
							<option>Cualquiera</option>	
							<option>Apartamentos</option>
							<option>Casas</option>
							<option>Comercios</option>
							<option>Garages</option>
							<option>Lotes</option>
						</select>
					</div>

					<!-- Main Search Input -->
					<div class="col-md-6">
						<div class="main-search-input">
							<input type="text" placeholder="Intrduzca una direcci&oacute;n, por ejemplo: calle, ciudad o provincia" value=""/>
							<button class="button">Buscar</button>
						</div>
					</div>

				</div>
				<!-- Row With Forms / End -->


				<!-- Row With Forms -->
				<div class="row with-forms">

					<!-- Min Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="&Aacute;rea M&iacute;nima" data-unit="Mts2">
							<select>	
								<option>Cualquiera</option>
								<option>300</option>
								<option>400</option>
								<option>500</option>
								<option>700</option>
								<option>800</option>
								<option>1000</option>
								<option>1500</option>
								<option>M&aacute;s de 1500</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>

					<!-- Max Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="&Aacute;rea M&aacute;xima" data-unit="Mts2">
							<select>	
								<option>Cualquiera</option>
								<option>300</option>
								<option>400</option>
								<option>500</option>
								<option>700</option>
								<option>800</option>
								<option>1000</option>
								<option>1500</option>
								<option>M&aacute;s de 1500</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>


					<!-- Min Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="Precio M&iacute;nimo" data-unit="ARS">
							<select>		
								<option>Cualquiera</option>
								<option>1 000</option>
								<option>2 000</option>	
								<option>3 000</option>	
								<option>4 000</option>	
								<option>5 000</option>	
								<option>10 000</option>	
								<option>15 000</option>	
								<option>20 000</option>	
								<option>30 000</option>
								<option>40 000</option>
								<option>50 000</option>
								<option>60 000</option>
								<option>70 000</option>
								<option>80 000</option>
								<option>90 000</option>
								<option>100 000</option>
								<option>110 000</option>
								<option>120 000</option>
								<option>130 000</option>
								<option>140 000</option>
								<option>150 000</option>
								<option>M&aacute;s de 150 000</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>


					<!-- Max Price -->
					<div class="col-md-3">
						
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
							<input type="text" placeholder="Precio M&aacute;ximo" data-unit="ARS">
							<select>		
								<option>Cualquiera</option>
								<option>1 000</option>
								<option>2 000</option>	
								<option>3 000</option>	
								<option>4 000</option>	
								<option>5 000</option>	
								<option>10 000</option>	
								<option>15 000</option>	
								<option>20 000</option>	
								<option>30 000</option>
								<option>40 000</option>
								<option>50 000</option>
								<option>60 000</option>
								<option>70 000</option>
								<option>80 000</option>
								<option>90 000</option>
								<option>100 000</option>
								<option>110 000</option>
								<option>120 000</option>
								<option>130 000</option>
								<option>140 000</option>
								<option>150 000</option>
								<option>M&aacute;s de 150 000</option>
							</select>
						</div>
						<!-- Select Input / End -->

					</div>

				</div>
				<!-- Row With Forms / End -->


				<!-- More Search Options -->
				<a href="#" class="more-search-options-trigger margin-top-10" data-open-title="M&aacute;s Opciones" data-close-title="Menos Opciones"></a>

				<div class="more-search-options relative">
					<div class="more-search-options-container">

						<!-- Row With Forms -->
						<div class="row with-forms">

							<!-- Age of Home -->
							<div class="col-md-3">
								<select data-placeholder="Edad del Inmueble" class="chosen-select-no-single" >
									<option label="blank"></option>	
									<option>Cualquiera</option>	
									<option>0 - 1 A&ntilde;o</option>
									<option>0 - 5 A&ntilde;os</option>
									<option>0 - 10 A&ntilde;os</option>
									<option>0 - 20 A&ntilde;os</option>
									<option>0 - 50 A&ntilde;os</option>
									<option>50 + A&ntilde;os</option>
								</select>
							</div>

							<!-- Rooms Area -->
							<div class="col-md-3">
								<select data-placeholder="Ambientes" class="chosen-select-no-single" >
									<option label="blank"></option>	
									<option>Cualquiera</option>	
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>M&aacute;s de 10</option>
								</select>
							</div>

							<!-- Min Area -->
							<div class="col-md-3">
								<select data-placeholder="Habitaciones" class="chosen-select-no-single" >
									<option label="blank"></option>	
									<option>Cualquiera</option>	
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>M&aacute;s de 10</option>
								</select>
							</div>

							<!-- Max Area -->
							<div class="col-md-3">
								<select data-placeholder="Ba&ntilde;os" class="chosen-select-no-single" >
									<option label="blank"></option>	
									<option>Cualquiera</option>	
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
                                    <option>M&aacute;s de 5</option>
								</select>
							</div>

						</div>
						<!-- Row With Forms / End -->


						<!-- Checkboxes -->
						<div class="checkboxes in-row">
					
							<input id="check-2" type="checkbox" name="check">
							<label for="check-2">Aire Acondicionado</label>

							<input id="check-3" type="checkbox" name="check">
							<label for="check-3">Piscina</label>

							<input id="check-4" type="checkbox" name="check" >
							<label for="check-4">Calefacci&oacute;n</label>

							<input id="check-5" type="checkbox" name="check">
							<label for="check-5">Lavadero</label>	


							<input id="check-6" type="checkbox" name="check">
							<label for="check-6">Gimnasio</label>

							<input id="check-7" type="checkbox" name="check">
							<label for="check-7">Alarma</label>

							<input id="check-8" type="checkbox" name="check">
							<label for="check-8">Persianas</label>
					
						</div>
						<!-- Checkboxes / End -->

					</div>

				</div>
				<!-- More Search Options / End -->


			</div>
			<!-- Box / End -->
		</div>
	</div>
</div>
</section>



<!-- Content
================================================== -->
<div class="container">
	<div class="row fullwidth-layout">

		<div class="col-md-12">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-15">

				<div class="col-md-6">
					<!-- Sort by -->
					<div class="sort-by">
						<label>Sort by:</label>

						<div class="sort-by-select">
							<select data-placeholder="Ordenar por" class="chosen-select-no-single" >
								<option>Por defecto</option>	
								<option>Precio m&aacute;s Bajo</option>
								<option>Precio m&aacute;s Alto</option>
								<option>Propiedades m&aacute;s Nuevas</option>
								<option>Propiedades m&aacute;s Viejas</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="list"><i class="fa fa-th-list"></i></a>
						<a href="#" class="grid"><i class="fa fa-th-large"></i></a>
						<a href="#" class="grid-three"><i class="fa fa-th"></i></a>
					</div>
				</div>
			</div>

			
			<!-- Listings -->
			<div class="listings-container list-layout">

				<!-- Listing Item -->
				<div class="listing-item">

					<a href="single-property-page-2.html" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">Destacado</span>
							<span>En Venta</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$275,000 <i>$520 / Mts2</i></span>
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
							<h4><a href="single-property-page-2.html">Eagle Apartments</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								9364 School St. Lynchburg, NY
							</a>

							<a href="single-property-page-2.html" class="details button border">Detalles</a>
						</div>

						<ul class="listing-details">
							<li>160 Mts2</li>
							<li>1 Habitaci&oacute;n</li>
							<li>3 Ambiente</li>
							<li>1 Ba&ntilde;o</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> David Strozier</a>
							<span><i class="fa fa-calendar-o"></i> Hace 1 d&iacute;a</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="single-property-page-2.html" class="listing-img-container">

						<div class="listing-badges">
							<span>En Alquiler</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$900 <i>Mensual</i></span>
							<span class="like-icon"></span>
						</div>

						<img src="<?= base_url() ?>/assets/images/listing-02.jpg" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="#">Serene Uptown</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								6 Bishop Ave. Perkasie, PA
							</a>

							<a href="single-property-page-2.html" class="details button border">Detalles</a>
						</div>

						<ul class="listing-details">
							<li>134 Mts2</li>
							<li>1 Habitaci&oacute;n</li>
							<li>1 Ambiente</li>
							<li>1 Ba&ntilde;o</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Harriette Clark</a>
							<span><i class="fa fa-calendar-o"></i> Hace 2 d&iacute;as</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="single-property-page-2.html" class="listing-img-container">

						<div class="listing-badges">
							<span class="featured">Destacado</span>
							<span>En Alquier</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$1700 <i>Mensual</i></span>
							<span class="like-icon"></span>
						</div>

						<img src="<?= base_url() ?>/assets/images/listing-03.jpg" alt="">

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="#">Meridian Villas</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								778 Country St. Panama City, FL
							</a>

							<a href="single-property-page-2.html" class="details button border">Detalles</a>
						</div>

						<ul class="listing-details">
							<li>441 Mts2</li>
							<li>1 Habitaci&oacute;n</li>
							<li>2 Ambientes</li>
							<li>2 Ba&ntilde;os</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Chester Miller</a>
							<span><i class="fa fa-calendar-o"></i> Hace 4 d&iacute;as</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="single-property-page-2.html" class="listing-img-container">

						<div class="listing-badges">
							<span>En Venta</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$420,000 <i>$770 / Mts2</i></span>
							<span class="like-icon"></span>
						</div>

						<div class="listing-carousel">
							<div><img src="<?= base_url() ?>/assets/images/listing-04.jpg" alt=""></div>
							<div><img src="<?= base_url() ?>/assets/images/listing-04b.jpg" alt=""></div>
						</div>

					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="#">Selway Apartments</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								33 William St. Northbrook, IL
							</a>

							<a href="single-property-page-2.html" class="details button border">Detalles</a>
						</div>

						<ul class="listing-details">
							<li>164 Mts2</li>
							<li>1 Habitaci&oacute;n</li>
							<li>3 Ambientes</li>
							<li>2 Ba&ntilde;os</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Kristen Berry</a>
							<span><i class="fa fa-calendar-o"></i> Hace 3 d&iacute;as</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->


				<!-- Listing Item -->
				<div class="listing-item">

					<a href="single-property-page-2.html" class="listing-img-container">
						<div class="listing-badges">
							<span>En Venta</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$535,000 <i>$640 / Mts2</i></span>
							<span class="like-icon"></span>
						</div>

						<img src="<?= base_url() ?>/assets/images/listing-05.jpg" alt="">
					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="#">Oak Tree Villas</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								71 Lower River Dr. Bronx, NY
							</a>

							<a href="single-property-page-2.html" class="details button border">Detalles</a>
						</div>

						<ul class="listing-details">
							<li>106 Mts2</li>
							<li>1 Habitaci&oacute;n</li>
							<li>2 Ambientes</li>
							<li>1 Ba&ntilde;o</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Mabel Gagnon</a>
							<span><i class="fa fa-calendar-o"></i> Hace 4 d&iacute;as</span>
						</div>

					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Listing Item / End -->

				
				<!-- Listing Item -->
				<div class="listing-item">

					<a href="single-property-page-2.html" class="listing-img-container">
						<div class="listing-badges">
							<span>En Alquiler</span>
						</div>

						<div class="listing-img-content">
							<span class="listing-price">$500 <i>Mensual</i></span>
							<span class="like-icon"></span>
						</div>

						<img src="<?= base_url() ?>/assets/images/listing-06.jpg" alt="">
					</a>
					
					<div class="listing-content">

						<div class="listing-title">
							<h4><a href="#">Old Town Manchester</a></h4>
							<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
								<i class="fa fa-map-marker"></i>
								7843 Durham Avenue, MD
							</a>

							<a href="single-property-page-2.html" class="details button border">Detalles</a>
						</div>

						<ul class="listing-details">
							<li>259 Mts2</li>
							<li>2 Habitaciones</li>
							<li>3 Ambientes</li>
							<li>1 Ba&ntilde;o</li>
						</ul>

						<div class="listing-footer">
							<a href="#"><i class="fa fa-user"></i> Charles Watson</a>
							<span><i class="fa fa-calendar-o"></i> Hace 3 d&iacute;s</span>
						</div>

					</div>

				</div>
				<!-- Listing Item / End -->

			</div>
			<!-- Listings Container / End -->

			<div class="clearfix"></div>
			<!-- Pagination -->
			<div class="pagination-container margin-top-20">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="blank">...</li>
						<li><a href="#">22</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Atr&aacute;s</a></li>
						<li><a href="#" class="next">Siguiente</a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>


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