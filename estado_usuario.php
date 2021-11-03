<!DOCTYPE html>
<html>
<head>
	<title>Desactivar Usuario | L-Control</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/eliminar.svg">
		</div>
		<div class="login-content">
			<form action="control_usuario.php" method="POST">
				<h1 class="title">Desactivar Usuario</h1>
                <h3>&nbsp</h3>
				<?php
					if (isset($mensaje)) {
					   echo $mensaje;
				   	}
				?>


		<div class="option">
          <fieldset class="form-group">
            <div class="row">
            <h3>Tipo de movimiento</h3>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="accion" id="gridRadios1" value='1' checked>
                  <label class="form-check-label" for="gridRadios1">
                    Activar
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="accion" id="gridRadios2" value='2'>
                  <label class="form-check-label" for="gridRadios2">
                    Desactivar
                  </label>
                </div>
              </div>
            </div>
            <h5>&nbsp</h5>
          </fieldset>
        </div>

        <div class="input-div one">

        <div class="i">
            <i class="fas fa-user"></i>
        </div>

        <div class="div">
            <h5>Username</h5>
            <input type="text" name= "username" class="input">
        </div>
        </div>

        <input type="submit" class="btn" value="Continuar">
					<a href="admin.php">Volver al inicio</a>
      </form>

			</div>
		</div>

    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>