<?php

class Movimiento{
    
   // private $id;
    private $fecha;
    private $canToalla;
    private $canCobija;
    private $canSabana;
    private $canFundas;
    private $tipo;
    private $usuario;

    public function getFecha(){
        return $this->fecha;        
    }
    
    public function getCanToalla(){
        return $this->canToalla;        
    }

    public function getCanCobija(){
        return $this->canCobija;        
    }

    public function getCanSabana(){
        return $this->canSabana;        
    }

    public function getCanFundas(){
        return $this->canFundas;        
    }

    public function getTipo(){
        return $this->tipo;        
    }

    public function getUsuario(){
        return $this->usuario;        
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function setCanToalla($canToalla){
        $this->canToalla=$canToalla;
    }

    public function setCanCobija($canCobija){
        $this->canCobija=$canCobija;
    }

    public function setCanSabana($canSabana){
        $this->canSabana=$canSabana;
    }

    public function setCanFundas($canFundas){
        $this->canFundas=$canFundas;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

    public function setUsuario($usuario){
        $this->usuario=$usuario;        
    }

}






?>