<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="../css/estilos-popup.css">

</head>

<body>

		<div id="contenedor">

			<header>

				<div class="wrapper">

					<div class="contenedor-de-header" >

						<div class="titulo_principal">

							<h2>Crea tu Torta</h2>

						</div>
					  <div class="menus">
							<nav class="menu">
								<li><a href="../index.html">Inicio</a></li>
								<li><a href="../index.html#introduccion">Nosotros</a></li>
								<li><a href="../index.html#galeria">Galería</a></li>
								<li><a href="../index.html#diseño-introduccion">Información</a></li>
								<li><a href="../servicios.html">Servicios</a></li>
								<!--<li><a href="../index.html#servicio-de-pedido">Contacto</a></li>-->
							</nav>

						</div>
					</div>
				</div>
			</header>

			<div class="lista-informacion">

				<div class="wrapper">
				
					<div class="lista-1">

						<ul>
							<li class="lista-1-imagen"></li>
							<li class="lista-1-parrafo"><p>Teléfono</p></li>
							<li class="lista-1-parrafo2"><p>+54 9 11 2452-9566</p></li>
						</ul>

					</div>

					<div class="lista-2"> 
						
						<ul>
							<li class="lista-2-imagen2"></li>
							<li class="lista-2-parrafo2"><p>Email</p></li>
							<li class="lista-2-parrafo22"><p>informes@creatutorta.com</p></li>
						</ul>

					</div>

					<div class="lista-3">
						
						<ul>
							<li class="lista-3-imagen3"></li>
							<li class="lista-3-parrafo3"><p>Ubicación</p></li>
							<li class="lista-3-parrafo33"><p>Salta al 1200, Rosario, AR</p></li>
						</ul>

					</div>

					<div class="lista-4">
						
						<ul>
							<li class="lista-4-imagen4"></li>
							<li class="lista-4-parrafo4"><p>Horarios</p></li>
							<li class="lista-4-parrafo44"><p>Lun a Vie 9am-5pm</p></li>
						</ul>

					</div>

				</div>	

			</div>

			<div class="mapa">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.4478614727773!2d-60.63969611623618!3d-32.93918318670424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccbb1b59d1077%3A0xaef7f9cd0001cf2d!2sCrea+tu+Torta!5e0!3m2!1ses-419!2sar!4v1551907249566" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				
			</div>


			<br/>

			<div class="form wrapper">

				<form name="form1" method="post" action="mailto.php">

					<label for="nombre" style="font-family: 'champagne__limousinesregular';">Nombre: </label><input type="text" name="nombre" id="nombre"><br />

					<label for="apellido" style="font-family: 'champagne__limousinesregular';" >Apellido: </label><input type="text" name="apellido" id="apellido"><br />

					<label for="email" style="font-family: 'champagne__limousinesregular';" >Email: </label><input type="text" name="email" id="email"><br />

					<label for="telefono" style="font-family: 'champagne__limousinesregular';" >Teléfono: </label><input type="text" name="telefono" id="telefono"><br />

					<label for="evento" style="font-family: 'champagne__limousinesregular';" >Fecha del evento: </label><input type="text" name="evento" id="evento"><br />

					<br /><p style="font-family: 'champagne__limousinesregular';" >¿Dime algo acerca de tu celebración?</p>

					<textarea id="opinion" name="opinion"></textarea><br />

					<label for="porciones" style="font-family: 'champagne__limousinesregular';" >Cuantas porciones quieres: </label><input type="text" name="porciones" id="porciones"><br />

					<br/>

					<input type="submit" value="Enviar" style="background-color: #D5F7F3">

				</form>
				<?php if(isset($_GET['envioOk']) && $_GET['envioOk']==true){ 
					 ?><div>El mensaje se envio correctame.</div>
				<?php } ?>
			</div>


		</div>


</body>
