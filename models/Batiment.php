<?php

    class Batiment{
        private $numero ;
        private $nom ;
        
            //    public function __construct($row=null){
            //        $this->profil="Joueur";
            //        if($row!=null){
            //            $this->hydrate($row);
            //        }

            //    }
            // //    //Redefinition
            // //    public  function hydrate($row){
            // //     $this->id=$row['id']; 
            // //      
                        //ici on a initialisé id unikma mais en realité on doit tt initialiser  
            // //    }

            
        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }
    }  