<?php 
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct(string $no, string $na, int $id, float $alt, float $pe, int $vi, int $de, int $em){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($alt);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        
        }   
 

        public function apresentar(){
                echo "<p>--APRESENTAÇÃO--</p>";
                echo "<p>Chegou a hora do lutador " . $this->getNome() . "!!!<br>";
                echo "Ele veio diretamente de " . $this->getNacionalidade() . ", ";              
                echo "tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " KG";
                echo "<br>Ele tem " . $this->getVitorias() . " vitórias ";
                echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
        }
        public function status(){
                echo "<p>--STATUS DO LUTADOR--</p>";
                echo "<p>Nome do lutador: " . $this->getNome() . "</p>";
                echo "<p>Peso: " . $this->getPeso() . "</p>";
                echo "<p>Categoria: " . $this->getCategoria() . "</p>";
                echo "<p>Vitorias: " . $this->getVitorias().  "</p>";
                echo "<p>Derrotas: " . $this->getDerrotas() . "</p>";
                echo "<p>Empates: " . $this->getEmpates() . "</p>"; 
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
                $this->setDerrotas($this->getDerrotas() - 1);
                // if ($this->getDerrotas() === 0){
                //         $this->setDerrotas($this->getDerrotas() + 1);
                // } elseif ($this->getDerrotas() > 0){
                //         $this->setDerrotas($this->getDerrotas() - 1);
                // }
            
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);   
        }




        public function getNome(){
                return $this->nome;
        }

        public function setNome($n){
                $this->nome = $n;
                return $this;
        }

        public function getNacionalidade(){
                return $this->nacionalidade;
        }

        public function setNacionalidade($n){
                $this->nacionalidade = $n;
                return $this;
        }

        public function getIdade(){
                return $this->idade;
        }

        public function setIdade($i){
                $this->idade = $i;
                return $this;
        }

        public function getAltura(){
                return $this->altura;
        }

        public function setAltura($a){
                $this->altura = $a;
                return $this;
        }

        public function getPeso(){
                return $this->peso;
        }

        public function setPeso($p){
                $this->peso = $p;
                $this->setCategoria();
                return $this;
        }

        public function getCategoria(){
                return $this->categoria;
        }

        private function setCategoria(){
            if ($this->getPeso() < 52.2){
                $this->categoria = "Inválido";
            }   elseif ($this->getPeso() <= 70.3){
                $this->categoria = "Leve";
                }   elseif ($this->getPeso() <= 83.9){
                        $this->categoria = "Médio";
                    } elseif ($this->getPeso() <= 120.2){
                        $this->categoria = "Pesado";
                        }else {
                             $this->categoria = ("Inválido");
                         }
        }

        public function getVitorias(){
                return $this->vitorias;
        }

        public function setVitorias($v){
                $this->vitorias = $v;
                return $this;
        }

        public function getDerrotas(){
                return $this->derrotas;
        }

        public function setDerrotas($d){
                $this->derrotas = $d;
                return $this;
        }

        public function getEmpates(){
                return $this->empates;
        }

        public function setEmpates($e){
                $this->empates = $e;
                return $this;
        }
    }


?>