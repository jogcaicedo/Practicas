<?php
    class Database{
        public $conn;

        function __construct()
        {
            $this->conn = new mysqli('localhost','root','','prueba');
        }

        public function getEmpleados(){
            $sql = 'SELECT * FROM empleado';
            $result = $this->conn->query($sql);
            $data = array();
            $response = array();

            if($result){
                while($row = $result->fetch_assoc()){
                    array_push($data,$row);
                }

                $response = [
                    'success'=>true,
                    'message'=>'exito',
                    'data'=>$data
                ];
            }else{
                $response = [
                    'success'=>false,
                    'message'=>'no exito',
                    'data'=>false
                ];
            }

            return $response;

        }
    }