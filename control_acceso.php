<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(isset($_SESSION['rol'])){
session_start();
    switch($_SESSION['rol']){
        case 1:
            header('location: admin.php');
        break;

        case 2:
        header('location: principal_camarera.php');
        break;

        case 3:
        header('location: principal_lavanderia.php');
        break;
  
        default:
    }
}

  include_once "Modelo/tramite_usuario.php";
  include_once "Modelo/usuario.php";

  function mostrar($rol){
    switch($rol){
      case '1':
        header('location: admin.php');
        break;
 
      case '2':
        header('location: principal_camarera.php');
        break;
 
      case '3':
        header('location: principal_lavanderia.php');
        break;
 
      default:
    }
  }
  function validar_datos(){
 
    if(isset($_POST['username']) && isset($_POST['password'])){
      $username= $_POST['username'];
      $password= $_POST['password'];

      $conexion=new PDO('mysql:host=localhost; dbname=ghsuite', 'root', '');
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $tramite= new Tramite_dato($conexion);
      $_SESSION['rol'] = $tramite->iniciar_sesion($username, $password);
      $_SESSION['username']=$username;
      if($_SESSION['rol']){
      mostrar($_SESSION['rol']);
    }
    else{
      $errorLogin = "Verifique ususario y/o Contraseña.";
      include_once "index.php";
    }
  }

  else{
    $errorLogin = "Verifique ususario y/o Contraseña.";
    include_once "index.php";
  }

 

 } validar_datos();

    
 ?>