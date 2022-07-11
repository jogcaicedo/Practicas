<?php

// $numerito = '5';
// var_dump($numerito);

// $numerito = (int) $numerito;
// var_dump($numerito);

// $dias = 5.89;
// $dias = (int) $dias;
// var_dump( $dias );

$banderita = "";
$banderita = (bool) $banderita;
var_dump( $banderita );

echo "\n";

//Facil
$nombre = 'Carlos'; //string
$apellido = 'Gómez'; //string
$edad = 18; //int
$aprobado = true; //bool

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8)/5; //float
$nombre_completo = $nombre. " " . $apellido; //string
$presento_examen = (bool) 1; //bool

//Avanzado
$numero_preguntas = 5 + "5"; //int
$numero_respuestas = "5" + 5; //int
$promedio_maximo = $numero_respuestas/1.0; //float
$michis = 3 + "5 michis"; //int

echo $numero_preguntas;
echo $numero_respuestas;
echo $promedio_maximo;
echo $michis;
var_dump($numero_preguntas);
var_dump($numero_respuestas);
var_dump($promedio_maximo);
var_dump($michis);