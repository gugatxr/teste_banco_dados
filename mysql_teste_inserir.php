<?php

$mysqli = new mysqli( 'localhost', "root", "1234", "db_performance");


$servidor = $_SERVER["SERVER_NAME"];
$porta = $_SERVER['SERVER_PORT'];
$navegacao = $_SERVER['HTTP_USER_AGENT'];
$pagina = $_SERVER['REQUEST_URI'];
$data = date("Y-m-d");

$query = "INSERT INTO `tb_performance`( `servidor`, `porta`, `navegacao`, `pagina`, `data`)
VALUE ('$servidor', '$porta', '$navegacao', '$pagina', '$data')";
$tempo_inicial = microtime(true);
for ($i=0; $i < 10000; $i++) {
   $res = $mysqli->query($query);
}
$tempo_final = microtime(true);

$resultado = $tempo_final - $tempo_inicial;
echo "Tempo necessário: ". $resultado;
