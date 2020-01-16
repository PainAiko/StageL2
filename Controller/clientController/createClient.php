<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 13/01/2020
 * Time: 17:35
 */

namespace  Controller\clientController;

require_once "../../model/clientModel/ClientManager.php";
require_once "../../model/clientModel/Client.php";

use model\clientModel\Client;
use model\clientModel\ClientManager;



$client=new Client();
echo($_POST['nomCli']);

$client->setIDCLIENT($_POST['numCli']);
$client->setNOMCLIENT($_POST['nomCli']);
        $client ->setPRENOMCLIENT($_POST['prenomCli']);
         $client->setADRESSECLIENT($_POST['lieuCli']);
         $client->setPHONECLIENT($_POST['telephone']);
         //->setPHONECLIENT(($_POST['lieuCli']);
        $client->setPROFFESSION($_POST['profession']);

$clientMng=new ClientManager();

$ok=$clientMng->createClient($client);
var_dump($ok);