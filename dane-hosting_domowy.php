<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <div class="main">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "projekt_korona-01_karolgalanski";

                $conn = new mysqli($servername, $username, $password, $dbname);


                $result1 = $conn->query("SELECT * FROM regular_worlds");

                echo("<h1>SELECT * FROM regular_worlds</h1>");
                echo("<table class='tabelka' border=1>");
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

                $result2 = $conn->query("SELECT * FROM features_of_characters");

                echo("<h1>SELECT * FROM features_of_characters</h1>");
                echo("<table class='tabelka' border=1>");
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

                while($row=$result2->fetch_assoc() ){
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
        
    
</body>
</html>