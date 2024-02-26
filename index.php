<?php
declare(strict_types=1); // funciones y objetos
// define('PI', 3.1416);
// const PI = 3.1416;


function calcularAreaCirculo (float $radio):float {  // radio = 2.2 --> 3.1416 * radio * radio
    return M_PI * $radio * $radio;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form>
        <h1>Area círculo</h1>

    

        <label>
            Dame un radio
            <input id="radio" step="0.1" type="number" name="radio" placeholder="1,5">
        </label>
        <output name="resultado" for="radio">
            <?php
            if(isset($_REQUEST['enviado'])) {
                $radio = (float) $_REQUEST['radio'];
                echo calcularAreaCirculo($radio);
                echo  $_REQUEST['enviado'];
            }
            ?>
        </output>
        <button name="enviado">Calcular</button>

    </form>
</body>
</html>