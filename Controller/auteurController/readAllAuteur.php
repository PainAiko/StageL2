<?php
namespace Controller;

require_once '../../model/auteurModel/Auteur.php';
require_once '../../model/auteurModel/AuteurManager.php';

USE model\auteurModel\AuteurManager;


$clientManager =new AuteurManager();
$auteurs=$clientManager->readAllAuteur();
//var_dump($clients);

?>
