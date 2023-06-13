 <?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    header("location:login.php");}
 

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
  </head>

  <body class="container-fluid">
     <?php menu(); ?>
    <!-- bootstrap js -->
      <script src="js/bootstrap.bundle.min.js"></script>

 <br><br>
            <section>
               <h1>Bienvenido : <?php echo $_SESSION['usuario'] ?> </h1>
               <a href="cerrarsesion.php">Cerrar Sesion</a>
    

        
     <?php
    // Paso 1: Datos de conexion
    $usuario = 'root';
    $clave = '';
    $servidor = 'localhost';
    $basededatos = 'acuarela';
    
    // Paso 2: Creo la conexion
    $conexion = mysqli_connect($servidor,$usuario,$clave) 
    or die ('No se ha podido conectar al servidor');

    // Paso 3: Me conecto a la base de datos.
    $db = mysqli_select_db($conexion,$basededatos) 
    or die ('No se pudo conectar a la base de datos');

    // Paso 4: Creo la consulta SQL
    $consulta = "select count(distinct usuario) as usuario from usuario";

    // Paso 5: Ejecutamos la consulta SQL
    $resultado = mysqli_query($conexion,$consulta) 
    or die ('No se pudo ejecutar la consulta');
    
    // Paso 6: Cierro la conexion
    mysqli_close($conexion);

  ?>

  </body>
</html>