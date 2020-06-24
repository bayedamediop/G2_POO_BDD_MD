<?php

    class Type_chambre{

        private $id ;
        private $libelle ;

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
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of libelle
         */ 
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */ 
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }
    } 