<?php
class Boursier extends Etudiant{
 
//    //Propriete de Navigation
//    //OneTomany
//     private $collectionJeu=[];

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
 

      private $pension ;   
   

      /**
       * Get the value of pension
       */ 
      public function getPension()
      {
            return $this->pension;
      }

      /**
       * Set the value of pension
       *
       * @return  self
       */ 
      public function setPension($pension)
      {
            $this->pension = $pension;

            return $this;
      }
}