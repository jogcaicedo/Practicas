<?php
    class Database{
        public $conn;

        function __construct()
        {
            $this->conn = new mysqli('localhost','root','','crud');
           
            

            
            
        }

        public function saveUser($data){
       
            $nombre = $data['nombre'];
            $contrasena = $data['contrasena'];
            $correo = $data['correo'];

            $sql = "INSERT INTO usuarios VALUES(NULL,'$nombre','$contrasena','$correo')";
            
           $result = $this->conn->query($sql);

        }
        
        public function getUser(){

            $sql = 'SELECT * FROM usuarios';
            
            $result = $this->conn->query($sql);

            $data = [];
            while($row = $result->fetch_assoc()){
                array_push($data,$row);
            }
            return $data;
        }
    }