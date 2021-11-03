<?php

class Lenceria{
    
    private $tLenceria;
    private $cActva;
    private $cBaja;

    public function getTLenceria(){
        return $this->tLenceria;        
    }

    public function getCActiva(){
        return $this->cActiva;        
    }
    
    public function getCBaja(){
        return $this->cBaja;        
    }

    public function setTLenceria($tLenceria){
        $this->tLenceria=$tLenceria;
    }

    public function setCActiva($cActva){
        $this->cActiva=$cActva;
    }

    public function setCBaja($cBaja){
        $this->cBaja=$cBaja;
    }

}






?>