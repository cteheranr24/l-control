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
	<title>Arribos y despachos | L-Control</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/add_user.svg">
		</div>
		<div class="login-content">
        <div class="login-content">
			<div class="button-content">
				<h1 class="title">Gestiona tus usuarios</h1>
				<a href="agregar_usuario.php"><button type="submit" class="btn">Registrar nuevo usurios</button></a>
				<a href="estado_usuario.php"><button type="submit" class="btn">Estado de usuario</button></a>
				<a href="admin.php">Volver atras</a>
            </div>
        </div>

	</div>
		</div>

    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>
