<?php
    session_start();
    if(isset($_SESSION['nombre'])){
        header('location: views/home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <form id="forma_login">
        <label for="">Usuario: </label>
        <input type="text" name="usuario" id="usuario">
        <label for="">Contraseña: </label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Iniciar Sesion">
    </form>
    <script src="js/script.js"></script>
</body>
</html>