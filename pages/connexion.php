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
    <title>Connexion</title>
</head>
<body>

    <?php
        require_once '../includes/menu.php';
    ?>

    <div class="login">
        <?php
            if (isset($_GET['user']) && $_GET['user'] == 'unknown') {
                echo "<h2>Les identifiants saisis sont incorrects. Veuillez les vérifiez et réessayer</h2>";
        }
        ?>

        <form action="/blog/processing/login.php" method="POST">
            
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required>

            <button type="submit">Se connecter</button>

            <p>Pas encore de compte ? Inscrivez-vous <a href="/pages/connexion.php?page=connexion"></a>ici</p>
            
        </form>
    </div>
</body>
</html>