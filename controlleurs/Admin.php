<?php 
     class Admin extends Parrent
     {
          // Les methode de class
         public function index()
         {
             // 1 charge la class client dans models
             // 2 instantantie la class client (Cree objet de type client)
             $this->loadModel("Etudiant") ;
             // 3 apell de la methode getAll()
             $datas = $this->model->getAll() ;
             // 4 Affichage du tableua
             $this->render('listeEtudiant',compact('datas')) ;
         }

     //     //page d'acceuil 
           public function index()
           {
                 // 1 charge la class client dans models
                 // 2 instantantie la class client (Cree objet de type client)
              $this->loadModel("Etudiant") ;
               // 3 apell de la methode getAll() 
              $datas = $this->model->getAll() ;
               // 4 Affichage du tableua
              $this->render('listeEtudiant',compact('datas')) ;
            }
          //insert etudiant 
          public function add()
          {
              
                 // 1 charge la class client dans models
               // 2 instantantie la class client (Cree objet de type client)
               $this->loadModel("Etudiant") ; 
               // 3 apell de la methode getAll() 
<<<<<<< HEAD
               $datas = $this->model->add() ;
=======
               $datas = $this->model->insert() ;
>>>>>>> 4cb093a41efd57f11e1259ffa2bf4db7c279c4a9
               // 4 Affichage du tableua
               $this->render('insertEtudiant',compact('datas')) ;
          }

          public function produit()
          {
               $this->render('tabProduits') ;
          }
          
          
          


     }
?>