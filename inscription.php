<?php

// ************ PAGE D INSCRIPTION ************ \\

include('includes/connexion.inc.php');
include('includes/header.inc.php');

// **** TRAITEMENT **** \\

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['confirm'])){
	
	$nom=mysql_real_escape_string($_POST['nom']);
	$prenom=mysql_real_escape_string($_POST['prenom']);
	$email=mysql_real_escape_string($_POST['email']);
	$mdp=mysql_real_escape_string($_POST['mdp']);
	$confirm=mysql_real_escape_string($_POST['confirm']);
	// On protège les variables
	
	if ($mdp != $confirm){
		echo "Le mot de passe est différent de la confirmation";
	}
	else{
		$sql='insert into utilisateurs values ("","'.$nom.'","'.$prenom.'","'.$email.'","'.md5($mdp).'","")';
		
		$res=mysql_query($sql);
		
		header('location: index.php');
	}
	
	mysql_close();

}

// **** FORMULAIRE **** \\

?>


<form action="inscription.php" method="post">
	
	<div class="clearfix">
		<label for="titre">Nom</label>
		<div class="input">
			<input type="text" name="nom">
		</div>
	</div>
	
	<div class="clearfix">
		<label for="titre">Prenom</label>
		<div class="input">
			<input type="text" name="prenom">
		</div>
	</div>
	
	<div class="clearfix">
		<label for="titre">Mail</label>
		<div class="input">
			<input type="email" name="email">
		</div>
	</div>
	
	<div class="clearfix">
		<label for="contenu">Mot de passe</label>
		<div class="input">
			<input type="password" name="mdp">
		</div>
	</div>
	
	<div class="clearfix">
		<label for="titre">Confirmer mot de passe</label>
		<div class="input">
			<input type="password" name="confirm">
		</div>
	</div>
	
	<input type="submit" value="Envoyer"/>
</form>

<?php
include('includes/footer.inc.php');
?>

