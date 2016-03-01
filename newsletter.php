<?php

include("includes/connexion.inc.php");

if(isset($_POST['email'])){
	$recmail=mysql_real_escape_string($_POST['email']);
	
	$sql="SELECT * FROM newsletter WHERE email='$recmail'";
	$res=mysql_query($sql);
	$data=mysql_fetch_array($res);
	
	if($data){
		echo "Email deja abonne";
	}
	elseif(preg_match("#([a-z 0-9\.-]+@[a-z 0-9\.-]+)#", $recmail)){
		$newmail="INSERT INTO newsletter(email) values ('$recmail')";
		$res2=mysql_query($newmail);
		echo "Ok";
	}
	else{
		echo "Email non valide";
	}
}
