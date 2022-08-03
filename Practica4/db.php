<?php
    class Database{
        public $conn;

        function __construct()
        {
            $this->conn = new mysqli('localhost','root','','usuarios');
        }

        public function ComprobarUsuario($data){
            session_start();
            $_SESSION['user'] = $data['user'];
            $_SESSION['password'] = $data['password'];
            if($_SESSION['user']){
                $html = '<p>Hola ' .$_SESSION['user'] .' tu password es ' .$_SESSION['password'] .'</p>';
                echo $html;
            }
        }
    }