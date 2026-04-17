<?php 
        require_once 'Livro.php';

    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAnivers(){
            $this->idade++;
        }
        public function __construct($n, $i, $s){
                $this->nome = $n;
                $this->idade = $i;
                $this->sexo = $s;
        }



        public function getNome(){
                return $this->nome;
        }

        public function setNome($n){
                $this->nome = $n;
                return $this;
        }

        public function getIdade(){
                return $this->idade;
        }

        public function setIdade($i){
                $this->idade = $i;
                return $this;
        }

        public function getSexo(){
                return $this->sexo;
        }

        public function setSexo($s){
                $this->sexo = $s;
                return $this;
        }
    }



?>