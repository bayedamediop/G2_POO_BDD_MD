<?php
class AdminController extends Controller{

     public  function __construct(){
        $this->folder="security";
        $this->layout="default";
        $this->validator=new Validator();
      
     }
  

     public function vinscription(){
          $this->data_view["title"]="Pour tester votre niveau de culture générale";
          $this->view="inscription";
          $this->render();
 }
 public function getEtudiant(){
     
     $this->view="listeEtudiant";
     $this->render();
}
public function bloquerJoueur(){
     echo "Boquer";
}

public function fixerNbreQuestion(){
    
}

public function modifierAdmin(){
    
}

public function supprimerAdmin(){
    
}



}