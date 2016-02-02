<?php

header("Content-type: image/jpg");
$widthDef=200;
// Largeur par défaut

// chemin image
$id = $_GET['id'];
$chemin = dirname(__FILE__).'/data/img/'.$id.'.jpg';

$selectImg=imagecreatefromjpeg($chemin);

// calculer ratio et taille
list($width, $height) = getimagesize($chemin);
$ratio = $widthDef / $width;

$heightDef=$height*$ratio;
// On définit la hauteur de l'image

$newImg=imagecreatetruecolor($widthDef,$heightDef);

imagecopyresampled($newImg,$selectImg,0,0,0,0,$widthDef,$heightDef,$width,$height);

imagejpeg($newImg,null,100);

?>
