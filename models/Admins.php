<?php
    
    class Admins extends Users implements IterfaceParrents
    {
        private $adresse ;
        public function __construct($datas=[])
        {
          if (count($datas)!=0)
          {
            $this->table ="admins" ;
            $this->profile = "admin" ;
            parent::__construct($datas) ;
            $this->adresse = $datas['adresse'] ;
          }

        }

    }
?>