
<?php
$error= '';
session_start();
var_dump($_SESSION);
if(!$_SESSION){
    header("location:index.php");
}else{
    echo "Hola";
    $error .= '<a href="index.php">Cerrar Sesion</a>';
    echo $error;
}
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

</body>
</html>
    
