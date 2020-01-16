<?php
namespace Controller;

require_once '../../model/clientModel/Client.php';
require_once '../../model/clientModel/ClientManager.php';

USE model\clientModel\ClientManager;
USE model\clientModel\Client;

$clientManager =new ClientManager();
$clients=$clientManager->readAllClient();
//var_dump($clients);

?>