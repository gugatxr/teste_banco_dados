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
// echo $collection->count();
?>

<table border="1">
  <thead>
    <th>Servidor</th>
    <th>Porta</th>
    <th>Navegacao</th>
    <th>Página</th>
    <th>Data</th>
  </thead>
  <tbody>
    <?php
    $time_inicial = microtime(true);
    $result = $collection->find();
    $result->limit(12);
    foreach ($result as $key => $value) {
      echo "<tr>
              <td>".$value['servidor']."</td>
              <td>".$value['porta']."</td>
              <td>".$value['navegacao']."</td>
              <td>".$value['pagina']."</td>
              <td>".$value['data']."</td>";
    }
    $time_final = microtime(true);
    ?>

  </tbody>


</table>
echo $time_final - $time_inicial;
