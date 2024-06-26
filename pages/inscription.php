<?php
    if (isset($_COOKIE['username'])){
        header('Loacation: /blog');
    }
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
        require_once '../includes/menu.php';
    ?>

<div class="signin">

    <?php
        if (isset($_GET['email']) && $_GET['email'] == 'error') {
            echo "<h2>Email invalide. veuillez saisir entre 5 et 50 caractères </h2>";
        }

        if (isset($_GET['password']) && $_GET['password'] == 'error') {
            echo "<h2>Les mots de passe ne sont pas identiques</h2>";
        }
    ?>

        <form action="/blog/processing/authentification.php" method="POST">

            <label for="username">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre adresse email" required>

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required>

            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="Confirmez votre mot de passe ici" minlength="8" maxlength="20" required>

            <button type="submit">S'inscrire</button>

            <p>Déjà un compte ? Connectez vous en cliquant <a href="/pages/connexion.php? page=connexion"></a>ici</p>
            
        </form>
    </div>
</body>
</html>