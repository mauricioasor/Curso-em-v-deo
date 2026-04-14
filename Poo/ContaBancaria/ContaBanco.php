<?php 
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Método construtuor
        public function __construct(){
            $this->setSaldo(0);
            $this->setstatus(false);
        }
        // Método abrir conta
        public function abrirConta(string $t, $d, int $n){
            $this->setTipo($t);
            $this->setDono($d);
            $this->setStatus(true);
            $this->setNumConta($n);
            if ($t == "CC"){
                $this->setSaldo(50);
                echo "<p>Parabéns " . $this->getDono() . " sua conta foi aberta com sucesso, você recebeu um bonus de R$ " . $this->getSaldo() . " por ser uma conta corrente.</p>";
            } elseif ($t == "CP"){
                $this->setSaldo(150);
                echo "<p>Parabéns " . $this->getDono() . " sua conta foi aberta com sucesso, você recebeu um bonus de bonus de R$ " . $this->getSaldo() . " por ser uma conta poupança.</p>";

            }
        }
        // Método fechar conta
        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Ops! Não podemos fechar, você ainda possui saldo R$ " . $this->getSaldo() . "</p>";
            } elseif($this->getSaldo() < 0){
                echo "<p>Ops! Não podemos fechar, seu saldo esta negativo R$ " . $this->getSaldo() . "</>";

            }else{
                $this->setStatus(false);
                echo "<p>Conta fechada com sucesso!</p>";
               
            }
        }
        // Método depositar
        public function depositar(float $d){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $d);
                echo "<p>Deposito de R$ " . $this->getSaldo() . " efetuado com sucesso! </p>";
            } else{
                echo "<p>Impossível depositar, você não tem conta ativa!</p>";
            }
        }

        // Método sacar
        public function sacar(float $v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v ){
                        $this->setSaldo($this->getSaldo() - $v);
                        echo "<p>Saque de R$ $v efetuado com sucesso!</p>";

                } else{
                        echo "<p>Saldo insuficiente!</p>";
                }
            } else{
                echo "<p>Impossível sacar, você não tem conta aberta!</p>";
            }
        }
        // Método pagar mensalidade
        public function pagarMensal(){
                $v = 0;   
            if($this->getTipo() == "CC"){
                $v = 15;
                echo "<p>Mensalidade paga R$ $v sua conta é conta corrente.</p>";
            } elseif ($this->getTipo() == "CP"){
                $v = 20;
                echo "<p>Mensalidade paga R$ $v sua conta é conta poupança.</p>";
            }
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                       $this->setSaldo($this->getSaldo() - $v); 
                }else{
                        echo "<p>Saldo insuficinte!</p>";
                }
            }

        }
        // Método mostrar saldo
        public function verSaldo(){
                $this->getSaldo();
                echo "<p>Seu saldo é de R$ ". $this->getSaldo() . "</p>";
            
        }



        // Métodos especiais
        public function getStatus(){
                return $this->status;
        }

        public function setStatus(bool $s){
                $this->status = $s;
                return $this;
        }

        public function getSaldo(){
                return $this->saldo;
        }

        public function setSaldo(float $v){
                $this->saldo = $v;
                return $this;
        }

        public function getTipo(){
                return $this->tipo;
        }

        public function setTipo(string $t){
                $this->tipo = $t;
                return $this;
        }

        public function getNumConta(){
                return $this->numConta;
        }

        public function setNumConta(int $n){
                $this->numConta = $n;
                return $this;
        }

        public function getDono(){
                return $this->dono;
        }

        public function setDono($d){
                $this->dono = $d;
                return $this;
        }
    }



?>