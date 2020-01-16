<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 13/01/2020
 * Time: 22:54
 */


namespace  Controller\clientController;

require_once "../../model/clientModel/ClientManager.php";
require_once "../../model/clientModel/Client.php";

//use model\clientModel\Client;
use model\clientModel\ClientManager;

$clientManager=new  ClientManager();

$client=$clientManager->readClient($_GET['id']);