<?php
class Fabrica 
{
    private $_empleados;
    private $_razonSocial;

    public function __construct($rs){
        $this->_razonSocial=$rs;
        $this->_empleados = array();
    }

    public function agregarEmpleado($persona){
        return(array_push($this->_empleados,$persona)?true:false);
    }

    public function calcularSueldos(){
        $total=0;
        foreach($this->_empleados as $emplado){
            $total+=$empleado->_sueldo;
        }
        return $total;
    }

    public function eliminarEmpleado($persona){
        for ($i=0; $i < count($this->_empleados); $i++) { 
            if($this->_empleados[$i]->_dni==$persona->_dni){
                unset($this->_empleados[$i]);
            }
        }
    }

    private function eliminarEmpleadosRepetidos(){
        $rs=array_unique($this->_empleados);
        return $this->_empleados;
    }

    public function ToString(){
        $retorno="Razon Social:".$this->_razonSocial."<br>";
        foreach($this->_empleados as $emplado){
            $retorno.=$emplado->ToString()."<br>";
        }
        return $retorno;
    }
}



?>