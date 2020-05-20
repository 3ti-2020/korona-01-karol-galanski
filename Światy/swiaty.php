<!DOCTYPE html>
<html>
  <head>
    <title>Karol Galański</title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- <link rel="stylesheet" type="text/html" href="style.css" /> -->
    <link rel="stylesheet" href="swiaty.css">
  </head>

  <body>
    <div class="container">
      <div class="projekt">
        <h1 class="imie">Karol Galański</h1>
        <h1>Korona-01</h1>
      </div>
      <div class="header">
        <img src="../images/tibialogo.png">

      </div>
      <div class="sidebar">
        <ul class="menu">
          <li class="kafelki"><a href="../index.html" class="linki">Miasta</a></li>
          <li class="kafelki"><a href="#swiaty" class="linki">Światy</a></li>
          <li class="kafelki"><a href="../Postacie/postacie.php" class="linki">Postacie</a></li>
        </ul>
      </div>
      <div class="main">
        <h1 id="miasta">Najlepsze Światy</h1>

        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "projekt_korona-01_karolgalanski";

                $conn = new mysqli($servername, $username, $password, $dbname);


                $result1 = $conn->query("SELECT * FROM regular_worlds");

                echo("<table class='tabelka-swiaty'");
                echo("<tr>
                <th>World</th>
                <th>Location</th>
                <th>PvP Type</th>
                <th>BattlEye</th>
                <th>Additional Information</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['world']."</td>");
                    echo("<td>".$row['location']."</td>");
                    echo("<td>".$row['pvp_type']."</td>");
                    echo("<td>".$row['battlEye']."</td>");
                    echo("<td>".$row['additional_information']."</td>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>
        
      </div>
      <div class="footer">
        <h1>Jeżeli Pan sprawdza tą stronę i chciałby Pan zagrać w Tibie, to taka mała podpowiedź. Nie radzę zaczynać na serwerach Open PvP, bo idzie stracić nerwy.</h1>
      </div>
    </div>

    <script src="index.js"></script>
  </body>
</html>
