<?php
class NonBoursier extends Etudiant{
    
    // public function __construct($row=null){
    //     $this->profil="Admin";
    //     if($row!=null){
    //         $this->hydrate($row);
    //     }
    // }
    // //Redefinition
    // public function setProfil($profil){
        
    // }
    private $adresse ;

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
}