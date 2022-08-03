<?php
    $error = '';
    $regexp_name = '/^[a-zA-Z0-9\d]+$/';
    if ($_POST['user']==NULL or preg_match($regexp_name, $_POST['user'])==0 or strlen($_POST['user'])<3 or strlen($_POST['user'])>15) {
        $data = [
            'error' =>'el campo nombre no puede estar vacio',
        ];
        $error .= 'Error, campo usuario debe estar lleno con una longitud de 3-15 y no contener caracteres especiales <br>';
    }
    if($_POST['user']!=NULL and preg_match($regexp_name, $_POST['user'])!=0 and strlen($_POST['user'])>=3 and strlen($_POST['user'])<15){
        session_start();
        $_SESSION['user'] = $_POST['user'];
        if(!$_SESSION){
            header("location:index.php");
        }else{
            header("location:dashboard.php");
        }
    }
    
