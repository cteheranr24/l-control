<?php

session_start();

if(!isset($_SESSION['rol'])){
	header('location: index.php');
}else{
	if ($_SESSION['rol'] != 2) {
		header('location: index.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Principal Camarera</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/informe.svg">
		</div>
		<div class="login-content">
			<div class="button-content">
				<h1 class="title">¡Bienvenido <?php echo $_SESSION["username"]?>!</h1>
				<h1>&nbsp</h1>
				<a href="arribos-despachos.php"><button type="submit" class="btn">Arribos y despachos</button></a>
				<a href="reportar.php"><button type="submit" class="btn">Reportar</button></a>
				<a href="index.php?cerrar_sesion=1">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
