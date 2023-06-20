
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
        <style type="text/css">
            * {
                background-color: rgb(50, 152,220);
                
            }
            h1  {
                color: white;
                
                
            }
            a  {
                color: white;
                
                
            }
        </style>
    </head>
    <body>
    <script src="js/bootstrap.bundle.min.js"></script>
        <section>
               <h1>Bienvenido : <?php echo $_SESSION['usuario'] ?> </h1>
               <a href="cerrarsesion.php">Cerrar Sesion</a>
  

<br><br><br><br>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 10"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 11"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12" aria-label="Slide 12"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13" aria-label="Slide 13"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="14" aria-label="Slide 14"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/5.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/6.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/7.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/8.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/9.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/10.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/11.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/12.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/13.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/14.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/15.jpg" class="d-block w-100" alt="..." width="800" height="450">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
</body>
</html>


<br><br>



