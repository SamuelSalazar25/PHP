<?php
// Crear una clase llamado Form que tenga dos campos nombre-producto y precio. Se implementará en un formulario HTML para que realice la gestión del mismo.

class Form {
    private string $method = 'GET';
    public float $precio = 0;
    public string $nombreProducto = '';

    function __construct(string $precio, string $producto) {
        $this->precio = (float) $precio;
        $this->nombreProducto = $producto;
    }

    public function getMethod(): string {
        return $this->method;
    }
    public function setMethod(string $metodo = 'POST'): void {
        $this->method = $metodo;
    }

    public function __toString(): string
    {
        if (isset($_REQUEST['precio'])) {
            return "
            <ol>
            <li>Producto: $this->nombreProducto</li>
            <li>Precio: $this->precio</li>
            </ol>";
        }
        return '';
    }
}
