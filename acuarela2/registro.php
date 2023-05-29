<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Registro</title>
  <link rel="icon" href="img/icono.png"  type="image/x-icon">
  <?php  
      include('inc/conexion.php');
    ?>
     <?php

    $mensaje = 'Ingrese los datos del nuevo usuario';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='dos'){$mensaje = 'El usuario ya existe en la base de datos';}
    }
    ?>
</head>
<body>
	<div class="alert alert-primary" role="alert">
  Registra tu cuenta
</div>
	 <script src="js/bootstrap.bundle.min.js"></script>
	 <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        	
    <form class="row g-3" action="registro_sql.php" method="POST">
    <div class="col-12">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese un nombre de usuario">
  </div>
  <div class="col-md-12">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="pass" placeholder="Ingrese una contraseña" >
  </div>

  

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a class="btn btn-primary" href="index.php" role="button">Atras</a>
  </div>
</form>
        </div>
        <div class="col-3"></div>
     </div>
<br><br><br>



	</div>
	<div class="col-3"></div>
</div>
		<br><br>	
	

</body>
</html>
