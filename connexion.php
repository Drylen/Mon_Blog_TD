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
        $_SESSION['notification'] = "<h5><font color='red'>Vous êtes déjà connecté voyons !</font><h5>" ;
        header('location: index.php') ;
    }
?>

<?php
    if (isset($_POST['connexion'])) {
        // Déclaration des différentes variables.
        $mail = addcslashes($_POST['mail'], "'\_*%") ;
        $password = addcslashes($_POST['password'], "'\_*%") ;
    
        // Requête SQL pour se connecter au blog/site.
        $sqlconnexion = "SELECT nom, prenom, mail, password FROM utilisateurs WHERE mail = '$mail' AND password = '$password'";

        // Envoi de la requête
        $exe = mysql_query($sqlconnexion);
        // Créé un tableau qui créé les variable qui contient les clés de la requete.
        $TabUser = mysql_fetch_array($exe) ;
        
        // Test de récupération de variables pour ensuite les ranger dans les champs du formulaire.
        $nom = $TabUser['nom'] ;
        $prenom = $TabUser['prenom'] ;
        $mail = $TabUser['mail'] ;
        $password = $TabUser['password'] ;        
        
        if($TabUser) {
            // Connexion OK
            $sid = md5($mail . time()) ;
            // Requête qui permet d'insérer le sid correspondant à l'utilisateur dans la base de données.
            $insertsid = "UPDATE utilisateurs SET sid = '$sid' WHERE mail = '$mail'  AND password = '$password'" ;
            // Envoie de la requête
            mysql_query($insertsid) ;
            // Création du cookie de connexion
            setcookie("Connexion", $sid, time()+3600) ;
            // Ouverture d'une session permettant l'utilisation de variables de sessions.
            session_start() ;
            // Variable de session qui sera réutilisé sur la page index pour certifier à l'utilisateur qu'il s'est bien connecté.
            $_SESSION['notification'] = "<h5><font color='green'>Vous êtes bien connecté '$nom' '$prenom', bienvenue.</font><h5>";
            header('location: index.php') ;     
        }else{
            // Variable de session qui sera réutilisé sur la page index pour certifier à l'utilisateur qu'il n'est pas connecté.
            $_SESSION['notification'] = "<h5><font color='red'>Erreur d'identifiants, veuillez réessayer</font><h5>";
            echo $_SESSION['notification'] ;
        }
        
        
    }
	
?>


			
<?php
    $Smarty->display('template/connexion.tpl') ;
?>
<?php
// Inclusion du menu et du pied de page.

include_once ('includes/footer_inc.php');
?>                
           

