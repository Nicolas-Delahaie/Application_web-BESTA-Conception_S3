<html>

<body>
    <form action="./fonctions/saisieVerif.php" method="POST">
        <p>Sélectionnez le nom de la recette </p>
        <select name="nomBoisson" id="nomBoisson">
            <option value="default">Boisson</option>
            <?php
            $bdBoisson = fopen("bdBoisson.txt", "r");
            while (!(feof($bdBoisson))) {
                $ligne = fgets($bdBoisson);
                $ligneExplode = explode(",", $ligne);
                $nomBoisson = $ligneExplode[0];
                $typeBoisson = $ligneExplode[1];
                echo "<option value='".$nomBoisson."'>".$nomBoisson."</option>";
            }
            fclose($bdBoisson);
            ?>
        </select>
        <p>Sélectionnez la quantité de votre boisson</p>
        <input type="number" name="qtBoisson" value="qtBoisson">
        <br>
        <input type="submit" value="Valider">
    </form>
    <a href="main.php">Les Resultats</a>
</body>

</html>