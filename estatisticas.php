<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gustavo Teixeira">
    <title>Testes de velocidade MySQL e MongoDB</title>
    <style>
      th{
        text-align: center;
      }
      td{
        text-align: left;
      }
    </style>
  </head>
  <body>

    <table border="1">
      <caption>Inserir dados</caption>
      <thead>
        <tr>
          <th rowspan="2">Tentativas</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
        </tr>
        <tr>
          <th>500</th>
          <th>500</th>
          <th>1000</th>
          <th>1000</th>
          <th>2000</th>
          <th>2000</th>
          <th>5000</th>
          <th>5000</th>
          <th>10000</th>
          <th>10000</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1ª</td>
          <td>27.869654893875</td>
          <td>0.90884304046631</td>
          <td>62.815563201904</td>
          <td>0.44721007347107</td>
          <!--  Mysql 2000-->
          <td>130.64815211296</td>
          <td>0.67916107177734</td>
          <!--  mysql 5000-->
          <td> 316.51186203957</td>
          <!-- mongodb -->
          <td>2.9437470436096</td>
          <!--  Mysql-->
          <td>1026.3539731503</td>
          <!-- mongodb -->
          <td>3.3043439388275</td>


        </tr>
        <tr>
          <td>2ª</td>
          <td>27.4871571064</td>
          <td>0.088334083557129</td>
          <td>68.970753192902</td>
          <td>0.57536196708679</td>
          <!--  Mysql 2000-->
          <td>117.78328609467</td>
          <td>0.6541690826416</td>
          <!--  Mysql 50000-->
          <td>330.07788705826</td>
          <!-- mongodb -->
          <td>1.7061231136322</td>
          <!--  Mysql-->
          <td>1204.4358828068</td>
          <!-- mongodb -->
          <td>4.9260489940643</td>

        </tr>
        <tr>
          <td>3ª</td>
          <td>32.601251840591</td>
          <td>0.1866888999939</td>
          <td>60.668340921402</td>
          <td>0.43537306785583</td>
          <!--  Mysql 2000-->
          <td>124.29462480545</td>
          <td>0.7428879737854</td>
          <!-- mysql 5000 -->
          <td> 466.90795683861</td>
          <!-- mongodb -->
          <td>1.514673948288</td>
          <!--  Mysql-->
          <td> 736.48687291145</td>
          <!-- mongodb -->
          <td>3.5162038803101</td>

        </tr>
        <tr>
          <td>Média</td>
        </tr>
      </tbody>
    </table>

    <table border="1">
      <caption>Consultar dados</caption>
      <thead>
        <tr>
          <th rowspan="2">Tentativas</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
          <th>MySQL</th>
          <th>MongoDB</th>
        </tr>
        <tr>
          <th>500</th>
          <th>500</th>
          <th>1000</th>
          <th>1000</th>
          <th>2000</th>
          <th>2000</th>
          <th>5000</th>
          <th>5000</th>
          <th>10000</th>
          <th>10000</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1ª</td>


        </tr>
        <tr>
          <td>2ª</td>

        </tr>
        <tr>
          <td>3ª</td>

        </tr>
        <tr>
          <td>Média</td>
        </tr>

      </tbody>
    </table>
    <p>
      Registros ao final. MongoDB: 55500
    </p>

  </body>
</html>






<!-- mysql 500 registros inserção
Tempo inicial = 0.61672900 1473980310
Tempo final = 0.79153400 1473980336

mysql 500 registros consulta
Tempo inicial = 0.08850000 1473980375
Tempo final = 0.09106900 1473980375

mysql 2000 registros inserção
Tempo inicial = 0.16750000 1473980494
Tempo final = 0.57461500 1473980614

mysql 2500 registros consulta
Tempo inicial = 0.94866700 1473980651
Tempo final = 0.95492500 1473980651

mysql 10000 registros inserir
Tempo inicial = 0.34697800 1473981053
Tempo final = 0.50100300 1473981996

mysql 12500 registros consulta
Tempo inicial = 0.60485000 1473982061
Tempo final = 0.62581300 1473982061

mongodb 1000reg inserir
0.23267698287964
0.23267698287964
0.23639392852783
0.20470309257507
10.000
2.1622459888458
2.1485230922699
2.0925691127777
1.9707169532776

Criar artigo
Resumo do trabalho

Introdução
Recursos utilizados
  Notebook
  -8GB RM
  -Processador i3 1.8GHZ
  -HD 5400rpm
  -Antergos Linux 64bits
Metodologia
  Foi utilizado scripts PHP
Analise mysql X mongo resultados
  Mongodb se demonstrou muito mais rápido em todos os testes tanto de inserção quanto de consulta.
onde usar mysql
  A utilização do Mysql é recomendada para ambientes onde a integridade dos dados é de extrema importância.
onde usar mongodb
  Já o mongo é recomendado o seu uso em ambientes onde há um grande volume de informações a serem gravadas,
  sendo estas de menor importância.
Conclusão -->
