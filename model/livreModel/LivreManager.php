<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 15/01/2020
 * Time: 00:08
 */

namespace model\livreModel;

USE PDO;
USE model\livreModel\Livre;
class LivreManager
{
    private  $pdo;
    private $pdoStatement;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=badamena', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }


    public function readAllLivre()
    {
        $this->pdoStatement =$this->pdo->prepare('SELECT auteur.IDAUTEUR,auteur.NOMAUTEUR,livre.NUMLIVRE,
           livre.IDAUTEUR,livre.TITRELIVRE FROM livre,auteur WHERE auteur.IDAUTEUR=livre.IDAUTEUR
          ');

        $this->pdoStatement->execute();
        $livre= $this->pdoStatement->fetchAll();
        return $livre;
    }

    public function  readLivre($code){
        $this->pdoStatement=$this->pdo->prepare("SELECT * FROM livre WHERE NUMLIVRE=:NUMLIVRE");
        $this->pdoStatement->bindValue(":NUMLIVRE",$code,PDO::PARAM_STR);
        $executeIsOk=$this->pdoStatement->execute();
        if ($executeIsOk)
        {
            $livre = $this->pdoStatement->fetchObject('model\livreModel\Livre');
            if ($livre === false)
            {
                return null;
            }
            else
            {
                return $livre;
            }
        }
        else
        {
            return false;
        }
    }

    public function existLivre($code)
    {
        $this->pdoStatement=$this->pdo->prepare("SELECT * FROM livre WHERE NUMLIVRE=:NUMLIVRE");
        $this->pdoStatement->bindValue(":NUMLIVRE",$code,PDO::PARAM_STR);
        $executeIsOk = $this->pdoStatement->execute();
        if ($executeIsOk) {

            $livre = $this->pdoStatement->fetchObject('model\livreModel\Livre');

            if($livre === false)
            {
                return false;
            }

            else
            {
                return true;
            }
        }
        else
        {
            return false;//indiquer une erreure
        }
    }
}