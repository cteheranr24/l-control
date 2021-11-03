<?php
session_start();
include_once "Modelo/tramite_usuario.php";
include_once "Modelo/usuario.php";


    function validar_datos(){
        
    if(isset($_POST['id_rol']) && isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['contrasena'])){
        
        if($_POST['id_rol']>0){
            $username= $_POST['usuario'];
            $password= $_POST['contrasena'];
            $rol= $_POST['id_rol'];
            $name= $_POST['nombre'];

            $conexion=new PDO('mysql:host=localhost; dbname=ghsuite', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $nuevo= new Usuario();
            $nuevo->setUsername($username);
            $nuevo->setPassword($password);
            $nuevo->setName($name);
            $nuevo->setRol($rol);
            $nuevo->setEstado("1");


            $tramite= new Tramite_dato($conexion);
            $resultado = $tramite->insertarUsuario($nuevo);

            if($resultado){
                $errorLogin = "Usuario ".$nuevo->getUsername()." ha sido registrado.";
                include_once 'agregar_usuario.php';
            }
            elseif(!$resultado){
                $errorLogin = "Verifique los datos igresados.";
                include_once 'agregar_usuario.php';
            }
        }
        else {
            $errorLogin = "Debe seleccionar un rol.";
            include_once 'agregar_usuario.php';
        }
        
    }

    }validar_datos();


?>