<?php 
    class Caneta{
        private $modelo;
        public $ponta;
        public $cor;
        public $tampar;

        // public function __construct(){
        //         $this->cor = "AZUL";
        //         $this->tampar();
                
        // }
        public function __construct($m, $c, $p){
                $this->modelo = $m;
                $this->cor = $c;
                $this->ponta = $p;
                $this->setTampar(true);
                
        }
        
        public function getPonta(){
                return $this->ponta;
        }

        public function setPonta($p){
                $this->ponta = $p;
                return $this;
        }

        public function getModelo(){
                return $this->modelo;
        }

        public function setModelo($m){
                $this->modelo = $m;
                return $this;
        }

        public function getTampar(){
                return $this->tampar;
        }

        public function setTampar($t){
                $this->tampar = $t;
                return $this;
        }
    }
?>