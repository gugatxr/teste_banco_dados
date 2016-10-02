<?php
// $m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
// $db = $m->selectDB("example");
require 'vendor/autoload.php'; // include Composer goodies

$client = new MongoDB\Client("mongodb://localhost:27017");
$servidor = $_SERVER["SERVER_NAME"];
$porta = $_SERVER['SERVER_PORT'];
$navegacao = $_SERVER['HTTP_USER_AGENT'];
$pagina = $_SERVER['REQUEST_URI'];
$data = date("Y-m-d");

$collection = $client->db_performance->tb_performance;
$tempo_inicial = microtime(true);
for ($i=0; $i < 10000; $i++) {
  $result = $collection->insertOne( ['servidor' => $servidor,
 'porta' => $porta,
  'navegacao' => $navegacao,
  'pagina' => $pagina,
  'data' => $data] );
}
$tempo_final = microtime(true);

$resultado = $tempo_final - $tempo_inicial;
echo "Tempo necessário: ". $resultado;
