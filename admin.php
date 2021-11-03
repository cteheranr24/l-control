<?php

session_start();

if(!isset($_SESSION['rol'])){
	header('location: index.php');
}else {
	if ($_SESSION['rol'] != 1) {
		header('location: index.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/estadistica.svg">
		</div>
		<div class="login-content">
			<div class="button-content">
				<h1 class="title">¡Administra bien tus recursos <?php echo $_SESSION["username"]?>!</h1>
				<h3>&nbsp</h3>
				<a href="administra_lenceria.php"><button type="submit" class="btn">Administrar lenceria</button></a>
				<a href="gestor_usuario.php"><button type="submit" class="btn">Gestionar usuarios</button></a>
				<a href="adm_reporte.php"><button type="submit" class="btn">Reportes</button></a>
				<a href="informes.php"><button type="submit" class="btn">Informes</button></a>
				<a href="index.php?cerrar_sesion=1">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
