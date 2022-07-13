<?php
    class Database{
        public $conn;

        function __construct()
        {
            $this->conn = new mysqli('localhost','root','','pelicula');
           
            

            
            
        }

        public function saveMovie($data){
       
            $nombre = $data['nombre'];
            $cantidad = $data['cantidad'];

            $sql = "INSERT INTO pelicula VALUES(NULL,'$nombre',$cantidad)";
            
           $result = $this->conn->query($sql);
           echo 'Pelicula: ' . $nombre .' con cantidad de: '. $cantidad . ' unidades';

        }
    }