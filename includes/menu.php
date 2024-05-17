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

                    <li>
                        <a href="/blog/pages/inscription.php?page=inscription" class="<?=(isset($_GET["page"]) && $_GET["page"] =="incription" ? "menu-active" : ""); ?>">Inscription</a>
                    </li>

                    <li>
                        <a href="/blog/pages/connexion².php?page=connexion" class="<?=(isset($_GET["page"]) && $_GET["page"] =="conexion" ? "menu-active" : ""); ?>">Connexion</a>
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</header>