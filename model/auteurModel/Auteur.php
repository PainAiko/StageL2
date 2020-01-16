<?php
/**
 * Created by PhpStorm.
 * User: Onjaniaina
 * Date: 14/01/2020
 * Time: 00:19
 */

namespace model\auteurModel;


    class Auteur
    {
            private  $IDAUTEUR;
            private  $NOMAUTEUR;

        /**
         * Auteur constructor.
           */
        public function __construct()
        {

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