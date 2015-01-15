<?php 
    require_once ('includes/connexion_inc.php') ; // Se connecte à la Base de données
    require_once ('settings/settings.php') ; // Affiche les erreurs
    include_once ('includes/header_inc.php') ; // Affiche le header
    require_once 'libs/Smarty.class.php' ; // utilisation de la librairie Smarty
    $Smarty = new Smarty() ; // Création de l'objet de la classe Smarty
?>

<?php 
    if($Connected == true) {
        // Redirection vers la page index + affichage d'un message d'erreur à l'utilisateur.
        session_start() ;
        $_SESSION['notification'] = "<h5><font color='red'>Vous êtes déjà connecté, inutile de vous inscrire !</font><h5>" ;
        header('location: index.php') ;
    }
?>

<?php
    if (isset($_POST['inscrire'])) {
        // Déclaration des différentes variables.
        $nom = addcslashes($_POST['nom'], "'\_*%") ;
        $prenom = addcslashes($_POST['prenom'], "'\_*%") ;
        $mail = addcslashes($_POST['mail'], "'\_*%") ;
        $password = addcslashes($_POST['password'], "'\_*%") ;
    
        // Requête SQL pour ajouter un utilisateur dans la bdd.
        $sqlinscription = "INSERT INTO utilisateurs(nom, prenom, mail, password) VALUES ('$nom', '$prenom', '$mail', '$password')" ;
        // Envoi de la requête
        $exe = mysql_query($sqlinscription) ;
         // Ouverture d'une session permettant l'utilisation de variables de sessions.
        session_start() ;
         // Variable de session qui sera réutilisé sur la page index pour certifier à l'utilisateur qu'il s'est bien inscrit.
        $_SESSION['notification'] = "<h5><font color='green'>Vous avez bien été enregistré avec succès.</font><h5>";
        header('location: index.php') ;
    }
?>
<?php
    $Smarty->display('template/inscription.tpl') ;
?>


            <?php 
                // Inclusion du menu et du pied de page.
                include_once ('includes/menu_inc.php') ; 
                include_once ('includes/footer_inc.php') ; 
            ?>

        </div>
    </body>
    </html>

    </form>