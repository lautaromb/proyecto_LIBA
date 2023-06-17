

<?php
//include_once "encabezado.php";
require_once "vistas/parteSuperior2.php";

?>



<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>

<?php
include_once "vistas/carrito.php";
?>






