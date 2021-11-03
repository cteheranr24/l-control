<?php
session_start();
include_once "Modelo/tramite_usuario.php";
include_once "Modelo/usuario.php";

function accionar($username, $accion, $tramite){
    if($accion=='1'){
        $resultado = $tramite->activarUsuario($username);
        if($resultado=='1'){
            $mensaje = "El usuario ".$username." ha sido activado.";
            include_once 'estado_usuario.php';
        }
        elseif($resultado=='2'){
            $mensaje = "El usuario".$username." no se ha encontrado.";
            include_once 'estado_usuario.php';
        }
        elseif($resultado=='3'){
            $mensaje = "Ya ".$username." se encontraba activado.";
            include_once 'estado_usuario.php';
        }
    }
    elseif($accion=='2'){
        $resultado = $tramite->desactivarUsuario($username);

        if($resultado=='1'){
            $mensaje = "El usuario ".$username." ha sido desactivado.";
            include_once 'estado_usuario.php';
        }
        elseif($resultado=='2'){
            $mensaje = "El usuario".$username." no se ha encontrado.";
            include_once 'estado_usuario.php';
        }

        elseif($resultado=='4'){
            $mensaje = "No puede desactivar este administrador.";
            include_once 'estado_usuario.php';
        }
    }  
}

function validar_datos(){
        
    if(isset($_POST['username']) && isset($_POST['accion'])){

            $username=$_POST['username'];
            $accion=$_POST['accion'];

            $conexion=new PDO('mysql:host=localhost; dbname=ghsuite', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $tramite= new Tramite_dato($conexion);
            
            accionar($username, $accion, $tramite);
        
    }
    else{
        $mensaje = "Verifique el usuario.";
        include_once 'estado_usuario.php';
    }


    }validar_datos();


?>