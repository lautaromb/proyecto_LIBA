<?php
require_once "vistas/parteSuperior.php";

// Paso 1: Datos de conexión
$usuario = 'root';
$clave = '';
$servidor = 'localhost';
$basededatos = 'acuarela';

// Paso 2: Crear la conexión
$conexion = new PDO("mysql:host=$servidor;dbname=$basededatos", $usuario, $clave);

// Paso 3: Realizar la consulta para obtener los elementos de la tabla "productos"
$consulta = $conexion->query("SELECT * FROM productos");

// Paso 4: Imprimir los elementos de la tabla "productos"
echo "<div class='container'>";
echo "<h1>Productos</h1>";

#while ($producto = $consulta->fetch(PDO::FETCH_ASSOC)) {
#    echo "<p>Nombre: " . $producto['nombre_producto'] . "</p>";
#    echo "<p>Descripción: " . $producto['descripcion_producto'] . "</p>";
#    echo "<p>Precio: " . $producto['precio_producto'] . "</p>";
#    echo "<p>Precio: " . $producto['cantidad'] . "</p>";
#    echo "<img src='" . $producto['imagen'] . ".jpg' alt='Imagen del producto' width=300>";
#    echo "<hr>";
#
#}
echo "<div class='row'>";
while ($producto = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='col-md-4 my-4'>";
    echo "<div class='card' style='width: 18rem'>";
    echo "<img src='" . $producto['imagen'] . ".jpg' class='card-img-top img-fluid' alt='Imagen del producto'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>" . $producto['nombre_producto'] . "</h5>";
    echo "<p class='card-text'>" . $producto['descripcion_producto'] . "</p>";
    echo "<p class='card-text'>Precio: $" . $producto['precio_producto'] . "</p>";
    echo "<p class='card-text'>Cantidad: " . $producto['cantidad'] . "</p>";
    echo "</div>";
    echo "</div>";
    
    
    echo "<hr>";

     // Verificar si el usuario es "admin" y mostrar el botón de modificación
     if (true) {
        echo "<div class='form-group'>";
        echo "<label for='cantidad'>Modificar Cantidad:</label>";
        echo "<input type='number' class='form-control' id='id_producto' name='cantidad' value='" . $producto['cantidad'] . "'>";
        echo "</div>";
        echo "<button type='button' class='btn btn-primary'>Guardar</button>";
    } else{
        echo "<div class='form-group'>";
        echo "<label for='cantidad'>Modificar Cantidad:</label>";
        echo "<input type='number' class='form-control' id='id_producto' name='cantidad' value='0'>";
        echo "</div>";
        echo "<button type='button' class='btn btn-primary'>Agregar al carrito</button>";
    }
    echo "</div>";
}
echo "</div>";

echo "</div>";

require_once "vistas/parteInferior.php";
?>