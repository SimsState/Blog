<?php

// ************ PAGE DE CONNEXION ************ \\

include('includes/connexion.inc.php');
include('includes/header.inc.php');

// **** TRAITEMENT **** \\

if (isset($_POST['email']) && isset($_POST['mdp'])){
	
	$email=mysql_real_escape_string($_POST['email']);
	$mdp=mysql_real_escape_string($_POST['mdp']);
	// On protège les variables
			
	$requete='select * from utilisateurs where email = "'.$email.'" and mdp = "'.md5($mdp).'"';
	// md5 permet d'encrypter le mot de passe
	 
	$res=mysql_query($requete);
	$ligne=mysql_num_rows($res);
	// mysql_num_rows permet de compter le nombre de résultats renvoyé par la requête
	
	if($ligne!=0)
	{// Si l'utilisateur existe
		
		$sid=md5($email.time());
		$sql='update utilisateurs set sid = "'.$sid.'"';
		// On définit un sid à l'utilisateur
		
		$res2=mysql_query($sql);
		setcookie('sid',$sid,time()+300);
		// On définit un cookie qui va mémoriser temporairement les informations de connexion
		
		header('location: index.php');
	}
	else
	{
		echo '<h3>'."Mauvais mot de passe".'</h3>';
	}
	mysql_close();

}

// **** FORMULAIRE **** \\

?>


<form action="connexion.php" method="post">
	
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
	
	<input type="submit" value="Envoyer"/>
</form>

<?php
include('includes/footer.inc.php');
?>

