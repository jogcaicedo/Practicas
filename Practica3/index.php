<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<body>
    <div style="text-align:center;">
        <h1>CRUD USUARIOS</h1>
        <table style="width:90%;border: black 5px solid;margin-left:auto;margin-right:auto;" id="tabla">
            <tr>
                <th>Codigo Usuario </th>
                <th>Nombre Usuario </th>
                <th>Contraseña Usuario </th>
                <th>Correo Usuario </th>
                <th></th>
            </tr>
            
            <?php
                require_once('./db.php');
                $dbCon=new Database();
                //$sql = 'SELECT * FROM usuarios';
                //$result = mysqli_query($dbCon,$sql);
                $result = $dbCon->getUser();
                foreach($result as $user){
                    echo "<tr><td>". $user['codigo_usuario']."</td>";
                    echo "<td>". $user['nombre_usuario']."</td>";
                    echo "<td>". $user['contraseña_usuario']."</td>";
                    echo "<td>". $user['correo_usuario']."</td>";
                    echo "<td>
                    <button>Modificar</button>
                    <button>Eliminar</button>
                </td>";
                }
                
            ?>
            
                
                
            
           
        </table>
        <br>
        <br>
        <button onclick="openForm()">Agregar Usuario</button>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="form-popup" id="myForm" style="display:none;width:20%;border: black 5px solid;margin-left:auto;margin-right:auto;text-align:center;">
    <form method='post' action="save.php" style="padding-left:0.5rem;">
        <h1>Nuevo Usuario</h1>
        <label>Nombre Usuario</label>
        <input type='text' name='nombre'><br><br>
        <label>Contraseña Usuario</label>
        <input type='password' name='contrasena'><br><br>
        <label>Correo Usuario</label>
        <input type='email' name='correo'><br><br>
        <button type='submit'>ENVIAR</button>
    </form>
    <br><br>
    <button onclick="closeForm()">CANCELAR</button>
    <br>
    <br>
    </div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>
