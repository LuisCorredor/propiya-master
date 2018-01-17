<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYA - Publicar propiedad</title>
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
<?php require("/globals/menu.php") ?>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2><i class="fa fa-plus-circle"></i> Publicar Propiedad</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li></li>
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

    <!-- Submit Page -->
    <div class="col-md-12">
        <div class="submit-page">

        <!-- Section -->
        <h3>Informaci&oacute;n B&aacute;sica</h3>
        <div class="submit-section">

            <!-- Title -->
            <div class="form">
                <h5>T&iacute;tulo de Propiedad <i class="tip" data-tip-content="Escribe un t&iacute;tulo que adem&aacute;s contenga una caracter&iacute;stica de tu propiedad (por ejemplo: renovado, aire acondicionado, etc.)"></i></h5>
                <input class="search-field" type="text" value=""/>
            </div>

            <!-- Row -->
            <div class="row with-forms">

                <!-- Status -->
                <div class="col-md-6">
                    <h5>Estado</h5>
                    <select class="chosen-select-no-single" >
                        <option label="blank"></option> 
                        <option>En Venta</option>
                        <option>En Alquiler</option>
                    </select>
                </div>

                <!-- Type -->
                <div class="col-md-6">
                    <h5>Tipo de Inmueble</h5>
                    <select class="chosen-select-no-single" >
                        <option label="blank"></option>     
                        <option>Apartmento</option>
                        <option>Casa</option>
                        <option>Comercio</option>
                        <option>Garage</option>
                        <option>Lote</option>
                    </select>
                </div>

            </div>
            <!-- Row / End -->


            <!-- Row -->
            <div class="row with-forms">

                <!-- Price -->
                <div class="col-md-4">
                    <h5>Precio <i class="tip" data-tip-content="Escribe el precio total o mensual si la propiedad est&aacute; en alquiler"></i></h5>
                    <div class="select-input disabled-first-option">
                        <input type="text" data-unit="ARS">
                    </div>
                </div>
                
                <!-- Area -->
                <div class="col-md-4">
                    <h5>Area</h5>
                    <div class="select-input disabled-first-option">
                        <input type="text" data-unit="Mts2">
                    </div>
                </div>

                <!-- Rooms -->          
                <div class="col-md-4">
                    <h5>Ambientes</h5>
                    <select class="chosen-select-no-single" >
                        <option label="blank"></option> 
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

            </div>
            <!-- Row / End -->

        </div>
        <!-- Section / End -->


        <!-- Section -->
        <h3>Galer&iacute;a</h3>
        <div class="submit-section">
            <form action="/file-upload" class="dropzone" ></form>
        </div>
        <!-- Section / End -->


        <!-- Section -->
        <h3>Localidad</h3>
        <div class="submit-section">

            <!-- Row -->
            <div class="row with-forms">

                <!-- Address -->
                <div class="col-md-6">
                    <h5>Direcci&oacute;n</h5>
                    <input type="text">
                </div>

                <!-- City -->
                <div class="col-md-6">
                    <h5>Ciudad</h5>
                    <input type="text">
                </div>

                <!-- State -->
                <div class="col-md-6">
                    <h5>Provincia</h5>
                    <input type="text">
                </div>

                <!-- Zip-Code -->
                <div class="col-md-6">
                    <h5>C&oacute;digo Postal</h5>
                    <input type="text">
                </div>

            </div>
            <!-- Row / End -->

        </div>
        <!-- Section / End -->


        <!-- Section -->
        <h3>Informaci&oacute;n Detallada</h3>
        <div class="submit-section">

            <!-- Description -->
            <div class="form">
                <h5>Descripci&oacute;n</h5>
                <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
            </div>

            <!-- Row -->
            <div class="row with-forms">

                <!-- Age of Home -->
                <div class="col-md-4">
                    <h5>Edad del Inmueble <span>(opcional)</span></h5>
                    <select class="chosen-select-no-single" >
                        <option label="blank"></option> 
                        <option>0 - 1 A&ntilde;o</option>
                        <option>0 - 5 A&ntilde;os</option>
                        <option>0 - 10 A&ntilde;os</option>
                        <option>0 - 20 A&ntilde;os</option>
                        <option>0 - 50 A&ntilde;o</option>
                        <option>50 + A&ntilde;os</option>
                    </select>
                </div>

                <!-- Beds -->
                <div class="col-md-4">
                    <h5>Cuartos <span>(opcional)</span></h5>
                    <select class="chosen-select-no-single" >
                        <option label="blank"></option> 
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>M&aacute;s de 5</option>
                    </select>
                </div>

                <!-- Baths -->
                <div class="col-md-4">
                    <h5>Ba&ntilde;os <span>(opcional)</span></h5>
                    <select class="chosen-select-no-single" >
                        <option label="blank"></option> 
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>M&aacute;s de 5</option>
                    </select>
                </div>

            </div>
            <!-- Row / End -->


            <!-- Checkboxes -->
            <h5 class="margin-top-30">Otras Caracter&iacute;sticas <span>(opcional)</span></h5>
            <div class="checkboxes in-row margin-bottom-20">
        
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
        <!-- Section / End -->


        <!-- Section -->
        <h3>Detalles de Contacto</h3>
        <div class="submit-section">

            <!-- Row -->
            <div class="row with-forms">

                <!-- Name -->
                <div class="col-md-4">
                    <h5>Nombre</h5>
                    <input type="text">
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <h5>E-Mail</h5>
                    <input type="text">
                </div>

                <!-- Name -->
                <div class="col-md-4">
                    <h5>Tel&eacute;fono <span>(opcional)</span></h5>
                    <input type="text">
                </div>

            </div>
            <!-- Row / End -->

        </div>
        <!-- Section / End -->


        <div class="divider"></div>
        <a href="#" class="button preview margin-top-5">Previsualizar <i class="fa fa-arrow-circle-right"></i></a>

        </div>
        <div class="clearfix"></div>
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


<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/dropzone.js"></script>
<script>
    $(".dropzone").dropzone({
        dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Cliquea aqu&iacute; o arrastra archivos para subir",
    });
</script>


</div>
<!-- Wrapper / End -->


</body>
</html>