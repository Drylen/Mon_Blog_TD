<?php
    session_start() ;
    $Connected = false ;
    // Ecrasement du cookie par un cookie vide de temps = 0 pour l'auto-détruire
    setcookie('Connexion', '', 0) ; 
    // Redirection vers la page index + affichage d'un message d'information à l'utilisateur.
    $_SESSION['notification'] = "<h5><font color='green'>Vous êtes a présent déconnecté, vous avez été redirigé vers l'index.</font><h5>" ;
    header('location: index.php') ;
?>
