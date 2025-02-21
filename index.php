<?php
require_once "controllers/ProductoController.php";

$controller = new ProductoController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["precio"])) {
        $controller->agregarProducto($_POST["nombre"], $_POST["precio"]);
        header("Location: views/productos.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Nuevo Producto</h1>
    <form method="POST" action="">
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Precio:</label>
            <input type="number" step="0.01" name="precio" required>
        </div>
        <button type="submit">Agregar Producto</button>
    </form>
    <br>
    <a href="./views/productos.php">Ver Lista de Productos</a>
</body>
</html>
