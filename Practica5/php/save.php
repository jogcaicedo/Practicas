<?php
    $error = '';
    $regexp_name = '/^[a-zA-Z0-9\d]+$/';
    if ($_POST['nombre']==NULL or preg_match($regexp_name, $_POST['nombre'])==0 or $_POST['fechacaducidad']==NULL or $_POST['codigo']==NULL or $_POST['cantidad']==NULL or $_POST['precio']==NULL){
        echo "Error de de campo";
    }else{
        require_once('./db.php');
        $dbCon = new Database();
        $serv=$dbCon->getData($_POST);
        $i=0;
        foreach ($serv as $data){
            if($_POST['codigo'] == $data['Codigo_Producto']){
                echo "Error: Ya se encuentra un producto con el codigo: ". $data['Codigo_Producto'] . " perteneciente al producto: " . $data['Nombre_Producto'];
                $i=1;
            }
        }
        if($i!=1){
            $dbCon->saveData($_POST);
            echo "Guardado";
        }
    }
    

    
