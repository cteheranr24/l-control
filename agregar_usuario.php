<?php

include_once 'control_registro.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuario | L-Control</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/Add_friends.svg">
		</div>
		<div class="login-content">

			<form action="control_registro.php" method ="POST">
				<h1 class="title">Registrar Usuario</h1>
                <h3>&nbsp</h3>
            <?php
						if (isset($errorLogin)) {
							echo $errorLogin;
						}
						?>
        <div >
          <h3>Rol del usuario</h3>
          <select class="custom-select" name="id_rol">
            <option value=0>Escoje una opción</option>
            <option value=1>Administrador</option>
            <option value=2>Camarera</option>
            <option value=3>Pers. Lavanderia</option>
          </select>
        </div>

        <div class="">
          <h3>&nbsp</h3>
        </div>

        <div class="input-div one">

        <div class="i">
          <i class="fas fa-user"></i>
        </div>

        <div class="div">
          <h5>Nombre</h5>
          <input type="text" name= "nombre" class="input">
        </div>
        </div>

        <div class="input-div one">

        <div class="i">
            <i class="fas fa-user"></i>
        </div>

        <div class="div">
            <h5>Username</h5>
            <input type="text" name= "usuario" class="input">
        </div>
        </div>
            <div class="input-div pass">
        <div class="i">
           <i class="fas fa-lock"></i>
        </div>
        <div class="div">
            <h5>Password</h5>
            <input type="text" name="contrasena" class="input">
       </div>

   </div>

        <input type="submit" class="btn" value="Registrar">
					<a href="admin.php">Volver al inicio</a>
      </form>

			</div>
		</div>

    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>