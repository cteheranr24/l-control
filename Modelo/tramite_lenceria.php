<?php



include_once "movimiento.php";
include_once "lenceria.php";
//Esta clase ha sido creada para disminuir el acoplamiento entre las clase lenceria, movimiento, y usuario (FABRICACION PURA)
class Tramite_lenceria{

private $conexion;

public function __construct($conexion){
    $this->setConexion($conexion);
}

public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
}

public function insertarMovimiento(Movimiento $movimiento){
        
        $query="INSERT INTO movimiento (fecha, cant_toalla, cant_sabana, cant_cobijas, cant_fundas, tipo_movimiento, usuario) VALUES ('".$movimiento->getFecha()."', '".$movimiento->getCanToalla()."', '".$movimiento->getCanSabana()."', '".$movimiento->getCanCobija()."', '".$movimiento->getCanFundas()."', '".$movimiento->getTipo()."', '".$movimiento->getUsuario()."')";
        $resultado= $this->conexion->exec($query);

        if($resultado){
            return true;
        }
        else{
            return null;
        }

}

public function insertarReporte($tLenceria, $cantidad, $motivo, $usuario, $fecha){
        
    $query="INSERT INTO reportes (tipoL, cantidad, motivo, usuario, fecha) VALUES ('".$tLenceria."', '".$cantidad."', '".$motivo."', '".$usuario."', '".$fecha."')";
    $resultado= $this->conexion->exec($query);

    if($resultado){
        return true;
    }
    else{
        return null;
    }

}

public function agregarInventario($cantidad, $tipo_lenceria){

    $consulta=$this->conexion->query("SELECT * FROM inventario WHERE tipo = '" .$tipo_lenceria. "'");
    $resultado=$consulta->fetch(PDO::FETCH_ASSOC);

    $nuevoTotal=$resultado["cantidad_total"]+$cantidad;
    $nuevoExistencia=$resultado["cantidad_existencia"]+$cantidad;

    $query="UPDATE inventario SET cantidad_total='".$nuevoTotal."', cantidad_existencia='".$nuevoExistencia."' WHERE tipo='".$tipo_lenceria."'";
    $resultado= $this->conexion->exec($query);

    if($resultado){
        return true;
    }
    else{
        return null;
    }
}

public function darDeBaja($cantidad, $tipo_lenceria){

    $consulta=$this->conexion->query("SELECT * FROM inventario WHERE tipo = '" .$tipo_lenceria. "'");
    $resultado=$consulta->fetch(PDO::FETCH_ASSOC);

    $nuevoDeBaja=$resultado["de_baja"]+$cantidad;
    $nuevoExistencia=$resultado["cantidad_existencia"]-$cantidad;

    $query="UPDATE inventario SET de_baja='".$nuevoDeBaja."', cantidad_existencia='".$nuevoExistencia."' WHERE tipo='".$tipo_lenceria."'";
    $resultado= $this->conexion->exec($query);

    if($resultado){
        return true;
    }
    else{
        return null;
    }

}

public function generarInforme($fecha){
    $consulta=$this->conexion->query("SELECT * FROM movimiento WHERE fecha = '" .$fecha. "'");

        $contador=0;
        $matiz=array();
        
        while($registro=$consulta->fetch(PDO::FETCH_ASSOC)){

            $informe=new Movimiento(); //PATRON CREADOR.
    
            $informe->setFecha($registro["fecha"]);
            $informe->setCanToalla($registro["cant_toalla"]);
            $informe->setCanSabana($registro["cant_sabana"]);
            $informe->setCanCobija($registro["cant_cobijas"]);
            $informe->setCanFundas($registro["cant_fundas"]);
            $informe->setTipo($registro["tipo_movimiento"]);
            $informe->setUsuario($registro["usuario"]);
    
            $matiz[$contador]=$informe;
            $contador++;
    
        }
        
        return $matiz;

}


}

?>