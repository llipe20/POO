<?php 
    Class Pessoa 
    {   
        private $nome;         
        private $idade;
        private $sexo;

        // Método Construtor;
        public function __construct($n, $i, $s)
        {
            $this -> setNome($n);
            $this -> setIdade($i);
            $this -> setSexo($s);
        }

        // Métodos Getters;
        public function getNome()  
        {
            return $this -> nome;
        }
        public function getIdade() 
        {
            return $this -> idade; 
        }
        public function getSexo() 
        {
            return $this -> sexo; 
        }

        // Métodos Setters;
        public function setNome($n) 
        {
            $this -> nome = $n;    
        }
        public function setIdade($i)
        {
            $this -> idade = $i;   
        }
        public function setSexo($s)
        {
            $this -> sexo = $s;   
        }

        // Métodos Comuns

        public function fazerAniver()
        {
            if ($this -> getIdade() > 0)
            {
                $i = ( 1 + $this -> getIdade());
                $this -> setIdade($i);
                echo 'nova idade: '.$this -> getIdade();
            }
        }
    }
?>