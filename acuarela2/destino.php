<?php 
include('inc/conexion.php');}

    session_start();
    if(!isset($_SESSION['autorizado'])){
        $_SESSION['autorizado'] = 'no';        
    }   $_SESSION['autorizado'] = 'si';
    
    
    if(password_verify($clave,$clave_bdd)){
        echo 'Clave correcta';
    }else{
        echo 'Clave incorrecta';
    }


    if(password_verify($clave,$clave_bdd)){
        $consulta_datos = "SELECT usuario,pass FROM usuario WHERE usuario = '$usuario'";
    }
    $resulta_consulta_datos= mysqli_query($conexion,$consulta_datos);

    while($b=mysqli_fetch_array($resulta_consulta_datos)){
        $_SESSION['usuario'] = $b ['usuario'];
        $_SESSION['pass'] = $b ['pass'];
    }header("Location:index.php");

    if(!isset(]$_SESSION['autorizado'] or $_SESSION['autorizado']=='no'){
        header("location:index.php");
    }
    if($existe==1){
        header("location:registro.php");
    }else{
        $alta = "INSERT INTO usuario (usuario, clave) VALUES ('$usuario','$pass');
    }
    

    $resultado_alta = mysqli_query($conexion, $alta);
    header('Location: index.php');

    $usuario = filter_var(
        $_POST['usuario'], FILTER_SANITIZE_STRING);

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $usuario = filter_var($_POST['usuario'],
        FILTER_SANITIZE_STRING);

    $clave = FILTER_VAR($_POST['pass'],
        FILTER_SANITIZE_STRING);
e
    $consulta1 = SELECT COUNT (usuario) AS NUEVO FROM users WHERE usuario = '$usuario';

    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a=mysqli_fetch_assoc($resultado1)){
        $existe = $a ['nuevo'];
        }

        if($existe == 0){
            header("location:index.php");
        }
       














?>