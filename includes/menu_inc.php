<nav class="menu">
    <h3>Menu</h3>  
    <form action="index.php" method="get" enctype="multipart/form-data" id="form_recherche">
        <div class="clearfix">
            <div class="input"><input type="text" name="recherche" id="recherche" placeholder="Votre recherche..."/></div>
        </div>
        <div class="form-inline">
            <input type="submit" name="" value="rechercher" class="btn btn-mini btn-primary">
        </div>
    </form>
    <ul>
        <!-- Menu déroulant situé sur le côté droit --> 
        <?php if ($Connected == true) { ?>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="article.php">Rédiger un article</a></li>
                <li><a href="deconnexion.php">Déconnexion</a></li>
                <li><b>Statut :</b> Connecté</li>
        <?php } else { ?>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="connexion.php">Se connecter</a></li>
                <li><a href="inscription.php">S'inscrire</a></li>  
                <li><b>Statut :</b> Déconnecté</li>
        <?php } ?>
    </ul>
</nav>

