<!DOCTYPE html>
<html>
<head>
	<title>Administra lenceria | L-Control</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/anotacion.svg">
		</div>
		<div class="login-content">
			<form action="control_lenceria.php" method="POST">
				<h1 class="title">Lencerias</h1>
          <h3>&nbsp</h3>
            <?php
					    if (isset($error)) {
					    echo $error;
					    }
					  ?>
        <div class="option">
          <fieldset class="form-group">
            <div class="row">
            <h3>¿Que acción realizaras?</h3>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value='1' checked>
                  <label class="form-check-label" for="gridRadios1">
                    Agregar
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value='2'>
                  <label class="form-check-label" for="gridRadios2">
                    Dar de baja
                  </label>
                </div>
              </div>
            </div>
            <h5>&nbsp</h5>
          </fieldset>
        </div>
        
        <div >
          <h3>Tipo de lenceria</h3>
          <select class="custom-select" name="lenceria">
            <option value="nulo">Escoje una opción</option>
            <option value="sabanas">Sabana</option>
            <option value="fundas">Fundas</option>
            <option value="toallas">Toalla</option>
            <option value="cobijas">Cobija</option>
          </select>
        </div>

        <div class="">
          <h3>&nbsp</h3>
        </div>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              <h5>Cantidad</h5>
              <input type="text" name="cantidad" class="input">
           </div>
        </div>


        <input type="submit" class="btn" value="Registrar">
					<a href="admin.php">Volver atras</a>
      </form>

			</div>
		</div>

    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>