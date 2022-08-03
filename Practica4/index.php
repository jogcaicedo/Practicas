<?php
session_start();
if($_SESSION){
    header("location:dashboard.php");
}
//var_dump($_SESSION);
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
</head>
<body>
    <form method="post" action="save.php">
        <h1>LOGIN</h1>
        <label>USUARIO:</label>
        <input type='text' name='user'><br><br>
        <label>CONTRASEÑA:</label>
        <input type='text' name='password'><br><br>
        <button type='submit'>LOG IN</button>
    </form>
</body>
</html>
