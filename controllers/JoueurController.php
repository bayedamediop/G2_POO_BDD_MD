<?php
class JoueurController extends Controller{

     public  function __construct(){
        $this->folder="security";
        $this->layout="default";
        $this->validator=new Validator();
      
     }
  

     public function vi(){
         
          $this->view="moifier";
          $this->render();
 }
}