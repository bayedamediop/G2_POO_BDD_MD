<?php   
      class Parrent 
      {
        protected $layout;
        protected $view;
        protected $folder;
        protected $data_view=[];
        protected $dao;
        protected $validator;
    
        public function rende(){
    
            $pathView="./views/".$this->view.".php";
            $pathLayout="./views/layouts/".$this->layout.".php";
              ob_start();
                 extract($this->data_view);
                 require_once( $pathView);
               $contenus=ob_get_clean();
              require_once($pathLayout);
        }
    
        

        protected $model ;
        public function loadModel( $mdl)
        {
            // $mdl = Clients
            require_once('models/'.$mdl.'.php') ;
            $this->model = new $mdl() ;
        }

        public function render( $tamplate , array $datas =[])
        {
             //
             extract($datas) ;
             ob_start() ;
             require_once('views/'.$tamplate.'.php');
             $contenus = ob_get_clean() ;
             require_once('views/layouts/default.php') ;
        }

        public function erreurPage()
        {
           $this->render('pageError');
        }

        

      }
?>