<?php
    class Caneta {

        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            if($this->tampada == true){
                echo "<p>ERRO! Não posso rabiscar...</p>";
            }else{
                echo "<p>Estou rabiscando...</p>";
            }
        }
        public function tampar(){
            $this->tampada =  true;
        }
        public function destampar(){
            $this->tampada = false;
        }


    }


    // UML
    // + simboliza public todos podem acessar
    // - simboliza private somente a classe
    // # simboliza protected somente classe mae e filhas

    //_______________________
    // Caneta               |
    // _____________________|
    //ATRIBUTOS:            |
    // +modelo              |
    // +cor                 |
    // -ponta               |
    // #carga               |
    // #tampada             |                     
    // _____________________|
    //FUNÇÕES:              |
    // +escrever()          |   
    // +rabiscar()          |
    // +pintar()            |
    // -tampar()            |
    // -destampar()         |
    //______________________|

?>