<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 13/01/2020
 * Time: 23:29
 */


namespace  Controller\clientController;

require_once "../../model/clientModel/ClientManager.php";
require_once "../../model/clientModel/Client.php";

//use model\clientModel\Client;
use model\clientModel\ClientManager;

$clientManager=new  ClientManager();

$client=$clientManager->readClient($_POST['numCli']);

$client->setNOMCLIENT($_POST['nomCli']);
$client ->setPRENOMCLIENT($_POST['prenomCli']);
$client->setADRESSECLIENT($_POST['lieuCli']);
$client->setPHONECLIENT($_POST['telephone']);
//->setPHONECLIENT(($_POST['lieuCli']);
$client->setPROFFESSION($_POST['profession']);

$clientManager->updateClient($client);
