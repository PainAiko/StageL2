<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 14/01/2020
 * Time: 09:11
 */

namespace model\auteurModel;

USE PDO;
USE model\auteurModel\Auteur;
class AuteurManager
{
    private  $pdo;
    private  $pdoStatement;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=badamena', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    public  function createAuteur(Auteur &$auteur){

        $this->pdoStatement=$this->pdo->prepare("INSERT INTO auteur(IDAUTEUR,NOMAUTEUR) VALUES (:IDAUTEUR,:NOMAUTEUR)");
        $this->pdoStatement->bindValue(':IDAUTEUR',$auteur->getIDAUTEUR(), PDO::PARAM_INT);
        $this->pdoStatement->bindValue(':NOMAUTEUR',$auteur->getNOMAUTEUR(), PDO::PARAM_STR);
        $this->pdoStatement->execute();
    }

    public function readAllAuteur()
    {
        $this->pdoStatement = $this->pdo->query('SELECT *  FROM auteur');
        $resultats = [];
        while ($auteur = $this->pdoStatement->fetchObject('model\auteurModel\Auteur')) {
            $resultats[] = $auteur;
        }
        return $resultats;
    }

    public function existeAuteur($code)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM auteur WHERE IDAUTEUR=:IDAUTEUR');
        $this->pdoStatement->bindValue(':IDAUTEUR', $code, PDO::PARAM_INT);
        $executeIsOk = $this->pdoStatement->execute();

        if ($executeIsOk) {
            $client = $this->pdoStatement->fetchObject('model\auteurModel\Auteur');
            if ($client === false) {
                return null;
            } else {
                return true;
            }
        } else {
            return false;
        }


    }

    public function readAuteur($code)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM auteur WHERE IDAUTEUR=:IDAUTEUR');
        $this->pdoStatement->bindValue(':IDAUTEUR', $code, PDO::PARAM_INT);
        $executeIsOk = $this->pdoStatement->execute();

        if ($executeIsOk) {
            $auteur = $this->pdoStatement->fetchObject('model\auteurModel\Auteur');
            if ($auteur === false) {
                return null;
            }
            else {
                return $auteur;
            }
        }

        else
        {
            return false;
        }

    }

    public function deleteAuteur(Auteur $auteur)
    {
        $this->pdoStatement = $this->pdo->prepare('DELETE FROM auteur WHERE IDAUTEUR=:IDAUTEUR');
        $this->pdoStatement->bindValue(':IDAUTEUR', $auteur->getIDAUTEUR(), PDO::PARAM_INT);
        $this->pdoStatement->execute();

    }

    public function  updateAuteur(Auteur $auteur){
        $this->pdoStatement =$this->pdo->prepare('UPDATE auteur SET NOMAUTEUR=:NOMAUTEUR WHERE IDAUTEUR=:IDAUTEUR');

        $this->pdoStatement->bindValue(':IDAUTEUR',$auteur->getIDAUTEUR(), PDO::PARAM_INT);
        $this->pdoStatement->bindValue(':NOMAUTEUR',$auteur->getNOMAUTEUR(), PDO::PARAM_STR);
        $this->pdoStatement->execute();
    }




}