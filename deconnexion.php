<?php

// ************** DECONNEXION ************** \\

setcookie('sid',null);
// On efface le cookie pour enlever les informations de connexion

header('location: index.php');

?>
