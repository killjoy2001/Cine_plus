<?php

require_once "./control/control.php";

$objControl = new control();

$objControl2 = new control();


$objControl->paginaInicio();

$objControl2->ejecutar_procesos();

?>