<?php

// *********** PAGE D'ACCUEIL ************* \\

// On insère les includes

include('includes/connexion.inc.php');
include('includes/header.inc.php');
include('includes/verif_util.inc.php');
include('slider.php');


if(isset($_POST['search'])){	
	$search=mysql_real_escape_string($_POST['search']);
}
else{
	$search="";
}

// On va sélectionner tous les articles de la bdd pour les afficher en page d'accueil
if($search==NULL){
	
	$res=mysql_query("SELECT * FROM articles") or die('Erreur SQL !'.$res.'<br>'.mysql_error());
	
}// Sinon on effectue la recherche qui a été récupérée
else {
	
	$sql='SELECT * FROM articles WHERE contenu LIKE "%'.$search.'%"';
	$res=mysql_query($sql) or die('Erreur SQL !'.$res.'<br>'.mysql_error());

}
while($data=mysql_fetch_array($res)){ 
	// On récupère les articles un par un
	
	$id=$data['id'];
	echo '<h3>'.$data['titre'].'</h3>'; 
	// Affichage du titre
	
	$chemin=dirname(__FILE__).'/data/img/'.$id.'.jpg'; 
	// Chemin des images stockées
	
	if(file_exists($chemin)){ 
		// S'il existe une image
		?>
		<img src="vignette.jpg.php?id=<?php echo $id;?>" class="img-rounded pull-left" style="margin-bottom:10px; margin-right:15px;">
		<?php // On affiche l'image correspondante de l'article en ajoutant des propriétés CSS pour améliorer le rendu
	}
	
	echo '<p>'.nl2br($data['contenu']).'</p>';
	// nl2br Insère un retour à la ligne HTML à chaque nouvelle ligne
	
	echo '<div style="clear:both;"></div>';
	// Effet de style permettant au conteneur de prendre la hauteur de ce qu'il contient
	
	echo gmdate('d M Y , H:i', $data['date']).' '; 
	// Affichage de la date de création
    
    if($connecte==true) {
		// Si l'utilisateur est connecté, il peut avoir accès aux boutons de modif et de suppression
		
		echo '<a class="btn btn-primary" href="./article.php?id='.$data['id'].'">Modifier</a>';
		echo '<a class="btn btn-primary" href="./supprimer_article.php?id='.$data['id'].'">Supprimer</a>';
	}
	
	echo '<hr>';
	// Banniere de bas d'article pour démarquer les articles
}
     
include('includes/footer.inc.php');
?>

