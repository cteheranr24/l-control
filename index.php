// Uso del $_SESSION para validar control de acceso.
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // uso del session_destroy para finalizar la sesión.
        session_destroy(); 
	}
	
	//Validamos que tipo de usuario ingresara.
	if(isset($_SESSION['rol'])){
		session_start();
        switch($_SESSION['rol']){
            case 1:
            header('location: admin.php');
            break;

            case 2:
            header('location: Principal_camarera.php');
			break;
			
			case 2:
			header('location: Principal_lavanderia.php');
			break;

            default:
        }
    }

	include_once "control_acceso.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login | L-Control</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/todo.svg">
		</div>
			<div class="login-content">

				<form action="control_acceso.php" method="POST">

					<img src="img/avatar.svg">

						<h2 class="title">L-Control</h2>
						
						//Mensaje en caso que las credenciales sean incorrectas.
						<?php
						if (isset($errorLogin)) {
							echo $errorLogin;
						}
						?>

							<div class="input-div one">

								 <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>

									<div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name= "username" class="input">
           		   	</div>
							</div>
									<div class="input-div pass">
										<div class="i">
											<i class="fas fa-lock"></i>
										</div>
										<div class="div">
											<h5>Password</h5>
           		    		<input type="password" name="password" class="input">

										</div>

									</div>

											<a href="#">¿Olvidaste tu contraseña?</a>
            					<input type="submit" class="btn" value="Login">
          </form>

				</div>

		</div>

		<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
