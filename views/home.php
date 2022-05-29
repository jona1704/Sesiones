<?php
    session_start();
    if(!isset($_SESSION['nombre'])){
        header('location: ../index.php');
    }
    echo "<h1>Bienvenido ". $_SESSION['nombre']." <h1>";
    echo "<a href='../php/logout.php'>Cerrar Sesion</a>";
?>