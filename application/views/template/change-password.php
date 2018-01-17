<?php

    session_start();
    require("classes/sesion.php");
    require("classes/usuario.php");
    
    $sesion = new Sesion();
    $sesion->verificar();
    $id = $sesion->id();
    $tipo = $sesion->tipo();
    
    if ($id < 0) {
        header("location: login-register.php");
        die();
    } else {
        if ($tipo != "particular") {
            header("location: my-profile-".$tipo.".php");
            die();
        }
    }
    
    $usuario = new Usuario();
    $data = $usuario->datos($id);
    
?>

<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYA - Somos la web d&oacute;nde encontrar&aacute;s tu pr&oacute;ximo hogar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/orange.css" id="colors">

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

				<h2>Cambiar Contrase&ntilde;a</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Cambiar Contrase&ntilde;a</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


        <?php include("globals/profile-menu.php"); ?>

		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6  my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Change Password</h4>

					<label>Current Password</label>
					<input type="password">

					<label>New Password</label>
					<input type="password">

					<label>Confirm New Password</label>
					<input type="password">

					<a href="submit-property.html" class="margin-top-20 button">Save Changes</a>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Your password should be at least 12 random characters long to be safe</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<?php include("globals/footer.php"); ?>


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/rangeSlider.js"></script>
<script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/masonry.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


</div>
<!-- Wrapper / End -->


</body>
</html>