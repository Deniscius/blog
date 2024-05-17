<header class="menu-bar">
    <table>
        <tr>
            <td>BLOG</td>
            
            <td>
                <ul>
                    <li>
                        <a href="/index.php" class="<?=(!isset($_GET["page"]) ? "mrnu-active" : ""); ?>">Home</a>
                    </li>

                    <li>
                        <a href="/blog/pages/articles.php?page=articles" class="<?=(isset($_GET["page"]) && $_GET["page"] =="articles" ? "menu-active" : ""); ?>">Article</a>
                    </li>

                    <?php
            if (!isset($_COOKIE['username'])) {
                ?>

                <li>
                        <a href="/blog/pages/inscription.php?page=inscription" class="<?=(isset($_GET["page"]) && $_GET["page"] =="incription" ? "menu-active" : ""); ?>">Inscription</a>
                    </li>

                    <li>
                        <a href="/blog/pages/connexion.php?page=connexion" class="<?=(isset($_GET["page"]) && $_GET["page"] =="conexion" ? "menu-active" : ""); ?>">Connexion</a>
                    </li>
                
            <?php
            }
            ?>    
                </ul>
            </td>
            <?php
            if (isset($_COOKIE['username'])) {
                ?>
                <td>
                    <?= $_COOKIE['username']; ?> <a href="/blog/processing/logout.php">Se déconnecter</a>
                </td> 
            <?php
            }
            ?>
        </tr>
    </table>
</header>