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

<?php
session_start();
include_once "Modelo/tramite_lenceria.php";


    function validar_datos(){
    
    //validamos que los campos este llenos
    if(isset($_POST['fecha'])){
        
        if($_POST['fecha']==null){
            
                $error = "Debe seleccionar una fecha.";
                include_once 'informes.php';

        }
        else{
            
            $fecha= $_POST['fecha'];

            $conexion=new PDO('mysql:host=localhost; dbname=ghsuite', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $tramite= new Tramite_lenceria($conexion);
            $resultado = $tramite->generarInforme($fecha);

            if(empty($resultado)){
                $error = "No hay informes para la fecha.";
                include_once 'informes.php';
                return null;
            }
            else {
                echo "<h3> <br> Para la fecha ".$fecha." <br> <h3>";
                foreach($resultado as $valor){
                    if($valor->getTipo()=="Enviado"){
                    echo "<h3> <br> El usuario ".$valor->getUsuario()." <wbr>registr&oacute; el envio de las siguientes lenceria: <br> -".$valor->getCanToalla()." unidades de toallas. <br> -".$valor->getCanSabana()." unidades de sabanas. <br> -".$valor->getCanFundas()." unidades de fundas. <br> -".$valor->getCanCobija()." unidades de cobijas. <h3>";

                }
                else{
                    echo "<h3> <br> El usuario ".$valor->getUsuario()." <wbr>registr&oacute; el recibido de las siguientes lenceria: <br> -".$valor->getCanToalla()." unidades de toallas. <br> -".$valor->getCanSabana()." unidades de sabanas. <br> -".$valor->getCanFundas()." unidades de fundas. <br> -".$valor->getCanCobija()." unidades de cobijas<h3>";
                }
                }
                }
            
        }
    }
    else{
        $error = "Verifique la fecha digitada.";
            include_once 'informes.php';
            return null;
    }
    
}

validar_datos();


?>


	
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
