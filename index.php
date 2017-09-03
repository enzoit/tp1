<?php

//die("llega");
require("class.empleado.php");
$enzo = new Empleado("Enzo","Mellano","31896356",'M',26000);
echo($enzo->ToString());
?>