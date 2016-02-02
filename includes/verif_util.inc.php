<?php

// ************* PAGE DE VERIFICATION UTILISATEUR **************** \\

	$connecte=false;
	$email_util="";
	$email="";
	
	if(isset($_COOKIE['sid']) && !empty($_COOKIE['sid']))
	{
		$sql='SELECT * FROM utilisateurs WHERE sid="'.$_COOKIE['sid'].'"';
		$res=mysql_query($sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysql_error());
		$data=mysql_fetch_array($res);
		
		$ligne=mysql_num_rows($res);
		if($ligne!=0)
		{
			$email=$data['email'];
			$connecte=true;
			$email_util=$email;
		}
	}
		
