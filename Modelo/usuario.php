<?php

class Usuario{
    
    private $username;
    private $password;
    private $name;
    private $rol;
    private $estado;

    //Metodos getter
    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getName(){
        return $this->name;
    }

    public function getRol(){
        return $this->rol;
    }

    public function getEstado(){
        return $this->estado;
    }

    //Metodos setter
    public function setUsername($username){
        $this->username=$username;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function setRol($rol){
        $this->rol=$rol;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
}


class Camarera extends Usuario{

}

class Administrador extends Usuario{
    
}

class Per_Lavanderia extends Usuario{

}




?>