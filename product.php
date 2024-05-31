<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/prod_style.css">
</head>
<body>
<?php 
    include_once "config.php";
    include_once "header.php"?>

    <?php

        $id = "";
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
        }

        $query = "SELECT * FROM produit WHERE id = " . $id;
        $resultat = mysqli_query($conn, $query);

    // Vérifier s'il y a des résultats
    if (mysqli_num_rows($resultat) > 0) {
        // Parcourir les résultats et afficher les détails du produit
        $produit = mysqli_fetch_assoc($resultat);
        ?><img src="images/<?=$produit['Image']?>" class="new">
        <img src="images/<?=$produit['Image2']?>" class="new">
        <img src="images/<?=$produit['Image3']?>" class="new">
        <?php
        echo "Nom : " . $produit['Nom'] . "<br>";
        echo "Description : " . $produit['Description'] . "<br>";
        echo "Prix : " . $produit['Prix'] . "<br>";
        echo "" . $produit['Couleur'] . "<br>";
        ?>
        <label for="taille">Taille :</label>
    <select name="taille" id="taille">
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <!-- Ajoutez les autres tailles disponibles ici -->
    </select>
        <a href="ajouter_panier.php?id=<?=$produit['id']?>" class="id_product">Ajouter au panier</a>
        
        <?php
        // Afficher d'autres détails du produit selon vos besoins
    } else {
        echo "Produit non trouvé.";
    }
    ?>




    
</body>
</html>