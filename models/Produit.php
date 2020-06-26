<?php 
    class Produit extends ModelParrents implements IterfaceParrents
    {
        private $id ;
        private $lib ;
        private $prix ;

        public function __construct($datas=[])
        {
            $this->table ="produits" ;
            if (count($datas)!=0) 
            {
               $this->id = $datas['id'] ;
               $this->lib = $datas['lib'] ;
               $this->prix = $datas['prix'] ;
            }
        }

        public function add() 
        {
            
        }


    }
?>