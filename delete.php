<?php

require_once ('includes/connexion_inc.php') ; // Se connecte à la Base de donnée
require_once ('settings/settings.php') ; // Affiche les erreurs
?>

<?php
    echo $_GET['id'] ;
    $id = $_GET['id'] ;
    // Requête SQL permettant de supprimer un article.
    $sql = "DELETE FROM articles WHERE id = $id" ;
    $exe = mysql_query($sql);
    if (file_exists(dirname(__FILE__) . "/img/$id.jpg")) {
        unlink(dirname(__FILE__) . "/img/$id.jpg") ;
    }
    session_start();
    $_SESSION['notification'] = "<h5><FONT COLOR='red'>Votre article a été supprimé avec succès.</font><h5>";
    header('location: index.php') ;
?>
