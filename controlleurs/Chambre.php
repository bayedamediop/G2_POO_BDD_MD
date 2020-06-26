<?php 
     class Chambre extends Parrent
     {
          // Les methode de class
            //  controleur d'ajout chambre  
          public function add()
          {
                
               // 1 charge la class client dans models
               // 2 instantantie la class client (Cree objet de type client)
               $this->loadModel("Chambres") ;
               // 3 apell de la methode getAll() display all room from database
               $datas = $this->model->getAll() ;
                
                       //save room added 
                     $this->model->insert() ;    
                    
               // 4 Affichage du tableua
                 
              $this->render('chambre',compact('datas')) ;
          }
                                                        
     }