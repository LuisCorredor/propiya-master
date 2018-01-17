		<div class="col-md-4">
			<div class="sidebar left">

				<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Administrar Cuenta</li>
						<li><a href="perfil" class="current"><i class="sl sl-icon-user"></i> Mi Cuenta</a></li>
						<li><a href="favoritos"><i class="sl sl-icon-star"></i> Listado de Favoritos</a></li>
						<?php if (isset($_SESSION["verificado"]) && $_SESSION["verificado"] == 0) { ?>
						<li><a href="verificar"><i class="sl sl-icon-check"></i> Verificar Constructora</a></li>
						<?php } ?>
						<li><a href="packs"><i class="sl sl-icon-bag"></i> Packs de Membresía</a></li>
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Proyectos</li>
						<li><a href="publicaciones"><i class="sl sl-icon-docs"></i> Mis Publicaciones</a></li>
						<li><a href="publicar"><i class="sl sl-icon-action-redo"></i> Publicar Proyecto</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="seguridad"><i class="sl sl-icon-lock"></i> Cambiar Contrase&ntilde;a</a></li>
						<li><a href="acceso/cerrar"><i class="sl sl-icon-power"></i> Cerrar Sesi&oacute;n</a></li>
					</ul>

				</div>

			</div>
		</div>