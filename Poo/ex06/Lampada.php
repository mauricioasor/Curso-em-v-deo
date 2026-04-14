<?php 
    class Lampada{
        public $tipo;
        public $estado;
        public $marca;
        public $tamanho;


        public function __construct(){
            $this->estado = true;
            
        }


        public function getTamanho(){
                return $this->tamanho;
        }

        public function setTamanho($t){
                $this->tamanho = $t;
                return $this;
        }

        public function getMarca(){
                return $this->marca;
        }

        public function setMarca($m){
                $this->marca = $m;
                return $this;
        }

        public function getEstado(){
                return $this->estado;
        }

        public function setEstado($e){
                $this->estado = $e;
                return $this;
        }

        public function getTipo(){
                return $this->tipo;
        }

        public function setTipo($tp){
                $this->tipo = $tp;
                return $this;
        }
    }



?>