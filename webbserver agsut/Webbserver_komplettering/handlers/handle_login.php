<?php
session_start();
// lägg ill användaren i en cookie
$_SESSION["user"] = $_POST["username"];
// skicka vidare användaren
header("location: ../add_product.php");
?>