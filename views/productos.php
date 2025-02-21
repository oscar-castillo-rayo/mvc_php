<?php
require_once "../controllers/ProductoController.php";


$controller = new ProductoController();

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
    <h2>Lista de Productos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $prod) : ?>
                <tr>
                    <td><?= $prod['id'] ?></td>
                    <td><?= $prod['nombre'] ?></td>
                    <td>$<?= number_format($prod['precio'], 2) ?></td>
                    <td>
                        <a href="../eliminar.php?id=<?= $prod['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <a href="../index.php">Volver al inicio</a>
</body>
</html>
