<?php

$mysqli = new mysqli( 'localhost', "root", "", "tb_performance");


$servidor = $_SERVER["SERVER_NAME"];
$porta1 = $_SERVER;
$porta = $_SERVER['SERVER_PORT'];
$navegacao = $_SERVER['HTTP_USER_AGENT'];
$pagina = $_SERVER['REQUEST_URI'];
$data = date("Y-m-d");

$query = "SELECT * FROM tb_performance";

$time_inicial = microtime(true);

  $resultado = $mysqli->query($query);
$time_final = microtime(true);
var_dump($resultado);

// echo "Tempo inicial = ".$tempo_inicial;
// echo "Tempo final = ".$tempo_final.'</br>';

echo $time_final - $time_inicial;


// $time_inicial = "0.61672900 1473980310";
// $time_inicial = explode(" ", $time_inicial);
// $time_final = "0.79153400 1473980336";
// $time_final = explode(" ", $time_final);
// echo $tempo_final[0] - $time_inicial[0]  ;

// list($usec_inicial, $sec_inicial) = explode(' ', $time_inicial);
// list($usec_final, $sec_final) = explode(' ', $time_final);
//
// $usec = $usec_final - $usec_inicial;
// $sec = $sec_final - $sec_inicial;
//
// $usec = str_replace("0.", ".", $usec);
// print date('H:i:s', $sec) . $usec;
