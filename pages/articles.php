<?php
    require('../processing/allArcticles.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Document</title>
</head>
<body>

    <?php
        require('../includes/menu.php');
    ?>
    <a href="/blog/pages/newBlog.php">
        Créer un nouvel article
    </a>

    <h1>Liste des article</h1>

    <?php
    while ($data = $req->fetch()) {
        ?>

        <article>
            <img src="../assets/db/files/ <?=$data['file_name'] ?>" alt="<?= $data['title'] ?> " width="150px">
            <h3><?=$data['title']?></h3>
            <p><?=$data['short_description'] ?></p>
            <?=$data['long_description'] ?>
            <form action="" method="POST">
                <label for="author">Entrez votre nom ou prénom</label>
                <input type="text" name="author" id="author" required>
                <textarea name="comment" id="comment" cols="20" placeholder="Entrez votre commentaire"></textarea>
                <button type="submit">Soumettre</button>
                <button type="reset">Annuler</button>

            </form>
            <hr/>
        </article>
        <?php
    }
    ?>
</body>
</html>