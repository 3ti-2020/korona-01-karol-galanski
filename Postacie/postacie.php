<!DOCTYPE html>
<html>
  <head>
    <title>Karol Galański</title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- <link rel="stylesheet" type="text/html" href="style.css" /> -->
    <link rel="stylesheet" href="postacie.css">
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
          <li class="kafelki"><a href="../Światy/swiaty.php" class="linki">Światy</a></li>
          <li class="kafelki"><a href="#postacie" class="linki">Postacie</a></li>
        </ul>
      </div>
      <div class="main">

        <div class="tabela">
            <h1 id="miasta"  class="heading">Postacie</h1>

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "projekt_korona-01_karolgalanski";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $result1 = $conn->query("SELECT * FROM features_of_characters");

                echo("<table class='tabelka-postacie'");
                echo("<tr>
                <th>Character</th>
                <th>Hit Point Gain / Level</th>
                <th>Mana Gain / Level</th>
                <th>Capacity Gain / Level</th>
                <th>Favourite Skill</th>
                <th>Favourite Spell</th>
                <th>Hit Point Regeneration</th>
                <th>Mana Regeneration</th>
                <th>Promotion Title</th>
                </tr>");

                while($row=$result1->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['characters']."</td>");
                    echo("<td>".$row['hit_point_gain/level']."</td>");
                    echo("<td>".$row['mana_gain/level']."</td>");
                    echo("<td>".$row['capacity_gain/level']."</td>");
                    echo("<td>".$row['favourite_skill']."</td>");
                    echo("<td>".$row['favourite_spell']."</td>");
                    echo("<td>".$row['hit_point_regeneration']."</td>");
                    echo("<td>".$row['mana_regeneration']."</td>");
                    echo("<td>".$row['promotion_title']."</td>");

                    echo("</tr>");
                }
                echo("</table>");
                

            ?>

        </div>
        </br>

        <h1 class="heading">Opis postaci:</h1>

        </br>
        <div class="description">
            <div class="paragraphs">
                <h1 class="heading">Druids</h1>
                <p>Druidzi to użytkownicy czystej magii. Podobnie jak czarownicy, są słabej budowy, a ich umiejętności posługiwania się bronią są raczej ograniczone. Ale po co ci broń, skoro potrafisz obalić swoich wrogów dobrze ukierunkowanym podmuchem magii? Druidzi mają do dyspozycji sporą liczbę ofensywnych zaklęć, a doświadczony druid z rozsądnym poziomem magii może wyeliminować wrogów, podobnie jak każde inne powołanie w Tybii. Jako mistrzowie czarów ziemi i lodu, druidzi są szczególnie przerażeni przez istoty, które wyrządzają szkody w ogniu i energii. </br>
                Jednak nawet jeśli druidzi mogą być przerażającymi przeciwnikami, ich magia skupia się na różnych aspektach. Będąc przyjaciółmi natury i wszystkiego, co żyje, druidzi skupiają się na twórczej i życzliwej stronie magii. Druidzi są najlepszymi uzdrowicielami Tibii, a ich zdolność do uzdrawiania innych sprawia, że są bardzo popularni we wszystkich innych powołaniach. Tylko oni wiedzą jak stworzyć runy "Ultimate Healing";. Doświadczonym druidom nigdy nie brakuje gotówki, ponieważ gracze innych zawodów chętnie zapłacą im dobre pieniądze w zamian za wszelkiego rodzaju użyteczne runy. Co więcej, gracze wszystkich zawodów doceniają posiadanie druida jako ratownika życia, więc druidzi mają przewagę, jeśli chodzi o nawiązywanie przyjaźni. Jeśli wolisz używać potężnej magii zamiast brutalnej siły, a także jeśli jesteś graczem zespołowym, który lubi współpracować z innymi, powinieneś wybrać druida.</p>
                
            </div>

            <div class="images">
                <img src="../images/druids.gif" class="img">
            </div> 
        </div>

    </br>

        <div class="description">
            <div class="images">
                <img src="../images/knights.gif" class="img">
            </div> 
            <div class="paragraphs">
                <h1 class="heading">Knights</h1>
                    <p>Rycerze są najtwardszymi wojownikami w Tybii. Są silni, odporni i wiedzą, jak posługiwać się każdą bronią w walce wręcz z przerażającą skutecznością. W walce zawsze znajdują się na linii frontu, angażując najsilniejszych przeciwników w zaciekłej walce wręcz. Kiedy podróżują z innymi, to zazwyczaj to rycerze szarżują na wrogów, aby chronić swoich towarzyszy. Ze względu na ich niesamowitą odporność i umiejętne wykorzystanie tarcz doświadczeni rycerze są prawie niemożliwi do pokonania, a nawet jeśli bitwa jest przegrana, to zazwyczaj to rycerze są ostatnimi, którzy upadają. </br>
                    Rycerze mają jednak pewną słabość: są stosunkowo słabi, jeśli chodzi o używanie magii. Mimo że wiedzą jak rzucić kilka zaklęć, ich magia jest raczej podstawowa. Z tego powodu rycerze polegają na eliksirach leczniczych lub bardziej magicznie uzdrawionych postaciach, aby wyleczyć rany, które otrzymują w walce.Nie stanowi to jednak tak naprawdę problemu, ponieważ rycerze są najlepszymi blokerami w Tybii i dlatego są mile widziani na każdym polowaniu. </br>
                    Co więcej, ich zdolność do gromadzenia dużych ilości złota jest legendarna. Silni jak oni, rycerze mogą nosić przy sobie ogromne ilości przedmiotów, które mogą sprzedać za dobre pieniądze w każdym mieście, więc rycerze nigdy nie opuszczają lochu z pustymi rękoma. Jeśli szukasz powołania, które jest łatwe do odegrania i do wyrównania, rycerz jest tym, czego szukasz.</p>
                
            </div>

        </div>

    </br>

        <div class="description">
            <div class="paragraphs">
                <h1 class="heading">Paladins</h1>
                    <p>Paladynowie też są utalentowanymi wojownikami walki wręcz. Ich zdolność do trenowania umiejętności walki wręcz ustępuje tylko rycerzom. Wiedzą też, jak bardzo dobrze obchodzić się z tarczami, a doświadczeni paladyniści potrafią zablokować większość wrogów, mimo że nie są tak odporni jak rycerze. Jednak prawdziwą siłą paladynów jest ich zdolność do walki na odległość. Paladyni są najlepszymi łucznikami Tibii. Od rzucania prostymi kamieniami do strzelania z kuszy, paladyniści mogą nauczyć się obsługiwać każdą broń dystansową z zabójczą dokładnością. Paladyn, który potrafi trzymać się z dala od swoich przeciwników w walce, może obalić każdego wroga. </br>
                    Ale paladyny to nie wszystko. Są oni również magicznymi użytkownikami o znacznych umiejętnościach, którzy mają do dyspozycji imponujący wachlarz zaklęć. Mimo, że ich umiejętności magiczne nie mogą być porównywane z umiejętnościami użytkowników czystej magii, takich jak druidzi czy czarownicy, paladyniści mają dostęp do wielu dodatkowych zaklęć, ponieważ mogą używać dużej liczby run. Co więcej, paladyni są jedynym powołaniem, które może używać świętych zaklęć, więc mają ogromną przewagę w walce z nieumarłymi istotami. </br>
                    Paladyni są najlepszymi wszechstronnymi ludźmi w Tybii. Jeśli szukasz dobrego wojownika, który poradzi sobie również z magią dość dobrze, to paladyn powinien być twoim wyborem.</p>
                
            </div>

            <div class="images">
                <img src="../images/paladins.gif" class="img">
            </div> 
        </div>

    </br>

        <div class="description">
            <div class="images">
                <img src="../images/sorcerers.gif" class="img">
            </div> 
            <div class="paragraphs">
                <h1 class="heading">Sorcerers</h1>
                    <p>Jak druidzi, czarownicy skupiają się na magicznym użyciu. Podobnie jak ich spokojniejsi bracia, czarownicy potrzebują umiejętności i cierpliwości, aby podnieść się do władzy, ponieważ ich umiejętności posługiwania się bronią są bardzo ograniczone, i tak jak czarownicy druidów są słabej konstytucji. Jednak czarownicy mają wielki potencjał. W rzeczywistości, ze względu na obraźliwą naturę ich czarów, czarnoksiężnicy są być może najbardziej śmiercionośni ze wszystkich powołań. W przeciwieństwie do druidów, którzy skupiają się na kreatywnej i dobroczynnej stronie magii, czarodzieje koncentrują się na jej ciemnej, destrukcyjnej stronie, a ich zaklęcia mogą stać się naprawdę niszczycielskie na wyższych poziomach. Posiadają oni szczególne umiejętności w opanowaniu zaklęć energetycznych i ogniowych. Dodatkowo tylko czarnoksiężnicy mogą stworzyć słynne runy "Nagłej Śmierci"; i tylko oni mogą nauczyć się rzucać apokaliptyczne zaklęcie "Rdzeń Piekła";. Doświadczony czarodziej potrafi mrugnięciem oka obalić najsilniejszych wrogów, dlatego też czarodzieje są mile widzianym dodatkiem do każdej imprezy myśliwskiej. </br>
                    Jeśli to czysty magiczny ogień i siła energii, której szukasz, powinieneś pójść po czarownika.
                    </p>
                
            </div>

        </div>

    </br>

        

      </div>
      <div class="footer">
        <h1>Jeżeli Pan sprawdza tą stronę i chciałby Pan zagrać w Tibie, to taka mała podpowiedź. Nie radzę zaczynać na serwerach Open PvP, bo idzie stracić nerwy.</h1>
      </div>
    </div>

    <script src="index.js"></script>
  </body>
</html>