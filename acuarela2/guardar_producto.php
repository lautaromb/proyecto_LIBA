<?php
if (!isset($_POST["nombre"]) || !isset($_POST["descripcion"]) || !isset($_POST["precio"]) || !isset($_FILES["imagen"])) {
    exit("Faltan datos");
}

include_once "funciones.php";

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$imagen = $_FILES["imagen"];

// Ruta donde se guardará la imagen
$directorioDestino = 'img/productos/'; // Reemplaza con la ruta deseada

// Verificar si se seleccionó una imagen
if ($imagen["error"] === UPLOAD_ERR_OK) {
    $nombreArchivo = $imagen["name"];
    $rutaArchivo = $directorioDestino . $nombreArchivo;
    // Mover la imagen al directorio de destino
    if (move_uploaded_file($imagen["tmp_name"], $rutaArchivo)) {
        // Guardar la información del producto en la base de datos
        guardarProducto($nombre, $descripcion, $precio, $rutaArchivo);
        header("Location: productos.php");
        exit;
    } else {
        exit("Error al mover el archivo de imagen");
    }
} else {
    exit("Error al subir la imagen");
}
?>
