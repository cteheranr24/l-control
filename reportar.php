<!DOCTYPE html>
<html>
<head>
	<title>Arribos y despachos</title>
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
			<form action="control_reportes.php" method="POST">
				<h1 class="title">Reportar lenceria</h1>
            <h3>&nbsp</h3>
            <?php
					if (isset($error)) {
						echo $error;
               }
				?>
        
        <div >
          <h3>Tipo de lenceria</h3>
          <select class="custom-select" name= "lenceria">
            <option value="nulo">Escoje una opción</option>
            <option value="Toalla">Toalla</option>
            <option value="Sabana">Sabana</option>
            <option value="Cobija">Cobija</option>
            <option value="Fundas">Fundas</option>
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
              <input type="number" name="cantidad" class="input">
           </div>
        </div>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              <h5>Motivos (Opcional)</h5>
              <input type="text" name="motivo" class="input">
           </div>
        </div>


        <input type="submit" class="btn" value="Reportar">
					<a href="principal_lavanderia.php">Volver atras</a>
      </form>

			</div>
		</div>

    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>