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
			<img src="img/seccion.svg">
		</div>
		<div class="login-content">
			<form action="control_movimiento.php" method="POST">
				<h1 class="title">L-Control</h1>
 
            <?php
						if (isset($error)) {
							echo $error;
						}
						?>
        
        <div class="option">
          <fieldset class="form-group">
            <div class="row">
            <h3>Tipo de movimiento</h3>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="movimiento" id="gridRadios1" value="Enviado" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Enviar
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="movimiento" id="gridRadios2" value="Recibido">
                  <label class="form-check-label" for="gridRadios2">
                    Recibir
                  </label>
                </div>
              </div>
            </div>
            <h5>&nbsp</h5>
          </fieldset>
        </div>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              <h5>Cantidad de toalla</h5>
              <input type="number" name= "toalla" class="input">
           </div>
        </div>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              <h5>Cantidad de cobija</h5>
              <input type="number" name= "cobija" class="input">
           </div>
        </div>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              <h5>Cantidad de sabana</h5>
              <input type="number" name= "sabana" class="input">
           </div>
        </div>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              <h5>Cantidad de fundas</h5>
              <input type="number" name= "funda" class="input">
           </div>
        </div>


        <input type="submit" class="btn" value="Registrar">
					<a href="principal_lavanderia.php">Volver atras</a>
      </form>

			</div>
		</div>

    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>
