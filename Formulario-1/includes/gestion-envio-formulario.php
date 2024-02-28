<?php
// $_SERVER
$formularioEnviado = false; 

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $formularioEnviado = true;
    extract($_POST); // extraer índices de un array asociativo y los convierte en variables
    // Validar campos obligatorios. SIEMPRE LIMPIAR CAMPOS --> trim()
    if(empty(trim($firstName))) {
        $errorNombre = true;
    }

    if(empty(trim($email))) {
        $errorCorreo = true;
    }

    if (!isset($errorNombre) && !isset($errorCorreo)) {
        header('Location: http://localhost/index.html');
    }
}
