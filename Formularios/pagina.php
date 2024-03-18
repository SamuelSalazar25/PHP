<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form method="<?=$formulario->getMethod();?>">
        <h1>Alta de productos</h1>
        <div>
            <label>
                Nombre del producto
                <input required type="text" name="nombre-producto" value="<?=$formulario->nombreProducto;?>">
            </label>
        </div>

        <div>
            <label>
                Precio del producto
                <input type="number" step="0.1" name="precio" value="<?php echo $formulario->precio;?>">
            </label>
        </div>
        <button name="send">Enviar</button>
    </form>
    <?=$formulario;?>
</body>

</html>