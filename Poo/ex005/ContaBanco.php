<?php 

    class ContaBanco
    {
        //atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $saldo = 0;
            $status = false;
        }

        //metodos
        public function abrirConta($t){
            $this->settipo($t);
            $this->setstatus(true);
            
            if($t == "CC"){
                $t = "Conta Corrente";
                $saldo = 50;
            }elseif($t == "CP"){
                $st = "Conta Poupança";
                $saldo = 150;
            }
        }

        public function fecharConta(){

        }

        public function depositar(){

        }

        public function sacar(){

        }

        public function pagarMensal(){

        }

        public function setNumConta(int $n) {
            $this->numConta = $n;
        }
        public function getnumConta() {
            return $this->numConta;
        }
        //
        public function settipo(string $t) {
            $this->tipo = $t;
        }
        public function gettipo() {
            return $this->tipo;
        }
        //
        public function setdono(string $d) {
            $this->dono = $d;
        }
        public function getdono() {
            return $this->dono;
        }
        //
        public function setsaldo(float $s) {
            $this->saldo = $s;
        }
        public function getsaldo() {
            return $this->saldo;
        }
        //
        public function setstatus(bool $st) {
            $this->status = $st;
       }
       public function getstatus() {
        return $this->status;
       }









    }








?>