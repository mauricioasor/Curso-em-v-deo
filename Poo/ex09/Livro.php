<?php
        require_once 'Pessoa.php';
        require_once 'Publicacao.php';
        

        class Livro implements Publicacao{
                private $titulo;
                private $autor;
                private $totPaginas;
                private $pagAtual;
                private $aberto;
                private $leitor;

                public function __construct($t, $a, $tp, $l){
                      $this->titulo = $t;
                      $this->autor = $a;
                      $this->totPaginas = $tp;
                      $this->leitor = $l;          
              }
                //metodo da classe livro
                public function detalhes(){
                
                }
                //metodos interface
                public function abrir(){
                    $this->aberto = true;
                }
                public function fechar(){
                    $this->aberto = false;
                }
                public function folhear($p){
                    if ($p>$this->totPaginas){
                        $this->pagAtual = 0;
                    }else {
                        $this->pagAtual = $p;
                    }
                }
                public function avancarPag(){
                    $this->pagAtual ++;
                }
                public function voltarPag(){
                    $this->pagAtual --;
                }
                public function getTitulo(){
                        return $this->titulo;
                }

                public function setTitulo($ti){
                        $this->titulo = $ti;
                        return $this;
                }

                public function getAutor(){
                        return $this->autor;
                }

                public function setAutor($autor){
                        $this->autor = $autor;
                        return $this;
                }

                public function getTotPaginas(){
                        return $this->totPaginas;
                }

                public function setTotPaginas($to){
                        $this->totPaginas = $to;
                        return $this;
                }

                public function getPagAtual(){
                        return $this->pagAtual;
                }

                public function setPagAtual($p){
                        $this->pagAtual = $p;
                        return $this;
                }

                public function getAberto(){
                        return $this->aberto;
                }

                public function setAberto($a){
                        $this->aberto = $a;
                        return $this;
                }

                public function getLeitor(){
                        return $this->leitor;
                }

                public function setLeitor($l){
                        $this->leitor = $l;
                        return $this;
                }
    }
?>