<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <title>Blog du codeur</title>
</head>
<body>
    <?php
        require_once './includes/menu.php';
    ?>
    <div class="article">
        <form action="">
            <label for="title">Saisir le titre de l'article</label>
            <input type="text" name="" id="" required>

            <label for="Short_description">Saisir une brève description de l'article</label>
            <textarea name="short_description" id="short_description" placeholder="Saisir une brève description...." required></textarea>
            

            <label for="long_descriotion">Saisir une plus longue description de l'article</label>
            <textarea name="long_description" id="short_description" placeholder="Saisir une plus longue description..." required></textarea>
            

            <label for="file">Joindre un fichier à votre article</label>
            <input type="file" name="file" id="file">

            <button type="submit">Soumettre</button>

            <button type="Reset">Annuler</button>

        </form>
    </div>
</body>
</html>