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
</head>
<body>	
	<!--header-->
	<?php include('includes/header.html');
	;?>
	<br>
	<div class="wraper">
		<!--navbar-->
		<?php include('includes/navbar.html');
		;?>
		<div class="content">
			<div class="slider">
				<img src="img/iem_1.jpg" /><img src="img/iem_2.jpg" />
			</div>

		    <div class="sections" id="index">
		    	<!--lectura del texto descripcion index-->
		    	<?php
					if(file_exists($url_index)){
						readfile($url_index);
					}
				?>
		    </div>
		    <br><br>
		</div>
	
		<!--footer-->
		<?php include('includes/footer.html');
		;?>
	</div>
</body>
</html> 
