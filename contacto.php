<?php
//gestion del idioma
require('multiidioma/language.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>IEM</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/page.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/page.js" type="text/javascript"></script>
	<script src="js/form.js" type="text/javascript"></script>
</head>
<body>
	<!--header-->
	<?php include('includes/header.html');
	;?><br>
	<div class="wraper">
		<!--navbar-->
	<?php include('includes/navbar.html');
	;?>
		<div class="content">
			<div class="slider" >
				<img src="img/iem_3.jpg" /><img src="img/iem_4.jpg" />
		    </div>

		    <div class="sections">
		    	<h1 style="text-align:center"><?=$titulo_contacto?></h1><br><br>
		    	<div class="contacto">
					<h2><?=$contacto?></h2>
					<p><?=$aviso_campos?></p><br>
					<form id="form" name="form" method="get" action='#'>
						<label for="nombre"><?=$nombre?></label><input type="text" name="nombre" autofocus id="nombre" /><br><br>
						<label for="email"><?=$email?></label><input type="email" name="email" id="email" placeholder="nom@mail.com" /><br><br>
						<label for="telefono"><?=$telefono?></label><input type="tel" name="telefono" id="telefono"><br><br>
						<label><?=$mensaje?></label><br><br>
						<textarea id="mensaje" name="mensaje" placeholder='<?=$textarea;?>' ></textarea><br><br>
						<span><?=$aceptopolitica?></span><br><br>
						<input id="privacidad" type="checkbox" name="privacidad">&nbsp&nbsp
						<span id='ver' onclick="muestraAlert()"><?=$ver?></span><br><br>
						<input id="enviar" type="button" name="enviar" value='<?=$ver;?>' onclick="validaFormulario()"/><br>
					</form>
					
					<div id="alerta">
						<span id="alertatext"><?=$cumplimiento?><br><br>
						<input type="button" onclick="ocultaAlert()"/>
					</div>
				</div>
		    </div>
		    <br><br>
		</div>
	
		<!--footer-->
	<?php include('includes/footer.html');
	;?>
	</div>
</body>
</html> 
