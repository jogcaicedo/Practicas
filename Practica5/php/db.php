<?php
    class Database{
        public $conn;

        function __construct()
        {
            $this->conn = new mysqli('localhost','root','','healthykali');
        }

        public function saveData($data){
       
            $nombre = $data['nombre'];
            $caducidad = $data['fechacaducidad'];
            $codigo = $data['codigo'];
            $cantidad = $data['cantidad'];
            $unitario = $data['precio'];
            $sql = "INSERT INTO inventario VALUES('$nombre','$caducidad','$codigo','$cantidad','$unitario')";
            echo $sql;
            $result = $this->conn->query($sql);
            
        }
        
        public function getData(){
            $sql = 'SELECT * FROM Inventario';
            $result = $this->conn->query($sql);
            $data = [];
            while($row = $result->fetch_assoc()){
                array_push($data,$row);
            }
            return $data;
        }
    }