<?php
require_once ('includes/connexion_inc.php'); // Se connecte à la Base de données
require_once ('settings/settings.php'); // Affiche les erreurs
require_once 'libs/Smarty.class.php'; // utilisation de la librairie Smarty
$Smarty = new Smarty(); // Création de l'objet de la classe Smarty
?>


<?php
$page_courante = (isset($_GET['p'])) ? $_GET['p'] : 1;
$NbreArticleParPage = 2;
function pagination($PrmArticleParPage, $PrmPage_courante) {

    // Compte le nombre d'articles en bdd.
    $req_NbreArticles = "SELECT id, titre, texte, DATE_FORMAT(date,'%d-%m-%Y') as date_fr FROM articles WHERE publie = 1";
    $NbreArticlesResult = mysql_query($req_NbreArticles);
    $NbreArticles = mysql_num_rows($NbreArticlesResult);

    // Renvoie le nombre d'articles
    $NbreArticlesArray = $NbreArticles ;
    // Calcul du nombre de pages.
    $Total_Page = ceil($NbreArticlesArray / $PrmArticleParPage);
    $index = ($PrmPage_courante - 1) * $PrmArticleParPage;

    // La fonction retourne le nombres de pages ainsi que le numéro de la page actuelle.
    return array($Total_Page, $index);
}


$TabPagination = pagination($NbreArticleParPage, $page_courante);
//print_r($TabPagination) ;

$recherche = isset($_GET['recherche']) ? $_GET['recherche'] : NULL;

$Selection = "SELECT id, titre, texte, DATE_FORMAT(date,'%d-%m-%Y') as date_fr FROM articles WHERE publie = 1 AND (titre LIKE '%$recherche%' OR texte LIKE '%recherche%') ORDER BY id LIMIT $NbreArticleParPage OFFSET $TabPagination[1]";
?>
<?php
include_once ('includes/header_inc.php'); // Affiche le header
if (isset($_SESSION['notification'])) {
    echo ($_SESSION['notification']);
    unset($_SESSION['notification']);
}
?>

<!-- notifications -->

<!-- contenu -->
<?php
$ResultLimit = mysql_query($Selection);
while ($ResultAff = mysql_fetch_array($ResultLimit)) {

    $Smarty->assign("ResultAff", $ResultAff);
    $Smarty->display('template/index.tpl');
    ?>     
    <img src="img/<?php echo $ResultAff['id']; ?>.jpg" height='250' width='250'> <!-- Va chercher les images qui on le même nom que l'id d'un article et la redimensionner-->
    <br><br>
    <span><?php echo $ResultAff['date_fr']; ?></span>
    <?php
    $ResultAff['id'];
    if ($Connected == True) {
        // Ajout du bouton modifier
        echo '<a href=article.php?id=' . $ResultAff['id'] . '>Modifier l\'article</a> | ';
        // Ajout du bouton supprimer
        echo '<a href=delete.php?id=' . $ResultAff['id'] . '>Supprimer l\'article</a><br><br> ';
    }
    ?>    
    <?php
}
for ($i = 1; $i <= $TabPagination[0]; $i++) {
    echo " <a href=\"index.php?p=$i\"> | Page $i | </a> ";
}
?>           

  
<?php
// Inclusion du menu et du pied de page.
include_once ('includes/footer_inc.php');
?>

