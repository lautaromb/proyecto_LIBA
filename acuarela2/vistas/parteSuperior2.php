<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Libreria Acuarela</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <style type="text/css">

            * {
                padding:0px;
                margin: 0px;
            }
            #header {
                margin: auto;
                width: 500px;
                font-family: Arial, Helvetica, sans-serif;
            }

            ul, ol{
                list-style: none;

            }

            .nav li a{
                background-color: black;
                color: white;
                text-decoration: none;
                padding:10px 15px;
                display: block;

            }

            .nav li a:hover{
                background-color: #434343;
            }


            .nav > li{
                float: left;
            }
            .nav li ul {
                display:none;
                position: absolute;
                min-width: 140px;
            }
            .nav li:hover > ul {
                display: block;
            }
            



        </style> 
    </head>
    <body>


        <div id="header">
            <ul class="nav">
                <li><a href="">INICIO</a></li>
                <li><a href="">Componentes</a>  
                    <ul>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="clientes.php">Clientes</a></li>
                        <li><a href="provedores.php">Proveedores</a></li>
                        <li><a href="reportes.php">Reportes</a></li>
                    </ul>
                
                </li>
                <li><a href="">Control Stock</a>
                    <ul>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Categorias</a></li>                    
                    </ul>
                </li>
            </ul>


        </div>  
    
    
    
        <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                           <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
    
    </body>
</html>