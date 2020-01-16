<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 12/01/2020
 * Time: 21:36
 */

namespace model\clientModel;


class Client
{
      private  $IDCLIENT;
      private  $NOMCLIENT;
      private  $PRENOMCLIENT;
      private  $ADRESSECLIENT;
      private  $PROFFESSION;
      private  $PHONECLIENT;

    /**
     * Client constructor pour  creer un objet de type client
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIDCLIENT()
    {
        return $this->IDCLIENT;
    }

    /**
     * @param mixed $IDCLIENT
     */
    public function setIDCLIENT($IDCLIENT)
    {
        $this->IDCLIENT = $IDCLIENT;
    }

    /**
     * @return mixed
     */
    public function getNOMCLIENT()
    {
        return $this->NOMCLIENT;
    }

    /**
     * @param mixed $NOMCLIENT
     */
    public function setNOMCLIENT($NOMCLIENT)
    {
        $this->NOMCLIENT = $NOMCLIENT;
    }

    /**
     * @return mixed
     */
    public function getPRENOMCLIENT()
    {
        return $this->PRENOMCLIENT;
    }

    /**
     * @param mixed $PRENOMCLIENT
     */
    public function setPRENOMCLIENT($PRENOMCLIENT)
    {
        $this->PRENOMCLIENT = $PRENOMCLIENT;
    }

    /**
     * @return mixed
     */
    public function getADRESSECLIENT()
    {
        return $this->ADRESSECLIENT;
    }

    /**
     * @param mixed $ADRESSECLIENT
     */
    public function setADRESSECLIENT($ADRESSECLIENT)
    {
        $this->ADRESSECLIENT = $ADRESSECLIENT;
    }

    /**
     * @return mixed
     */
    public function getPROFFESSION()
    {
        return $this->PROFFESSION;
    }

    /**
     * @param mixed $PROFFESSION
     */
    public function setPROFFESSION($PROFFESSION)
    {
        $this->PROFFESSION = $PROFFESSION;
    }

    /**
     * @return mixed
     */
    public function getPHONECLIENT()
    {
        return $this->PHONECLIENT;
    }

    /**
     * @param mixed $PHONECLIENT
     */
    public function setPHONECLIENT($PHONECLIENT)
    {
        $this->PHONECLIENT = $PHONECLIENT;
    }









}