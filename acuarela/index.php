<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include('inc/menu.php');  ?>
</head>
<body>
    
    <?php menu(); ?>
    <br><br>
    <div class="row">   
    <div class="col-2"></div>
    <div class="col-8">
        <form action="formulario_recepcion.php" method="POST">
            <div class="form-group">
                <label for="nombreyapellido">Nombre y apellido</label>
                <input type="text" id="nombreyapellido" name="nombreyapellido" class="form-control" placeholder="Ingrese su nombre y apellido" required>
                <br><label for="email">Email</label><br>
		        <input type="email" name="email" id="email" required placeholder="Ingrese el mail" class="form-control">
                <br><label for="producto">Mensaje</label><br>
                <input type="text" id="mensaje" name="mensaje" class="form-control" placeholder="Ingrese el mensaje" required>
                <br> <button type="submit" class="btn btn-outline-primary btn-block">ENVIAR</button>
            </div>
    </div>
    <div class="col-2"></div>
    </div>

</body>
</html>