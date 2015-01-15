<?php // Connexion à la base de donnée
    
    $bdd = mysql_connect("localhost", "u827976751_blog", "baydylan4400")
    or die('Connexion impossible :' .mysql_error ()); //Si erreur, l'afficher
	$bddselect = mysql_select_db("u827976751_blog") ;
	if (isset($_COOKIE['Connexion'])) {
        $sid = $_COOKIE['Connexion'] ;
        $sqlconnect = "SELECT nom, prenom FROM utilisateurs WHERE sid = '$sid'" ;
        
        $exeConnect = mysql_query($sqlconnect);
        // Créé un tableau qui créé les variable qui contient les clés de la requete.
        $TabConnect = mysql_fetch_array($exeConnect) ;
        $nom = $TabConnect['nom'] ;
        $prenom = $TabConnect['prenom'] ;
        // Variable de connexion.
        $Connected = true ;
    }else {
        $Connected = false ;
    }

?>