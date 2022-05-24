<?php
session_start();

// skickar användaren till login sidan ifall den inte är inloggad
if(!$_SESSION["user"]){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add product - Webbshop</title>
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
            <form action="handlers/handle_listing.php" method="post">
                <p>
                    <label for="name">Namn:</label>
                    <input type="text" id="name" name="name">
                </p>
                
                <p>
                    <label for="description">Beskrivning:</label>
                    <input type="text" id="description" name="description">
                </p>
                
                <p>
                    <label for="price">Pris:</label>
                    <input type="text" id="price" name="price">
                </p>
                
                <p>
                    <input type="submit" value="Lägg till">
                </p>
            </form>
        </main>
        <?php
        include "includes/footer.php";
        ?>
    </div>
</body>
</html>