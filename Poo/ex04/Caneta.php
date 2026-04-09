<?php
    class Caneta {

        public $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        public function setmodelo($modelo) {
            $this->modelo = $modelo;
        }
    }
        



        // public function __construct(){
        //     $this->cor = "Azul";
        //     $this->tampar();
        //     $this->ponta = 1.0;
        //     $this->modelo = "NIC";
        // }

        // public function __construct($m, $c, $p){
        //     $this->modelo = $m;
        //     $this->cor = $c;
        //     $this->ponta = $p;
        //     $this->tampar();
        // }
       
        // public function tampar(){
        //     $this->tampada = true;
        // }

        // public function getModelo(){
        //     return $this->modelo;
        // }

        // public function setModelo($m){
        //     $this->modelo = $m;
        // }

        // public function getPonta(){
        //     return $this->ponta;
        // }

        // public function setPonta($p){
        //     $this-> ponta = $p;
        // }

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

    // MÉTODOS ACESSORES
    // GET este método pode ter acesso a algum atributo mantendo a segurança de acesso.
    // SET este método modifica atributos 
?>