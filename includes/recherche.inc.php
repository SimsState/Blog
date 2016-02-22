<?php

// ************* PAGE DE RECHERCHE **************** \\

		$sql='SELECT * FROM articles LIKE %"'.$_POST['search'].'"%';
		$res=mysql_query($sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysql_error());
		//$data=mysql_fetch_array($res);
		

