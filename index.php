<?php

require_once "controladores/plantilla.controlador.php";
//require_once "controladores/usuarios.controlador.php";

//llamando a los modelos
//require_once "modelos/usuarios.modelo.php";


// creamos la instacion del controlador plantilla
$plantilla = new ControladorPlantilla();
$plantilla->crtPlantilla();