<?php
declare (strict_types = 1);

class contador {
    private int $valor = 0;

    function __construct (int $acumulador, string $codigoOperacion) {
        $this->valor = $acumulador;
        $this->hacerOperacion($codigoOperacion);
}

private function hacerOperacion (string $codigoOperacion) {
    switch ($codigoOperacion) {
        case '+':
            $this->valor++;
        break;
        case '-':
            $this->valor--;
        break;
    }
}

// Getter

public function getValor (): int {
    return $this->valor;
}
}

?>