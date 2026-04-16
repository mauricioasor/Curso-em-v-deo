<?php 
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta(){
            
        public function lutar(){
            
        }






        public function getDesafiado(){
                return $this->desafiado;
        }

        public function setDesafiado($dd){
                $this->desafiado = $dd;
                return $this;
        }

        public function getDesafiante(){
                return $this->desafiante;
        }

        public function setDesafiante($de){
                $this->desafiante = $de;
                return $this;
        }

        public function getRounds(){
                return $this->rounds;
        }

        public function setRounds($r){
                $this->rounds = $r;
                return $this;
        }

        public function getAprovada(){
                return $this->aprovada;
        }

        public function setAprovada($a){
                $this->aprovada = $a;
                return $this;
        }
    }


?>