<?php

/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 14/01/2020
 * Time: 23:56
 */
namespace model\livreModel;
class Livre
{
    private $NUMLIVRE;
    private $IDAUTEUR;
    private $TITRELIVRE;
    private  $NOMAUTEUR;
    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getNUMLIVRE()
    {
        return $this->NUMLIVRE;
    }

    /**
     * @param mixed $NUMLIVRE
     */
    public function setNUMLIVRE($NUMLIVRE)
    {
        $this->NUMLIVRE = $NUMLIVRE;
    }

    /**
     * @return mixed
     */
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }

    /**
     * @param mixed $IDAUTEUR
     */
    public function setIDAUTEUR($IDAUTEUR)
    {
        $this->IDAUTEUR = $IDAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getTITRELIVRE()
    {
        return $this->TITRELIVRE;
    }

    /**
     * @param mixed $TITRELIVRE
     */
    public function setTITRELIVRE($TITRELIVRE)
    {
        $this->TITRELIVRE = $TITRELIVRE;
    }

    /**
     * @return mixed
     */
    public function getNOMAUTEUR()
    {
        return $this->NOMAUTEUR;
    }

    /**
     * @param mixed $NOMAUTEUR
     */
    public function setNOMAUTEUR($NOMAUTEUR)
    {
        $this->NOMAUTEUR = $NOMAUTEUR;
    }



}