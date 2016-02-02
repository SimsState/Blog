<?php

// ***************** PAGE DE SUPPRESSION D'ARTICLES ****************** \\

include('includes/connexion.inc.php');
include('includes/header.inc.php');

if(isset($_GET['id'])){
	
	$idArticle=(int) $_GET['id'];
	
	$requete='delete from articles where id="'.$idArticle.'"';
	
	mysql_query($requete) or die ('Erreur SQL');
	// On efface l'article de la bdd
	
	unlink(dirname(__FILE__). '/data/img'.$idArticle.'.jpg');
	// Permet de retirer les fichiers images à supprimer

	header('Location: index.php');
}

include('includes/footer.inc.php');
?>

