<?php
    // $error = '';
    // $regexp_name = '/^[a-zA-Z0-9\d]+$/';
    // if ($_POST['nombre']==NULL or preg_match($regexp_name, $_POST['nombre'])==0 or strlen($_POST['nombre'])<3 or strlen($_POST['nombre'])>15) {
    
    // }
    // if($_POST['nombre']!=NULL and preg_match($regexp_name, $_POST['nombre'])!=0 and strlen($_POST['nombre'])>=3 and strlen($_POST['nombre'])<15){
    //     require_once('./db.php');
    //     $dbCon = new Database();
    //     $dbCon->saveUser($_POST);
    // }
    require_once('./db.php');
    $dbCon = new Database();
    $dbCon->saveUser($_POST);
    header('Location: index.php');
    
