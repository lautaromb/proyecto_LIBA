<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    header("location:login.php");}
 

session_unset();

header("location:index.php");

?>