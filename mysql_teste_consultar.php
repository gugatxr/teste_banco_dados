<?php

$mysqli = new mysqli( 'localhost', "root", "1234", "db_performance");

$query = "SELECT * FROM tb_performance limit 10000";

echo '
  <table>
    <thead>
      <th>Servidor</th>
      <th>Porta</th>
      <th>Navegacao</th>
      <th>Página</th>
      <th>Data</th>
    </thead>
    <tbody>';
$time_inicial = microtime(true);

$result = $mysqli->query($query);

    while($dados = $result->fetch_assoc()) {
      echo "<tr>
              <td>".$dados['servidor']."</td>
              <td>".$dados['porta']."</td>
              <td>".$dados['navegacao']."</td>
              <td>".$dados['pagina']."</td>
              <td>".$dados['data']."</td>";
    }


echo '</tbody>
  </table>';

$time_inicial = microtime(true);

$resultado = $mysqli->query($query);
$time_final = microtime(true);

echo 'Tempo necessário: '. ($time_final - $time_inicial);
