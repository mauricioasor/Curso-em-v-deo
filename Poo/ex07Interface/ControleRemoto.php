<?php

    require_once 'Controlador.php';
    
    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;


        public function __construct(){
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);

        }

        public function ligar(){
            $this->setLigado(true);
            echo "TV ligada";
            echo "<br>";
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<p>Esta ligado?: " . ($this->getLigado() ? "SIM" : "NÃO") . "</p>";    
            echo "<p>Esta trocando?: " . ($this->getTocando() ? "SIM" : "NÃO") . "</p>";            
            echo "Volume: " . $this->getVolume() . "";
            for($i=0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
            echo "<br>";
        }
        public function fecharMenu(){
            echo "<p>Fechando menu</p>";
        }
        public function maisVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() + 1);
            }
        }
        public function menosVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() - 1);
            }
        }
        public function ligarMudo(){
            if ($this->getLigado() && $this->getLigado() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if ($this->getLigado() && !$this->getTocando()){
                $this->setTocando(true);
            }  
        }
        public function pause(){
            if ($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }

        private function getTocando(){
                return $this->tocando;
        }

        private function setTocando($t){
                $this->tocando = $t;
                return $this;
        }

        private function getLigado(){
                return $this->ligado;
        }

        private function setLigado($l){
                $this->ligado = $l;
                return $this;
        }

        private function getVolume(){
                return $this->volume;
        }

        private function setVolume($v){
                $this->volume = $v;
                return $this;
        }
    }


?>