<?php
session_start();
// hämta databasens innehåll
$json = file_get_contents("databas.json");
// parsea json
$items = json_decode($json);
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Webbshop</title>
</head>
<body>
    <div class="wrapper">
        <?php
        include "includes/header.php";
        ?>
        <?php
        include "includes/meny.php";
        ?>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>Namn</th>
                        <th>Beskrivning</th>
                        <th>Pris</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hammare</td>
                        <td>För att slå in spikar</td>
                        <td>150 kr</td>
                    </tr>
                    <tr>
                        <td>Färgburk</td>
                        <td>För att måla</td>
                        <td>99 kr</td>
                    </tr>
                    <tr>
                        <td>penselset</td>
                        <td>Används till färg</td>
                        <td>50 kr</td>
                    </tr>
                    <?php
                    // lägger till rader från objekten i våran databas
                    foreach($items as $itemName=>$name){
                        echo "<tr>";
                        echo    "<td>";
                        echo        $name->name;
                        echo    "</td>";
                        echo    "<td>";
                        echo        $name->description;
                        echo    "</td>";
                        echo    "<td>";
                        echo        $name->price .=" kr";
                        echo    "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            
        </main>
        <?php
        include "includes/footer.php";
        ?>
    </div>
</body>
</html>