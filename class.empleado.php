<?php
//die("llega");
include_once 'class.persona.php';
class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;

    public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo){
        /*
        parent::$_apellido = $apellido;
        parent::$_nombre = $nombre;
        parent::$_dni = $dni;
        parent::$_sexo = $sexo;
        */
        parent::__construct($nombre,$apellido,$dni,$sexo);
        $this->_legajo= $legajo;
        $this->_sueldo= $sueldo;
    }

    public function getLegajo(){
        return $this->_legajo;
    }

    public function getSueldo(){
        return $this->_sueldo;
    }

    public function Hablar($idioma){
        return "El empleado Habla ".$idioma;
    }

    public function ToString(){
        return parent::getApellido()."-".parent::getNombre()."-".parent::getDni()."-".parent::getSexo()."-".$this->_legajo."-".$this->_sueldo;
    }
}

?>