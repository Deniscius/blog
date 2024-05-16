<header class="menu-bar">
    <table>
        <tr>
            <td>BLOG
                <ul>
                    <li>
                        <a href="/index.php" class="<?=(!isset($_GET["page"]) ? "mrnu-active" : ""); ?>">Home</a>
                    </li>

                    <li>
                        <a href="/pages/articles.php?page=articles" class="<?=(!isset($_GET["page"]) && $_GET["page"] =="articles" ? "menu-active" : ""); ?>">Article</a>
                    </li>

                    <li>
                        <a href="/pages/connexion.php?page=connexion" class="<?=(!isset($_GET["page"]) && $_GET["page"] =="articles" ? "menu-active" : ""); ?> ? "menu-active" : ""); ?>">Connexion</a>
                    </li>

                    <li>
                        <a href="/pages/inscription.php?page=inscription" class="<?=(!isset($_GET["page"]) && $_GET["page"] =="articles" ? "menu-active" : ""); ?> ? "menu-active" : ""); ?>">Inscription</a>
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</header>