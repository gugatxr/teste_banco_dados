<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gustavo Teixeira">
    <title>Testes de velocidade MySQL e MongoDB</title>
    <style>

      body{
        font-family: sans-serif;
        font-size: 10px;
        background-color: #17B890;
        color: #ffffff;
        padding-left: 2%;
      }
      h1{
        font-size: 2.2em;
      }
      h2{
        font-size: 2.0em;
      }
      h3{
        font-size: 1.8em;
      }
      table{
        border-collapse: collapse;
        width: 100%;
        border-radius: 5px;
      }
      table, td, th {
        border: 1px solid white;
        vertical-align: middle;
      }
      th{
        font-size: 1.0em;
        text-align: center;
        border:
      }
      tbody tr:nth-child(even){
        background-color: #5E807F;
        color: #ffffff;
      }
      tbody tr:hover{
        background-color: #DEE5E5;
        color: #000000;
      }
      p{
        font-size: 1.6em;
        padding-left: 1%;
      }
      td{
        text-align: left;
      }
      .onde_utilizar{
        padding-left: 1%;
      }
      #media td{
        text-align: center;
      }
      #diferenca td{
        text-align: center;
      }
      a{
        color: #082D0F;
      }
    footer{
      text-align: center;
    }
    </style>
  </head>
  <body>

    <section>

    <h1 >Teste de performance entre MySQL e MongoDB</h1>

    <h2>Recursos utilizados</h2>
      <p>Notebook
        <ul>
          <li>8GB RAM</li>
          <li>Processador i3 1.8GHZ</li>
          <li>HD 5400rpm</li>
          <li>Ubuntu 16.04 Linux 64bits</li>
          <li>MySQL 5.7.15</li>
          <li>MongoDB 2.6.10</li>
        </ul>

      </p>
    <h2>Metodologia</h2>
        <p> Para realizar os testes foi utilizada a linguagem PHP com o <a href="http://php.net/manual/pt_BR/book.mysqli.php">driver mysqli</a> e <a href="http://php.net/manual/pt_BR/mongodb.tutorial.library.php">mongodb client</a>.<br>
          Sendo utilizado loops com for para repetir o envio para gravar os dados. Foi utilizado somente um equipamento para o teste e o banco de dados local<br>
        </p>


    <h2>Teste de inserção em segundos</h2>
    <table id="resultados">
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
          <th colspan="2">500</th>
          <th colspan="2">1000</th>
          <th colspan="2">2000</th>
          <th colspan="2">5000</th>
          <th colspan="2">10000</th>
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
        <tr id="media">
          <td>Média</td>
          <td>29.3193546136</td>
          <td>0,394622008</td>
          <td>64,1515524387</td>
          <td>0,4859817028</td>
          <td>124,2420210044</td>
          <td>0,6920727094</td>
          <td>371,1659019788</td>
          <td>2,0548480352</td>
          <td>989,0922429562</td>
          <td>3,9155322711</td>
        </tr>
        <tr id="diferenca">
          <td>Diferença</td>
          <td colspan="2">29,7139766216</td>
          <td colspan="2">32,3187670708</td>
          <td colspan="2">62,4670468569</td>
          <td colspan="2">186,610375007</td>
          <td colspan="2">496,5038876136</td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <h2>Onde utilizar</h2>
    <div class="onde_utilizar">
    <h3>MySQL</h3>
        <p>A utilização do Mysql é recomendada para ambientes onde a integridade dos dados é de extrema importância.</p>
    <h3>MongoDB</h3>
      <p>Já o mongo é recomendado o seu uso em ambientes onde há um grande volume de informações a serem gravadas, sendo estas de menor importância. Pois consegue gravar os dados com velocidade muito maior.</p>
    </div>
    <h2>Conclusão</h2>
      <p>
        Nos testes todos os dados inseridos foram gravados e estavam presentes nas bases na revisão.
         O Mongodb se demonstrou muito mais rápido em todos os teste, sendo que a sua diferença de velocidade aumentava de acordo com o maior número de registros
      </p>
    </section>
    <footer>Realizado por Gus</footer>
  </body>
</html>






<!--

Criar artigo
Resumo do trabalho

-->
