<?php
    require_once 'interface.php';
    require_once 'classe.pessoa.php';

    class Livro implements Publicacao
    {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // Método Construtor;
        public function __construct($t, $a, $p, $l)
        {
            $this -> setTitulo($t);
            $this -> setAutor($a);
            $this -> settotPag($p);
            $this -> setPagAtual(0);
            $this -> setAberto(false);
            $this -> setLeitor($l);
        }
        // Métodos Getters;
        public function getTitulo()
        {
            return $this -> titulo; 
        }
        public function getAutor()
        {
            return $this -> autor; 
        }
        public function gettotPag()
        {
            return $this -> totPaginas; 
        }
        public function getPagAtual()
        {
            return $this -> pagAtual; 
        }
        public function getAberto()
        {
            return $this -> aberto; 
        }
        public function getLeitor()
        {
            return $this -> leitor; 
        }

        // Métodos Setters;
        public function setTitulo($t)
        {
            $this -> titulo = $t;
        }
        public function setAutor($a)
        {
            $this -> autor = $a;
        }
        public function settotPag($p)
        {
            $this -> totPaginas = $p;
        }
        public function setPagAtual($pa)
        {
            $this -> pagAtual = $pa;
        }
        public function setAberto($open)
        {
          $this -> aberto = $open;
        }
        public function setLeitor($l)
        {
            $this -> leitor = $l;
        }

        // Método de Detalhe sobre o livro;
        public function detalhes()
        {
            echo '<p>Nome do livro: '.$this -> getTitulo().'</p>';
            echo '<p>Autor: '.$this -> getAutor().'</p>';
            echo '<p>Total de páginas: '.$this -> gettotPag().'</p>';
            echo '<p>Página atual: '.$this -> getPagAtual().'</p>';
            echo '<p>Leitor do momento: '.$this -> leitor -> getNome().' de '.$this -> leitor -> getIdade().' anos.</p>';
        }

        // Método de Abrir o livro;
        public function abrir()
        {
            if ($this -> getAberto() == false) 
            {
                $this -> setAberto(true);
                echo '<p>Livro foi aberto!</p>';
            }
            else
            {
                echo '<p>O livro JA está aberto</p>';
            }
        }

        // Método de Fechar o livro;
        public function fechar()
        {
            if ($this -> getAberto() == true) 
            {
                $this -> setAberto(false);
                echo '<p>Livro foi fechado!</p>';
            }
            else
            {
                echo '<p>O livro já estava fechado</p>';
            }
        }

        // ... Em andamento;
        public function folhear()
        {
            
        }

        // Método de Avançar as páginas;
        public function avançarPag()
        {
            if ($this -> getPagAtual() != $this -> gettotPag())
            {
                $pag = ( 1 + $this -> getPagAtual());
                $this -> setPagAtual($pag);
                echo '<p>A página atual agora é: '. $this -> getPagAtual().'</p>';
            }   
            else
            {
                echo '<p>Você alcançou a última página!</p>';
            }
        }

         // Método de Voltar as páginas;
        public function voltarPag()
        {
            if ($this -> getPagAtual() != 0)
            {
                $pag = $this -> getPagAtual();
                $this -> setPagAtual($pag --);
                echo '<p>A página atual agora é: '. $this -> getPagAtual().'</p>';
            }   
            else
            {
                echo '<p>Não pode voltar! Está na página 0.</p>';
            }
        }
    }
?>