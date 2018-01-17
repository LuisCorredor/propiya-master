<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYa - Ingresar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/colors/orange.css" id="colors">
                    
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
            <li class=""><a href="#tab1">Inicar Sesión</a></li>
            <li><a href="#tab2">Registrate</a></li>
        </ul>

        <div class="tabs-container alt">

            <!-- Login -->
            <div class="tab-content" id="tab1" style="display: none;">
                <form method="post" action="<?= site_url() ?>/acceso/iniciar" class="login">

                    <p class="form-row form-row-wide">
                        <label for="username">Correo Electrónico:
                            <i class="im im-icon-Mail"></i>
                            <input type="text" class="input-text" name="email" id="username" value="" />
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password">Contraseña:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="pass" id="password"/>
                        </label>
                    </p>

                    <p class="form-row">
                        <input type="submit" class="button border margin-top-10" name="login" value="Entrar" />

                        <label for="rememberme" class="rememberme">
                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Recordarme</label>
                    </p>

                    <p class="lost_password">
                        <a href="#" >&iquest;No recordás tu contraseña?</a>
                    </p>
                    
                </form>
            </div>

            <!-- Register -->
            <div class="tab-content" id="tab2" style="display: none;">

                <form method="post" action="<?= site_url() ?>/registrar/datos" class="register">

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
                        tipo = parseInt($(".register-tipo").val());
                        if (tipo != 0) {
                            $(".register-inputs").show();
                            if (tipo == 1)
                            {
                                $(".registrar-nombre").show();
                                $(".registrar-razon-social").hide();
                            }
                            else
                            {
                                $(".registrar-nombre").hide();
                                $(".registrar-razon-social").show();
                            }
                        } else {
                            $(".register-inputs").hide();
                        }
                    }
                </script>
                
                <div class="register-inputs" style="display: none;">
                    
                    <p class="form-row form-row-wide">
                        <label for="email2"><span class="registrar-nombre" hidden>Nombre y Apellido</span><span class="registrar-razon-social" hidden>Razón Social</span>:
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
                                    url: "<?= site_url() ?>/registrar/verificar",
                                    type: "post",
                                    data: {check: user},
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
                        <label for="password1">Contraseña:
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
                        <label for="password2">Repetir Contraseña:
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
                    </p>
    
                    <p class="form-row">
                        <input type="button" class="button border fw margin-top-10" name="register" value="Registrar" />
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