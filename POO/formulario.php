<?php
require('./contador.php');
extract($_GET);

// $numero = isset($acumulador) ? (int) $acumulador : 0;
$numero = 0;
$codigo = '';
//$contador = new contador((int) $_GET['acumulador'] ?? 0);

if (isset($acumulador)) {
    $numero = (int) $acumulador;
    if (isset($sumar)) {
       $codigo = '+';
    } else {
       $codigo = '-';
    }
   }
   $contador1 = new Contador($numero, $codigo);
// $contador2 = new contador(2, '+');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
</head>

<body>
    <form class="container">
        <h1>Contenedor</h1>
        <button name="sumar">+1</button>
        <button name="restar">-1</button>
        <input type="hidden" name="acumulador" value="<?=$contador1->getValor();?>">
        <div>
            <?=$contador1->getValor();?>
        </div>
    </form>
</body>

</html>