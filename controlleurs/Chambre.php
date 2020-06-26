<?php 
     class Chambre extends Parrent
     {
          // Les methode de class
         
          public function add()
          {
                
               // 1 charge la class client dans models
               // 2 instantantie la class client (Cree objet de type client)
               $this->loadModel("Chambres") ;
               // 3 apell de la methode getAll() 
               $datas = $this->model->getAll() ;
               //$datas = $this->model->getAll() ;
               // 4 Affichage du tableua
               $this->render('chambre',compact('datas')) ;
          
     }
        
        }