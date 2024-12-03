<?php

    require_once 'Coche.php';
    require_once 'Concesionario.php';

    $coche = new Coche("Volvo ", "XC90 ", "Azul ", 5);
    $concesionario = new Concesionario();
    $concesionario->mostrarVehiculo($coche);

?>