<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <?php include_once('header.php'); ?>
</header>

<body>

    <section class="products_list">
        <?php
        //inclure la page de connexion
        include_once "config.php";
        //afficher la liste des produits
        $req = mysqli_query($conn, "SELECT * FROM produit WHERE  genre = 'Chaussure pour femme' ");
        while ($row = mysqli_fetch_assoc($req)) {
        ?>
            <form action="" class="product">
                <div class="image_product">
                    <img src="images/<?= $row['Image'] ?>">
                </div>
                <div class="content">
                    <h4 class="name"><?= $row['Nom'] ?></h4>
                    <div class="sho">Chaussure pour homme</div>
                    <h2 class="price"><?= $row['Prix'] ?>,99 €</h2>
                </div>
            </form>

        <?php } ?>

    </section>
</body>

</html>