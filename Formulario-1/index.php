<?php 

require('./includes/gestion-envio-formulario.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Formulario de contacto para contactar conmigo  ...">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            max-width: 1750px;
            font-family: Arial, sans-serif;
            background-color: #ed8989;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }

        .fields {
            display: grid;
            /* @media (min-width: 375px) {
                grid-template-columns: 6em 1fr;
            }*/
        }

        .main-title {
            margin-top: 0;
        }

        form {
            background-color: #fff;
            padding: 12px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 290px;
        }

        label {
            display: block;
            margin-bottom: 6px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 13px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;


        }

        input[type="radio"] {
            margin-right: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 6px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <main class="main-content">

        <form action="send.php" method="post">

            <h1>Formulario</h1>

            <ul class="fields">
                <li class="field required">
                    <label for="firstName">
                        Nombre: </label>


                    <input class="form-control" placeholder="Experimento" id="firstName" name="firstName" type="text" value="<?php 
                    if(isset($_POST['nombre'])) {
                        echo $_POST['nombre'];
                    }
                ?>">

                </li>

                <li class="field required">
                    <label for="lastName">Apellidos: </label>
                    <input class="form-control" placeholder="Experimento2" id="lastName" name=" lastName" type="text" value="<?=$_REQUEST['apellidos']??"";?>" >
                </li>

                <li class="field">
                    <label for="edad">Edad: </label>
                    <input class="form-control" placeholder="25" id="edad" name="edad" type="number">
                </li>

            </ul>

            <ul class="fields">

                <li class="field">
                    <fieldset>
                        <h2>Correo electrónico</h2>
                        <label>Email: <input type="email" name="email"
                                placeholder="ssalcam.appventures@gmail.com" value="<?=$_REQUEST['email']??"";?>"></label>
                    </fieldset>
                </li>

                <?php
        if ($formularioEnviado):
            if(isset($errorNombre)):
        ?>

<strong>Rellena el campo nombre</strong>   
          
          
          <?php
              endif;
              if (isset($errorCorreo)) {
                  echo "<strong>Rellena el campo Correo</strong>";
              }
          endif;
          ?>

                <li>
                    <h3>Número de teléfono</h3>
                    <label for="telefono">Número de Teléfono: </label>
                    <input type="tel" id="telefono" name="telefono" pattern="[0-9]{9}" placeholder="Ej: 123456789">
                </li>

            </ul>

            <div>
                <h2>Sexo</h2>

                <label for="male">
                    Hombre
                    <input name="sexo" id="male" type="radio" value="H">
                </label>

                <label for="female">
                    Mujer
                    <input name="sexo" id="female" type="radio" value="M">
                </label>
            </div>

            <button>Envío</button>

        </form>
    </main>
</body>

</html>