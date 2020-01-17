<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 13/01/2020
 * Time: 17:35
 */

namespace  Controller\livreController;

require_once "../../model/livreModel/LivreManager.php";
require_once "../../model/livreModel/Livre.php";

use model\livreModel\Livre;
use model\livreModel\LivreManager;



$auteur=new Livre();


$auteur->setNUMLIVRE($_POST['idLivre']);
$auteur->setIDAUTEUR($_POST['titre']);
$auteur->setTITRELIVRE($_POST['idAuteur']);


$auteurMng=new LivreManager();

$auteurMng->createLivre($auteur);
//var_dump($ok);