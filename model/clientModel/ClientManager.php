<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 12/01/2020
 * Time: 21:49
 */

namespace model\clientModel;

USE PDO;
USE model\clientModel\Client;
class ClientManager
{
    private $pdo;
    private $pdoStatement;

    /**
     * ClientManager constructor.
     */
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=badamena', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    public function readAllClient()
    {
        $this->pdoStatement = $this->pdo->query('SELECT *  FROM client');
        $resultats = [];
        while ($client = $this->pdoStatement->fetchObject('model\clientModel\Client')) {
            $resultats[] = $client;
        }
        return $resultats;
    }

    public function createClient(Client &$client)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM client WHERE IDCLIENT=:IDCLIENT');
        $this->pdoStatement->bindValue(':IDCLIENT', $client->getIDCLIENT(), PDO::PARAM_STR);
        $executeIsOk = $this->pdoStatement->execute();

        if ($executeIsOk) {
            $cli = $this->pdoStatement->fetchObject('model\clientModel\Client');
            if ($cli === false) {
                $this->pdoStatement = $this->pdo->prepare('INSERT INTO client(IDCLIENT,NOMCLIENT,PRENOMCLIENT,ADRESSECLIENT
                ,PROFFESSION,PHONECLIENT) VALUES (:IDCLIENT,:NOMCLIENT,:PRENOMCLIENT,:ADRESSECLIENT,:PROFFESSION,:PHONECLIENT)');

                $this->pdoStatement->bindValue(':IDCLIENT', $client->getIDCLIENT(), PDO::PARAM_STR);
                $this->pdoStatement->bindValue(':NOMCLIENT', $client->getNOMCLIENT(), PDO::PARAM_STR);
                $this->pdoStatement->bindValue(':PRENOMCLIENT', $client->getPRENOMCLIENT(), PDO::PARAM_STR);
                $this->pdoStatement->bindValue(':ADRESSECLIENT', $client->getADRESSECLIENT(), PDO::PARAM_STR);
                $this->pdoStatement->bindValue(':PROFFESSION', $client->getPROFFESSION(), PDO::PARAM_STR);
                $this->pdoStatement->bindValue(':PHONECLIENT', $client->getPHONECLIENT(), PDO::PARAM_STR);
                $this->pdoStatement->execute();
            }
           else{
                return false;
           }
        }

        else{
            $codeCli=$this->pdo->lastInsertId();
            $this->readClient($codeCli);
            return true;
        }

    }

    public function existeClient($code)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM client WHERE IDCLIENT=:IDCLIENT');
        $this->pdoStatement->bindValue(':IDCLIENT', $code, PDO::PARAM_STR);


        $executeIsOk = $this->pdoStatement->execute();

        if ($executeIsOk) {
            $client = $this->pdoStatement->fetchObject('model\clientModel\Client');
            if ($client === false) {
                return null;
            } else {
                return true;
            }
        } else {
            return false;
        }


    }

    public function readClient($code)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM client WHERE IDCLIENT=:IDCLIENT');
        $this->pdoStatement->bindValue(':IDCLIENT', $code, PDO::PARAM_STR);
        $executeIsOk = $this->pdoStatement->execute();

        if ($executeIsOk) {
            $client = $this->pdoStatement->fetchObject('model\clientModel\Client');
            if ($client === false) {
                return null;
            }
            else {
                return $client;
            }
        }

        else
            {
                return false;
            }

    }

    public  function  deleteClient(Client $client){
        $this->pdoStatement = $this->pdo->prepare('DELETE FROM client WHERE IDCLIENT=:IDCLIENT');
         $this->pdoStatement->bindValue(':IDCLIENT',$client->getIDCLIENT(),PDO::PARAM_STR);
        $this->pdoStatement->execute();

    }

    public function  updateClient(Client $client){
         $this->pdoStatement =$this->pdo->prepare('UPDATE client SET NOMCLIENT=:NOMCLIENT,PRENOMCLIENT=:PRENOMCLIENT,
        ADRESSECLIENT=:ADRESSECLIENT,PROFFESSION=:PROFFESSION,PHONECLIENT=:PHONECLIENT
         WHERE IDCLIENT=:IDCLIENT');

        $this->pdoStatement->bindValue(':IDCLIENT', $client->getIDCLIENT(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':NOMCLIENT', $client->getNOMCLIENT(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':PRENOMCLIENT', $client->getPRENOMCLIENT(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':ADRESSECLIENT', $client->getADRESSECLIENT(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':PROFFESSION', $client->getPROFFESSION(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':PHONECLIENT', $client->getPHONECLIENT(), PDO::PARAM_STR);
        $this->pdoStatement->execute();
    }



}


