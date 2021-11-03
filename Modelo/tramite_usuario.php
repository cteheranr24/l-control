<?php


include_once "usuario.php";
//Esta clase ha sido creada para disminuir el acoplamiento entre las clase lenceria, movimiento, y usuario (FABRICACION PURA)
class Tramite_dato{

private $conexion;

public function __construct($conexion){
    $this->setConexion($conexion);
}

public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
}

public function insertarUsuario(Usuario $usuario){
    $nombre=$usuario->getUsername();
    $consulta=$this->conexion->query("SELECT * FROM usuario WHERE username = '".$nombre."'");
    $resultado=$consulta->fetch(PDO::FETCH_ASSOC);
    
    if($resultado["username"]!=$nombre){
        $query="INSERT INTO usuario (username, password, name, rol, estado) VALUES ('".$usuario->getUsername()."', '".$usuario->getPassword()."', '".$usuario->getName()."', '".$usuario->getRol()."', '".$usuario->getEstado()."')";
        $this->conexion->exec($query);
        return true;
    }
    else{
        return false;
    }
    
}

public function iniciar_sesion($username, $password){

  $resultado=$this->conexion->query("SELECT * FROM usuario WHERE username = '" .$username. "' AND password = '" .$password. "'");
   $row = $resultado->fetch(PDO::FETCH_ASSOC);

    if($row["estado"]=='1'){
       if($row == true){
        $rol = $row["rol"];
        $_SESSION['rol'] = $rol;
        return $_SESSION['rol'];
        }else {
		    return null;
        }
    }
    else{
        return null;
    }
 }

 function activarUsuario($username){

    $consulta=$this->conexion->query("SELECT * FROM usuario WHERE username = '" .$username. "'");
    $resul=$consulta->fetch(PDO::FETCH_ASSOC);

    if($consulta){
    if($resul["estado"]!='1'){
            
            $query="UPDATE usuario SET estado='1' WHERE username='".$username."'";
            $resultado= $this->conexion->exec($query);
            
            if($resultado){
                return '1';
            }
            else{
                return '2';
            }
    }
    else{
            return '3';
    }
    }
    else{
        return '2';
    }

 }

function desactivarUsuario($username){
    
    $consulta=$this->conexion->query("SELECT * FROM usuario WHERE username = '" .$username. "'");
    $resul=$consulta->fetch(PDO::FETCH_ASSOC);

    if($consulta){
    if($resul["rol"]==1){

        $consul=$this->conexion->query("SELECT COUNT(rol) FROM usuario WHERE rol = '1'");
        if($consul!='1' && $_SESSION["username"]!=$username){
            
            $query="UPDATE usuario SET estado='2' WHERE username='".$username."'";
            $resultado= $this->conexion->exec($query);
            
            if($resultado){
                return '1';
            }
            else{
                return '2';
            }
        }
        else{
            return '4';
        }
    }
    else{
        $query="UPDATE usuario SET estado='2' WHERE username='".$username."'";
        $resultado= $this->conexion->exec($query);
            if($resultado){
                return '1';
            }
            else{
                return '2';
            }  
    }
    }
    else{
        return '2';
    }
 }


}

?>