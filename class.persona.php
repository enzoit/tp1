<?php
abstract class Persona 
{
    private $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;

    public function __construct($nombre,$apellido,$dni,$sexo) {
        $this->_apellido = $apellido;
        $this->_nombre = $nombre;
        $this->_dni = $dni;
        $this->_sexo = $sexo;
    }

    function getApellido(){
        return $this->_apellido;
    }

    function getNombre(){
        return $this->_nombre;
    }

    function getDni(){
        return $this->_dni;
    }

    function getSexo(){
        return $this->_sexo;
    }

    abstract public function Hablar($idioma);

    function ToString(){
        return $this->getApellido()."-".$this->getNombre()."-".$this->getDni()."-".$this->getSexo();
    }

}

?>