<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 13/01/2020
 * Time: 23:29
 */


namespace  Controller\auteurController;

require_once "../../model/auteurModel/AuteurManager.php";
require_once "../../model/auteurModel/Auteur.php";

//use model\clientModel\Client;
use model\auteurModel\AuteurManager;

$auteurManager=new  AuteurManager();

$auteur=$auteurManager->readAuteur($_POST['numAut']);
$auteur->setNOMAUTEUR($_POST['nomAuteur']);


$auteurManager->updateAuteur($auteur);
