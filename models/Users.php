<?php
    
    class Users extends ModelParrents 
    {
        protected $id ;
        protected $matricule ;
        protected $nom ;
        protected $prenom ;
        protected $telephone ;
        protected $dateNaissance;
        protected $email ;
        protected $type_user ;
        protected $prix_bourse ;

        public function __construct($datas=[])
        {
            if (count($datas)!=0)
            {
                $this->id = $datas['id'] ;
                $this->matricule = $datas['matricule'] ;
                $this->nom = $datas['nom'] ;
               
                $this->prenom = $datas['prenom'] ;
                $this->telephone = $datas['telephone'] ;
                $this->dateNaissance = $datas['dateNaissance'] ;
                $this->email = $datas['email'] ;
                $this->type_user = $datas['type_user'] ;
                $this->prix_bourse = $datas['prix_bourse'] ;
            }
        }


        

    }
?>