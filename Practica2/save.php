<?php
    $error = '';
    $regexp_name = '/^[a-zA-Z0-9\d]+$/';
    if ($_POST['nombre']!=NULL || preg_match($regexp_name, $_POST['nombre'])==0 || strlen($_POST['nombre'])<3 || strlen($_POST['nombre'])>15) {
        //  echo '<h3>Nombre de la Pelicula Vacio</h3>';
        $data = [
            'error' =>'el campo nombre no puede estar vacio',
        ];
        //   header('Content-Type: application/json; charset=utf-8');
        //   echo json_encode($data);
        $error .= 'Error, campo usuario debe estar lleno con una longitud de 3-15 y no contener caracteres especiales <br>';
    }
    if ($_POST['cantidad']==NULL || $_POST['cantidad']>100 || $_POST['cantidad']<=0) {
        $error .= 'Error, Cantidad de Peliculas entre 1-100.<br>';
    }
    if($_POST['nombre']!=NULL && preg_match($regexp_name, $_POST['nombre'])!=0 && strlen($_POST['nombre'])>=3 && strlen($_POST['nombre'])<15 && $_POST['cantidad']!=NULL && $_POST['cantidad']<=100 && $_POST['cantidad']>0){
        require_once('./db.php');
        $dbCon = new Database();
        $dbCon->saveMovie($_POST);
        $error .= '<br>Guardado con exito.<br>';
    }
    $error .= '<a href="index.php">Regresar</a>';
    echo $error;
    
