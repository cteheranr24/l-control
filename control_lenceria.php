<?php
session_start();
include_once "Modelo/tramite_lenceria.php";
include_once "Modelo/lenceria.php";

    function valida_registro($tipo_registro, $cantidad, $tipo_lenceria, $tramite){

        if($tipo_registro==1){
            
            $resultado = $tramite->agregarInventario($cantidad, $tipo_lenceria);

            if($resultado){
                $error = "Su inventario ha sido actualizado.";
                include_once 'administra_lenceria.php';
            }
            else{
                $error = "ERROR: la lenceria no pudo ser agregada.";
                include_once 'administra_lenceria.php';
            }

        }
        elseif ($tipo_registro==2) {
            
            $resultado = $tramite->darDeBaja($cantidad, $tipo_lenceria);

            if($resultado){
                $error = "Su inventario ha sido actualizado.";
                include_once 'administra_lenceria.php';
            }
            elseif(!$resultado){
                $error = "ERROR: No se pudo dar de baja a la lenceria.";
                include_once 'administra_lenceria.php';
            }
        }

    }
    function validar_datos(){
        
    if(isset($_POST['gridRadios']) && isset($_POST['cantidad']) && isset($_POST['lenceria'])){
        
        if($_POST['lenceria']=="nulo"){
            $error = "Debe seleccionar una lencería.";
            include_once 'administra_lenceria.php';
        }
        else{
            if($_POST['cantidad']>0){
                $tipo_registro= $_POST['gridRadios'];
                $tipo_lenceria= $_POST['lenceria'];
                $cantidad= $_POST['cantidad'];

                $conexion=new PDO('mysql:host=localhost; dbname=ghsuite', 'root', '');
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $tramite= new Tramite_lenceria($conexion);

                valida_registro($tipo_registro, $cantidad, $tipo_lenceria, $tramite);

            }
            else {
                $error = "Verifique la cantidad ingresada.";
                include_once 'administra_lenceria.php';
            }
        }
    }

    }validar_datos();


?>