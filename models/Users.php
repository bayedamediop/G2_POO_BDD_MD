<?php
    
    class Users extends ModelParrents 
    {
        protected $id ;
        protected $prenomEtNom ;
        protected $profile ;
        protected $log ;
        protected $pwd ;

        public function __construct($datas=[])
        {
            if (count($datas)!=0)
            {
                $this->id = $datas['id'] ;
                $this->prenomEtNom = $datas['prenomEtNom'] ;
                $this->log = $datas['log'] ;
                $this->pwd = $datas['pwd'] ;
            }
        }


        

    }
?>