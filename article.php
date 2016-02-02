<?php

// ********** PAGE DE MODIFICATION ET AJOUT D'ARTICLES ********** \\

include('includes/connexion.inc.php');
include('includes/header.inc.php');

		
if ((isset($_POST['titre'])) && (isset($_POST['contenu'])))
{	// Si le titre de l'article et le contenu sont deja remplis
	 
// **** TRAITEMENT **** \\
	
	$titre=$_POST['titre'];
	$contenu=$_POST['contenu'];

	$titre=mysql_real_escape_string($titre);
	$contenu=mysql_real_escape_string($contenu);
	// mysql_real_escape_string protège une commande SQL de la présence de caractères spéciaux

	if(isset($_POST['id']))
	{// Modification d'article
		$id=$_POST['id'];
		$requete='update articles set titre="'.$titre.'",contenu="'.$contenu.'",date=UNIX_TIMESTAMP() where id="'.$id.'"';
		mysql_query($requete) or die ('Erreur SQL');
		
		// gerer les images
		$loc = $_FILES['image']['tmp_name'];
		move_uploaded_file($loc, dirname(__FILE__).'/data/img/'.$id.'.jpg');
	}
	else
	{// Ajout d'article
		$requete='insert into articles values ("","'.$titre.'","'.$contenu.'",UNIX_TIMESTAMP())'; 
		mysql_query($requete) or die ('Erreur SQL');
		
		// gerer les images
		$idArticle=mysql_insert_id();
		$loc = $_FILES['image']['tmp_name'];
		move_uploaded_file($loc, dirname(__FILE__).'/data/img/'.$idArticle.'.jpg');
	}
	
	
	mysql_close();
	header('Location: index.php');
	// On redirige vers la page d'accueil
	
}
else
{
	if(isset($_GET['id'])){ 
		// Si on modifie l'article
		
		$id= (int) $_GET['id']; 
		// On transforme l'id récupéré pour éviter les soucis d'injection
		
		$sql='select * from articles where id='.$id.''; 
		// On récupère les éléments de l'article que l'on modifie
		
		$tmp=mysql_query($sql) or die ('Erreur SQL'.$sql.mysql_error());
		$data=mysql_fetch_array($tmp);
		$titr=$data['titre'];
		$cont=$data['contenu'];
	}
	else{ 
		// Si on créé le titre et le contenu pour un nouvel article
		$titr=""; 
		$cont="";
	}
	
// **** FORMULAIRE **** \\
	
?>

<form action="article.php" method="post" enctype="multipart/form-data">
	<!-- enctype spécifie le type de contenu défini pour soumettre le formulaire au serveur -->
	
	<div class="clearfix">
		<label for="titre">Titre</label>
		<div class="input">
			<input type="text" value="<?php echo $titr ?>" name="titre" > 
			<!-- Pour afficher la valeur du titre -->
		</div>
	</div>
	
	<div class="clearfix">
		<label for="contenu">Texte</label>
		<div class="input">
			<textarea name="contenu"><?php echo $cont ?></textarea>  
			<!-- Pour afficher la valeur du contenu -->
		</div>
	</div>
	
	<div class="clearfix">
		<input type="file" name="image">
		<!-- Permet de sélectionner une image en parcourant les fichiers -->	
	</div>
	
<?php if(isset($_GET['id']))
	  { ?> 
		  
	<input type="hidden" name="id" value="<?php if(isset($id)) echo $id ?>">
<?php } if(isset($_GET['id'])) {?>
	<!-- Si l'id est défini, la valeur du bouton devient Modifier -->
	
	<input type="submit" value="Modifier"/>
<?php }else{ ?>
	<!-- Sinon elle prend la valeur par défaut Envoyer-->
	
	<input type="submit" value="Envoyer"/>
<?php } ?>

</form>


<?php
}
include('includes/footer.inc.php');
?>
