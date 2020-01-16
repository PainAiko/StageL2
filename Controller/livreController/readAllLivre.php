<?php
namespace Controller;

require_once '../../model/livreModel/Livre.php';
require_once '../../model/livreModel/LivreManager.php';

USE model\livreModel\LivreManager;


$livreManager =new LivreManager();
$livres=$livreManager->readAllLivre();
//var_dump($livres);

?>