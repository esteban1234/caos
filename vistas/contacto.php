<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<div class="contenedor3">
	<header>
		<nav id="menu">
			<ul>
				<li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;INICIO</a></li>
				<li><a href="nosotros.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;QUIENES SOMOS</a></li>
				<li><a href="servicios.php"><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp;SERVICIOS</a></li>
				<li  class="select"><a href="contacto.php"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;CONTACTO</a></li>
			</ul>
			<div class="desplega">
				<span class="cerrar fa fa-arrows-alt"></span>
			</div>
		</nav>

		<!-- Logo -->
		<div id="logo">
			<img class="caos" src="../img/caos.png" alt="CORPORATIVO, ADMINISTRATIVO Y OPERATIVO DEL SUR">
		</div>
		<div class="menu-abrir">
			<p>Menú</p>
			<span class="abrir fa fa-bars"></span>
		</div>
	</header>

	<article class="banner3">
		<p>
			<h1 class="tit">Experiencia a tu servicio</h1>
            <p>Nuestra atención es completamente personalizada desde el primer contacto. Escríbenos para empezar a analizar tus necesidades y explicarte como nuestros sistemas generan soluciones.​</p>
		</p>
	</article>

	<!-- <div class="boton">
        <a class=" btn btn-large btn-primary" href="contacto.php">CONTACTANOS!</a>
    </div> -->
</div>

<div class="container contineform">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="envia.php">
                    <fieldset>
                        <legend class="text-center header">FORMULARIO DE CONTACTO</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nombre completo" class="form-control" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Correo electronico" class="form-control" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="number" min="7" max="10" placeholder="Teléfono" class="form-control" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Ingrese su masaje para nosotros aquí. Nos pondremos en contacto con usted dentro de 2 días hábiles." rows="7" required/></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
	                <div class="col-md-3">
	                    <div class="panel panel-info">
	                        <div class="panel-heading">Llámanos
	                            <span class="pull-right"><i class="fa fa-fax" aria-hidden="true"></i></span></div>
	                        <div class="panel-body" style="text-align: center;">Pendiente</div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="panel panel-info">
	                        <div class="panel-heading">Horarios
	                            <span class="pull-right"><i class="fa fa-power-off" aria-hidden="true"></i></span></div>
	                        <div class="panel-body" style="text-align: center;">Lunes a Viernes de 9am a 6pm</div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="panel panel-info">
	                        <div class="panel-heading">Correo
	                            <span class="pull-right"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></div>
	                        <div class="panel-body" style="text-align: center;">info@corporativocaos.com</div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="panel panel-info">
	                        <div class="panel-heading">Dirección
	                            <span class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i></span></div>
	                        <div class="panel-body" style="text-align: center;">C. Heriberto Frias #1439 entre C. San Lorenzo Col. Del Valle. Benito Juarez, México.</div>
	                    </div>
	                </div>
	            </div>
</div>

<footer>
     <div id="pie">
        <p class="h4">Derechos de autor 2017© | CORPORATIVO, ADMINISTRATIVO Y OPERATIVO DEL SUR S. de R.L de C.V.</p>
     </div>
</footer>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>
