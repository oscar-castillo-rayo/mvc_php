<?php
require_once "config/database.php";

class Producto {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    // Agregar producto
    public function agregarProducto($nombre, $precio) {
        $sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":precio", $precio);
        return $stmt->execute();
    }

    // Obtener productos
    public function obtenerProductos() {
        $sql = "SELECT * FROM productos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Actualizar producto
    public function actualizarProducto($id, $nombre, $precio) {
        $sql = "UPDATE productos SET nombre = :nombre, precio = :precio WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":precio", $precio);
        return $stmt->execute();
    }

    // Eliminar producto
    public function eliminarProducto($id) {
        $sql = "DELETE FROM productos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>
