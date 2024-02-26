<?php

extract($_POST); // convertir los índices en variables de un array asociativo

if (isset($firstName)) {
    // Gestionamos
    if(strlen(trim($firstName)) === 0) {

        echo "Error no cubriste el campo nombre";
    } else {
       echo "Tu nombre es $firstName";
    }
}
    
    if (isset($lastName)) {
        // Gestionamos
        if(strlen(trim($lastName)) === 0) {
    
            echo "Error no cubriste el campo apellido";
        } else {
           echo "Tu apellido es $lastName";
        }
    }

        if (isset($edad)) {
            // Gestionamos
            if(strlen(trim($edad)) === 0) {
        
                echo "Error no cubriste el campo edad";
            } else {
               echo "Tu edad es $edad";
            }
        }

            if (isset($email)) {
                // Gestionamos
                if(strlen(trim($email)) === 0) {
            
                    echo "Error no cubriste el campo email";
                } else {
                   echo "Tu email es $email";
                }
            }

            if (isset($telefono)) {
                // Gestionamos
                if(strlen(trim($telefono)) === 0) {
            
                    echo "Error no cubriste el campo sexo";
                } else {
                   echo "Tu telefono es $telefono";
                }
            }

            if (isset($sexo)) {
                // Gestionamos
                if(strlen(trim($sexo)) === 0) {
            
                    echo "Error no cubriste el campo nombre";
                } else {
                   echo "Tu sexo es $sexo";
                }



} else {
    // echo 'Permisos insufucientes.';
    die('Permisos insuficientes.');
}


echo '<a href="javascript:history.back(-1)">Volver</a>';

?>
