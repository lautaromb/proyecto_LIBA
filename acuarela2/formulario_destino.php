<?php
session_start();

    $a = $_POST['usuario'];
    $b = $_POST['pass'];

    //conectar a base de datos
    $conexion = mysqli_connect("localhost", "root", "", "acuarela");
    
    $consulta = "SELECT * FROM  usuario WHERE usuario  = '$a' and pass  ='$b'";
    $resultado = mysqli_query($conexion, $consulta);

    $_SESSION['usuario'] = $a;

    $filas=mysqli_num_rows($resultado);
    if ($filas > 0){
        header("location:index2.php");
    }
    else {
        header("location:login.php");
    }

?>