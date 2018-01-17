<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYa - Ingresar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/orange.css" id="colors">
				    
<style>
    .status {
        color: #d33;
    }
</style>

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
<?php require("globals/menu.php") ?>
<!-- Header Container / End -->
<br/><br/>

<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">

	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Inicar Sesi&oacute;n</a></li>
			<li><a href="#tab2">Registrate</a></li>
		</ul>

		<div class="tabs-container alt">
		    
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
		    
		    <!-- Error Message -->
		    <div class="status error-box"><i class="fa fa-times"></i> Los datos ingresados son inv&aacute;lidos.</div>
		        
				<form method="post" action="modules/login.php" class="login">

					<p class="form-row form-row-wide">
						<label for="username">Correo Electr&oacute;nico:
							<i class="im im-icon-Mail"></i>
							<input type="text" class="input-text" name="username" id="username" value="" />
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Contrase&ntilde;a:
							<i class="im im-icon-Lock-2"></i>
							<input class="input-text" type="password" name="password" id="password"/>
						</label>
					</p>

					<p class="form-row">
						<input type="submit" class="button border margin-top-10" name="login" value="Entrar" />

						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Recordarme</label>
					</p>

					<p class="lost_password">
						<a href="#" >&iquest;No record&aacute;s tu contrase&ntilde;a?</a>
					</p>
					
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form method="post" action="modules/register.php" class="register">

				<p class="form-row form-row-wide">
					<label for="status">Tipo de Usuario
					<select class="chosen-select-no-single register-tipo" name="tipo" onchange="continuarRegistro()">
						<option value="0" label="blank">Seleccionar</option>	
						<option value="1">Usuario Particular</option>
						<option value="2">Inmobiliaria</option>
						<option value="3">Constructora</option>
					</select>
					</label>
				</p>
				
				<script>
				    function continuarRegistro() {
				        if (parseInt($(".register-tipo").val()) != 0) {
				            $(".register-inputs").show();
				        } else {
				            $(".register-inputs").hide();
				        }
				    }
				</script>
				
				<div class="register-inputs" style="display: none;">
				    
    				<p class="form-row form-row-wide">
    					<label for="email2">Nombre y Apellido:
    						<i class="im im-icon-Male"></i>
    						<input type="text" class="input-text" name="name" id="name" value="" autocomplete="off"/>
    					</label>
    				</p>
    
    				<p class="form-row form-row-wide">
    					<label for="username2">E-mail:
    						<i class="im im-icon-Mail"></i>
    						<input type="text" class="input-text" name="email" id="email" value="" onchange="verificarUsuario($(this).val())" autocomplete="off"/>
    					</label>
    					<script>
    					    function verificarUsuario(user){
        					    $.ajax({
        					        url: "modules/register.php",
        					        type: "post",
        					        data: "check=" + user,
        					        success: function(e) {
        					            if (parseInt(e) > 0) {
        					                $("#invalid-email").show();
        					                $("[name=register]").attr("type", "button");
        					            } else {
        					                $("#invalid-email").hide();
        					                $("[name=register]").attr("type", "submit");
        					            }
        					        }
        					    });
    					    }
    					</script>
    					<span class="status" id="invalid-email" style="display: none;">E-mail ya registrado actualmente.</span>
    				</p>
    
    				<p class="form-row form-row-wide">
    					<label for="password1">Contrase&ntilde;a:
    						<i class="im im-icon-Lock-2"></i>
    						<input class="input-text" type="password" name="password1" id="password1" onchange="verificarSeguridad($(this).val())" autocomplete="off"/>
    					</label>
    					<script>
    					    function verificarSeguridad(pass){
        					   if (pass.length < 6) {
        					       if (pass.length != 0) {
        					           $("#insecure-pass").show();
        					       } else {
            					       $("#insecure-pass").hide();
        					       }
        					   } else {
        					       $("#insecure-pass").hide();
        					   }
    					    }
    					</script>
    					<span class="status" id="insecure-pass" style="display: none;">La contrase&ntilde;as ingresada es muy corta.</span>
    				</p>
    
    				<p class="form-row form-row-wide">
    					<label for="password2">Repetir Contrase&ntilde;a:
    						<i class="im im-icon-Lock-2"></i>
    						<input class="input-text" type="password" name="password2" id="password2" onchange="verificarPassword($(this).val(), $('#password1').val())" autocomplete="off"/>
    					</label>
    					<script>
    					    function verificarPassword(repass, pass){
        					   if (pass != repass) {
        					       $("#invalid-pass").show();
        					       $("[name=register]").attr("type", "button");
        					   } else {
        					       $("#invalid-pass").hide();
        					       $("[name=register]").attr("type", "submit");
        					   }
    					    }
    					</script>
    					<span class="status" id="invalid-pass" style="display: none;">Las contrase&ntilde;as ingresadas no coinciden.</span>
    				</p>
    
    				<p class="form-row">
    					<input type="submit" class="button border fw margin-top-10" name="register" value="Registrar" />
    				</p>
    				
    			</div>

				</form>
			</div>

		</div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->



<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Links de Ayuda</h4>
				<ul class="footer-links">
					<li><a href="#">Entrar</a></li>
					<li><a href="#">Registrar</a></li>
					<li><a href="#">Mi Cuenta</a></li>
					<li><a href="#">Publicar Propiedad</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">Tutoriales</a></li>
					<li><a href="#">Agencias</a></li>
					<li><a href="#">Contactanos</a></li>
					<li><a href="#">&iquest;C&oacute;mo Funciona?</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Seguimos en Contacto</h4>
				<div class="text-widget">
					<span>12345 Calle de Rafa, Rafaela</span> <br>
					Telefono: <span>(03492) 123-456 </span><br>
					E-Mail:<span> <a href="#">hola@propiya.com</a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">&copy; 2017 PropiYA. Todos los derechos reservados.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


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