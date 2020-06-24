<?php
class Etudiant implements IQuizz 
{
    //Attributs
       //Encapsulation
        protected  $id;
        protected  $matricule;
        protected  $nom;
        protected  $prenom;
        protected  $telephone;
        protected  $email;
        protected  $date_de_naissance;
// public abstract  function hydrate($row);   
  
    //  public   function __construct($row=null){
    //      if($row!=null){
    //          $this->hydrate($row);
    //      }

    //  }
    
    //  public  function hydrate($row){
    //     $this->id=$row['id']; 
    //     $this->nomComplet=$row['nomComplet']; 
    //     $this->profil=$row['profil']; 
    //  }
    
      //Methodes
        //Getters
        public function getId(){
            return $this->id;
        }
        public function getmatriculet(){
            return $this->matricule;
        }

        public function getnom(){
            return $this->nom;
        }

        public function getprenom(){
            return $this->prenom;
        }

        public function gettelephone(){
            return $this->statut;
        }

        public function getemail(){
            return $this->avatar;
        }

        public function getdate_de_naissance(){
            return $this->profil;
        }

        //Setters
    
        public function setId($id){
             $this->id=$id;
        }
        public function setmatricule($matricule){
             $this->matricule=$matricule;
        }

        public function setnom($nom){
            $this->nom=$nom;
        }

        public function setprenom($prenom){
             $this->prenom=$prenom;
        }

        public function settelephone($telephone){
           $this->telephone=$telephone;
        }

        public function setemail($email){
            $this->email=$email;
        }

        public function setdate_de_naissance($date_de_naissance){
            $this->$date_de_naissance=$date_de_naissance;
        }
}