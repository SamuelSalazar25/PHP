<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
    extract($_GET);

    if (isset($acumulador)) {
        // casting
        $count = (int) $acumulador;
        $count++;
        $acumulador = $count;
    }
    ?>
    <form class="container">
        <h1>Contenedor</h1>
        <button>+1</button>
        <input type="hidden" name="acumulador" value="<?= $acumulador ?? 0 ?>">
        <div>d
            <?= $acumulador ?? 0 ?>
            <?php
            //if (isset($acumulador)) {
            //    echo $acumulador;
            //} else {
            //    echo 0;
            //}
            ?>
        </div>
    </form>
</body>

</html>