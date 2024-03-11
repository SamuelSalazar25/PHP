<?php
declare(strict_types = 1);

class Mamifero {
    private string $microchip = '1111A';
    public string $nombre = 'Sin nombre';
    public string $pelo = '';
    public float $peso = 0;
    public int $edad = 0;

    function __construct(string $microchip, string $nombreMamifero) {
        $this->microchip = $microchip;
        $this->nombre =  $nombreMamifero;
    }

    public function comer () { // método --> función dentro de una clae
        return 'Estoy comiendo';
    }

    // Getters
    public function getMicrochip (): string {
        return $this->microchip;
    }

    // Setter
    public function setMicrochip(string $chip): void {
        $this->microchip = $chip;
    }


    // toString

    function __toString(): string
    {
        $string =  "<ul>";
            $string .= "<li>Nombre: $this->nombre</li>";
            $string .= "<li>Microchip: $this->microchip</li>";
            $string .= "<li>Pelo: $this->pelo</li>";
            $string .= "<li>Edad: $this->edad</li>";
            $string .= "<li>Peso: $this->peso</li>";
        $string .= "</ul>";
        return $string;
    }

}



$perro = new Mamifero('1111A', 'Lily');
$perro->edad = 5;

$perro2 = new Mamifero('1111B', 'Lulu');




//echo "Mi perro se llama $perro->nombre y tiene $perro->edad años. Microchip: " . $perro->getMicrochip();
// echo "<br>Mi perro se llama $perro2->nombre y tiene $perro2->edad años. Microchip: " . $perro2->getMicrochip();

echo $perro;
echo $perro2;