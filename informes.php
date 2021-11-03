<?php
	
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
			<img src="img/undraw_business_decisions_gjwy.svg">
		</div>
		<div class="login-content">
			<form action="control_informes.php" method="POST" target=»_blank»>
				<img src="img/file.svg">
				<h3>&nbsp</h3>
				<h1 class="title">Informes</h1>
				<h3>&nbsp</h3>
 
            <?php
						if (isset($error)) {
							echo $error;
						}
						?>

        <div class="input-div one">
           <div class="i">
              <i class="fas fa-align-justify"></i>
           </div>
           <div class="div">
              
              <input type="date" name= "fecha" class="input">
           </div>
        </div>


        <input type="submit" class="btn" value="Buscar">
		<h3>&nbsp</h3>

		<?php
		if (isset($mensaje)) {
			echo $mensaje;
		}
		?>
						<h3>&nbsp</h3>

					<a href="admin.php">Volver atras</a>
      </form>

			</div>
		</div>

	
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
