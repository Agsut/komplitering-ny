<?php
session_start();

// hämtar data från form
// variabler blir false om någon av fälten e tomma
$data = new stdClass;
$data->name = $_POST["name"] ?? false;;
$data->description = $_POST["description"] ?? false;
$data->price = $_POST["price"] ?? false;

// ser till så att alla fields är fyllda
if($data->name and $data->description and $data->price){
    // hämtar databas innehåll
    $json = file_get_contents("../databas.json");
    // parse json, "true" gör det till en array
    $db = json_decode($json, true);
    // lägger till den nya datan
    array_push($db, $data);
    // lägger till datan i databasen
    file_put_contents("../databas.json", json_encode($db, JSON_PRETTY_PRINT));
}
// skickar vidare användaren
header("location: ../index.php");

?>