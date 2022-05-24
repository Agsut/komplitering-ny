<nav>
    <ul>
        <li><a href="index.php">Visa produkter</a></li>
        <li><a href="add_product.php">Lägg till produkt</a></li>
        <li><a href="login.php">                    
            <?php
            if($_SESSION["user"]){
                echo "Logga ut";
            }else{
                echo "Logga in";
            }
            ?>
        </a></li>
    </ul>
</nav>