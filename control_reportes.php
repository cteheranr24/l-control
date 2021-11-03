<?php
session_start();
include_once "Modelo/tramite_lenceria.php";


    function validar_datos(){
    
    //validamos que los campos este llenos
    if(isset($_POST['lenceria']) && isset($_POST['cantidad']) && isset($_POST['motivo'])){
        
        if($_POST['lenceria']=="nulo"){
            
                $error = "Debe seleccionar una lenceria.";
                include_once 'reportar.php';

        }
        else{
        //validamos que no igresen datos negativos
        if($_POST['cantidad']>=1){
            
            $lenceria= $_POST['lenceria'];
            $cantidad= $_POST['cantidad'];
            $motivo= $_POST['motivo'];
            $usuario= $_SESSION['username'];
            $fecha= Date("Y-m-d");

            $conexion=new PDO('mysql:host=localhost; dbname=ghsuite', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $tramite= new Tramite_lenceria($conexion);
            $resultado = $tramite->insertarReporte($lenceria, $cantidad, $motivo, $usuario, $fecha);

            if($resultado){
                $error = "Se ha radicado su reporte.";
                include_once 'reportar.php';
            }
            elseif(!$resultado){
                $error = "No se ha podido realizar el reporte.";
                include_once 'reportar.php';
            }
        }
        else {
            $error = "Verifique la cantidad digitada.";
            include_once 'reportar.php';
        }
    }
    }
    

    }validar_datos();


?>