<?php
session_start();
include_once "Modelo/tramite_lenceria.php";
include_once "Modelo/lenceria.php";
include_once "Modelo/movimiento.php";


    function validar_datos(){
    
    //validamos que los campos este llenos
    if(isset($_POST['movimiento']) && isset($_POST['toalla']) && isset($_POST['cobija']) && isset($_POST['sabana']) && isset($_POST['funda'])){
        
        //validamos que no igresen datos negativos
        if($_POST['toalla']!="" && $_POST['cobija']!="" && $_POST['sabana']!="" && $_POST['funda']!=""){
            
            $movimiento= $_POST['movimiento'];
            $toalla= $_POST['toalla'];
            $cobija= $_POST['cobija'];
            $sabana= $_POST['sabana'];
            $funda= $_POST['funda'];

            $conexion=new PDO('mysql:host=localhost; dbname=ghsuite', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $nuevo= new Movimiento();
            $nuevo->setFecha(Date("Y-m-d"));
            $nuevo->setCanToalla($toalla);
            $nuevo->setCanCobija($cobija);
            $nuevo->setCanSabana($sabana);
            $nuevo->setCanFundas($funda);
            $nuevo->setTipo($movimiento);
            $nuevo->setUsuario($_SESSION["username"]);

            $tramite= new Tramite_lenceria($conexion);
            $resultado = $tramite->insertarMovimiento($nuevo);

            if($resultado){
                $error = "su movimiento ha sido registrado.";
                include_once 'arribos-despachos.php';
            }
            elseif(!$resultado){
                $error = "Verifique los datos igresados.";
                include_once 'arribos-despachos.php';
            }
        }
        else {
            $error = "Verifique los datos registrados.";
            include_once 'arribos-despachos.php';
        }
        
    }

    }validar_datos();


?>