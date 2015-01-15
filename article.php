<?php
    require_once ('includes/connexion_inc.php') ; // Se connecte à la Base de donnée
    require_once ('settings/settings.php') ; // Affiche les erreurs
    require_once 'libs/Smarty.class.php' ; // utilisation de la librairie Smarty
    $Smarty = new Smarty() ; // Création de l'objet de la classe Smarty
?>

<?php 
    if($Connected == false) {
        // Redirection vers la page index + affichage d'un message d'erreur à l'utilisateur.
        session_start() ;
        $_SESSION['notification'] = "<h5><font color='red'>Vous n'êtes pas authentifié, vous avez été redirigé vers l'index !</font><h5>" ;
        header('location: index.php') ;
    }
?>

<?php
if (isset($_POST['Modifier']) OR isset($_POST['Ajouter'])) {

    // Déclaration des différentes variables.
    $id = $_POST['id'] ;
    $titre = $_POST['titre'] ;
    $text = $_POST['text'] ;
    $publie = (isset($_POST['publie'])) ? $_POST['publie'] : '0' ;
    $date = date('Y-m-d') ;
    if (isset($_POST['Ajouter'])) {
        // Requête SQL pour ajouter un article dans la bdd.
        $sql = "INSERT INTO articles(titre, texte, date, publie) VALUES ('$titre', '$text', '$date', $publie)" ;
        $id = mysql_insert_id() ;
    } else {
        // Requête SQL pour modifier un article dans la bdd.
        $sql = 'UPDATE articles SET titre = "'.$titre.'", texte = "'.$text.'" WHERE id = '.$id.'' ;
    }
    // Traitement d'erreur si il n'y a pas d'image.
    if (!empty($_POST['image'])) {
        $erreur_image = $_FILES['image']['error'] ;
    } else {
        $erreur_image = "" ;
    }

    // Envoi de la requête INSERT ou UPDATE.
    $exe = mysql_query($sql) ;

    // Ouverture d'une session permettant l'utilisation de variables de sessions.
    session_start() ;
    if (isset($_POST['Ajouter'])) {
        $insert_row = mysql_fetch_row($exe) ;
        $insert_id = $id ; // $insert_row[0] ;
        move_uploaded_file($_FILES["image"]["tmp_name"], dirname(__FILE__) . "/img/$insert_id.jpg") ;
        // Variable de session qui sera réutilisé sur la page index pour certifier à l'utilisateur que son article a été publié.
        $_SESSION['notification'] = "<h5><font color='green'>Votre article a été publié avec succès.</font><h5>" ;
    } else {
        $insert_id = $id ;
        move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$insert_id.jpg") ;
        // Variable de session qui sera réutilisé sur la page index pour certifier à l'utilisateur que son article a été modifié.
        $_SESSION['notification'] = "<h5><font color='blue'>Votre article a été modifié avec succès.</font><h5>" ;
    }
    header('location: index.php') ;
} else {
    // Affiche le header
    include_once ('includes/header_inc.php') ;  

    if (isset($_GET['id'])) {

        // Requete SQL pour récupérer le contenu de l'article.
        $Selection_Modif = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie = 1 AND id = " . $_GET['id'] . "" ;
        // Envoi de la requête.
        $Result_Modif = mysql_query($Selection_Modif) ;
        $Aff_Modif = mysql_fetch_array($Result_Modif) ;
        // Créé un tableau qui créé les variable qui contient les clés de la requete.
        extract($Aff_Modif) ;

        // Test de récupération de variables pour ensuite les ranger dans les champs du formulaire.
        $titre = $Aff_Modif['titre'] ;
        $texte = $Aff_Modif['texte'] ;
        $id = $Aff_Modif['id'] ;
        $lien_image = 'img/' . $Aff_Modif['id'] . '.jpg' ;
        $date = $Aff_Modif['date_fr'] ;
    }else{
        $titre = "" ;
        $texte = "" ;
        $id = NULL ;
        $lien_image = NULL ;
        $date = "" ;       
    }
    $modif_add = (isset($_GET['id'])) ? "Modifier" : "Ajouter" ;
    ?>
    
    <?php
        $Smarty->assign('titre', $titre) ;
        $Smarty->assign('texte', $texte) ;
        $Smarty->assign('id', $id) ;
        $Smarty->assign('lien_image', $lien_image) ;
        $Smarty->assign('date', $date) ;
        $Smarty->assign('modif_add', $modif_add) ;
        $Smarty->display('template/article.tpl') ;
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

    <?php
}
?>


