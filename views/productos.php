<?php
require_once "controllers/ProductoController.php";

$controller = new ProductoController();

// Agregar producto si se envió el formulario
if (isset($_POST["nombre"]) && isset($_POST["precio"])) {
    $controller->agregarProducto($_POST["nombre"], $_POST["precio"]);
}

// Obtener todos los productos
$productos = $controller->listarProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h2>Agregar Producto</h2>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre del producto" required>
        <input type="number" step="0.01" name="precio" placeholder="Precio" required>
        <button type="submit">Agregar</button>
    </form>

    <h2>Lista de Productos</h2>
    <ul>
        <?php foreach ($productos as $prod) : ?>
            <li>
                <?= $prod['nombre'] ?> - $<?= $prod['precio'] ?>
                <a href="eliminar.php?id=<?= $prod['id'] ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
