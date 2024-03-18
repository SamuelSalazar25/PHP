<?php
declare(strict_types = 1);
require('./formulario.php'); // Cargo la plantilla

// instanciar el formulario
$formulario = new Form ($_REQUEST['precio'] ?? '0', $_REQUEST['nombre-producto']??''); 
//$formulario->setMethod('PUT');

// Cargar la vista

require ('./pagina.php');