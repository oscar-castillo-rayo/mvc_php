<?php
require_once "controllers/ProductoController.php";

if (isset($_GET["id"])) {
    $controller = new ProductoController();
    $controller->borrarProducto($_GET["id"]);
}

header("Location: views/productos.php");
?>
