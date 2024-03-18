<?php

declare(strict_types = 1);

class Password {
    private int $longitud = 8;
    private string $contraseña = '';
    private string $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function __construct (int $long = 8) {
        $this->longitud = $long; 
        $this->generarPassword();   
    }
    function generarPassword (): void {         
        // Inicializa la contraseña como una cadena vacía
        $contrasena = '';    
        // Genera la contraseña aleatoria seleccionando caracteres de $caracteres
        for ($i = 0; $i < $this->longitud; $i++) {
            $indice = rand(0, strlen($this->caracteres) - 1);  //rand()
            $contrasena .= $this->caracteres[$indice]; // concatenar strings
        }    
        $this->contraseña = $contrasena;
    }
    public function setLongitud (int $long): void {
        $this->longitud = $long;
    }
    function getContraseña (): string {
        return $this->contraseña;
    }
    function esFuerte (): bool {
        // ctype_digit // función que determina si algo se dígito numérico
        $contadorDigitos = 0;
        $contadorMay = 0;
        $contadorMin = 0;
        for ($i = 0; $i < $this->longitud; $i ++){
            if (ctype_digit($this->contraseña[$i])) {
               $contadorDigitos++;
            } else {
                $letra = $this->contraseña[$i]; // A
                // caracteres alfabeticos
                if ($letra === strtolower($letra)) { //true
                    // letra es minuscula
                    $contadorMin++;
                } else {
                    // letra es mayuscula
                    $contadorMay++;
                }
            }
        }
        return $contadorDigitos > 5 && $contadorMay > 2 && $contadorMin > 1;
    }    
}
$contrasena2 = new Password();
if ($contrasena2->esFuerte()) {
    echo "Contraseña fuerte";
} else {
    echo "Contraseña débil";
}
echo $contrasena2->getContraseña();
?>