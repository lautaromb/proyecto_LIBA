
<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    header("location:login.php");}
 

?>
<?php require_once "vistas/parteSuperior2.php";?>    
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <section>
               <h1>Bienvenido : <?php echo $_SESSION['usuario'] ?> </h1>
               <a href="cerrarsesion.php">Cerrar Sesion</a>
    </body>
</html>

<br><br>

<?php require_once "vistas/parteInferior.php";?>


