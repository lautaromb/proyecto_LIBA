<?php

    // Archivo de conexion
    include('inc/conexion.php');

    // Recupero los valores del formulario.
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
 
    // Inicializar la variable $existe
    $existe = 0;
    
    // Verificar cuantas veces está cargado el usuario en la BDD
    $consulta1 = "SELECT COUNT(DISTINCT usuario) AS nuevo FROM usuario WHERE usuario = '$usuario'";
    $resultado1 = mysqli_query($conexion, $consulta1);
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decisión
    if($existe == 1){
        header("Location:registro.php?mensaje=dos");
    } else {
        $alta = "INSERT INTO usuario (usuario, pass) VALUES ('$usuario', '$pass')";
        $resultado_alta = mysqli_query($conexion, $alta);

        header("Location: login.php");
    }
?>