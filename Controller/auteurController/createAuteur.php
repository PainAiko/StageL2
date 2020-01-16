<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 13/01/2020
 * Time: 17:35
 */

namespace  Controller\auteurController;

require_once "../../model/auteurModel/Auteur.php";
require_once "../../model/auteurModel/AuteurManager.php";

use model\auteurModel\Auteur;
use model\auteurModel\AuteurManager;



$auteur=new Auteur();


$auteur->setNOMAUTEUR($_POST['nomAuteur']);

$auteurMng=new AuteurManager();
$auteurMng->createAuteur($auteur);
//var_dump($ok);