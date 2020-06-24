<?php

class Chambre{
     private $id ;
     private $numero_chambre ;


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
      * Get the value of numero_chambre
      */ 
     public function getNumero_chambre()
     {
          return $this->numero_chambre;
     }

     /**
      * Set the value of numero_chambre
      *
      * @return  self
      */ 
     public function setNumero_chambre($numero_chambre)
     {
          $this->numero_chambre = $numero_chambre;

          return $this;
     }
}