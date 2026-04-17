<?php
    require_once 'Lutador.php';

    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($l1, $l2){
                if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                    $this->aprovada = true;
                    $this->desafiado = $l1;
                    $this->desafiante = $l2;
                } else {
                    $this->aprovada = false;
                    $this->desafiado = null;
                    $this->desafiante = null;
                    echo "<p>A luta não pode acontecer!</p>";
                }
        }   
        public function lutar(){
            if ($this->getAprovada()){
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = random_int(0,2);
                switch ($vencedor){
                    case 0://Empate
                        echo "<p>Empatou!</p>";
                            $this->desafiado->empatarLuta();
                            $this->desafiante->empatarLuta();
                        break;
                    case 1://Ganhou desafiado
                        echo "<p>" . $this->desafiado->getNome() . " Ganhou!</p>";
                            $this->desafiado->ganharLuta();
                            $this->desafiante->perderLuta();
                        break;
                    case 2://Ganhou desafiante 
                        echo "<p>" . $this->desafiante->getNome() . " Ganhou!</p>";
                            $this->desafiado->perderLuta();
                            $this->desafiante->ganharLuta();
                        break;

                }
            } else {
                // echo "<p>A luta não pode acontecer!</p>";
            }
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