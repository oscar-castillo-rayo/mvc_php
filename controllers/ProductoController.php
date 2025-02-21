<?php
require_once(__DIR__ . '/../models/Producto.php');

class ProductoController {
    private $producto;

    public function __construct() {
        $this->producto = new Producto();
    }

    public function agregarProducto($nombre, $precio) {
        return $this->producto->agregarProducto($nombre, $precio);
    }

    public function listarProductos() {
        return $this->producto->obtenerProductos();
    }

    public function modificarProducto($id, $nombre, $precio) {
        return $this->producto->actualizarProducto($id, $nombre, $precio);
    }

    public function borrarProducto($id) {
        return $this->producto->eliminarProducto($id);
    }
}
?>
