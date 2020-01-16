<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 13/01/2020
 */

namespace  Controller\auteurController;

require_once "../../model/auteurModel/AuteurManager.php";
require_once "../../model/auteurModel/Auteur.php";

//use model\clientModel\Client;
use model\auteurModel\AuteurManager;

$auteurManager=new  AuteurManager();

$auteur=$auteurManager->readAuteur($_GET['id']);

$auteurManager->deleteAuteur($auteur);
//var_dump($client);