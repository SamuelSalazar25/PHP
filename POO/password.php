<?php
// Función para verificar la fortaleza de la contraseña
function esContraseñaSegura($contraseña) {
    // Requisitos de seguridad
    $longitud_minima = 8;
    $requiere_mayuscula = true;
    $requiere_minuscula = true;
    $requiere_numero = true;
    $requiere_caracter_especial = true;
    
    // Verificar longitud mínima
    if (strlen($contraseña) < $longitud_minima) {
        return false;
    }
    
    // Verificar si contiene al menos una mayúscula
    if ($requiere_mayuscula && !preg_match('/[A-Z]/', $contraseña)) {
        return false;
    }
    
    // Verificar si contiene al menos una minúscula
    if ($requiere_minuscula && !preg_match('/[a-z]/', $contraseña)) {
        return false;
    }
    
    // Verificar si contiene al menos un número
    if ($requiere_numero && !preg_match('/[0-9]/', $contraseña)) {
        return false;
    }
    
    // Verificar si contiene al menos un caracter especial
    if ($requiere_caracter_especial && !preg_match('/[^a-zA-Z0-9]/', $contraseña)) {
        return false;
    }
    
    // La contraseña cumple con todos los requisitos de seguridad
    return true;
}

// Verificar si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contraseña = $_POST['contraseña'];

    // Verificar si la contraseña es segura
    if (esContraseñaSegura($contraseña)) {
        echo "La contraseña es segura.";
    } else {
        echo "La contraseña no cumple con los requisitos de seguridad.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verificar contraseña segura</title>
</head>
<body>
    <h2>Verificar contraseña segura</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Contraseña: <input type="password" name="contraseña" required><br><br>
        <input type="submit" name="submit" value="Verificar">
    </form>
</body>
</html>
