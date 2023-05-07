<?php
    class Hospede implements CRUD
    {
        private $cpf;
        private $nome;
        private $email;
        private $fone;

        // MÉTODO CONSTRUTOR;
        public function __construct($cpf,$nome,$email,$fone)
        {
            $this -> setCpf($cpf);
            $this -> setNome($nome);
            $this -> setEmail($email);
            $this -> setFone($fone);
        }

        // MÉTODOS GETTERS;
        public function getCpf()
        {
            return $this -> cpf;
        }

        public function getNome()
        {
            return $this -> nome;
        }

        public function getEmail()
        {
            return $this -> email;
        }

        public function getFone()
        {
            return $this -> fone;
        }

        // MÉTODOS SETTERS;
        public function setCpf($x)
        {
             $this -> cpf = $x;
        }

        public function setNome($f)
        {
             $this -> nome = $f;
        }

        public function setEmail($y)
        {
             $this -> email = $y;
        }

        public function setFone($a)
        {
             $this -> fone = $a;
        }

        // MÉTODO DE CREATE: inserir dados de hospedes no banco;
        public function create()
        {

        }

        // MÉTODO DE READ: trazer, consultar dados de hospedes no banco;
        public function read()
        {
            
        }

        // MÉTODO DE UPDATE: atualizar dados de hospedes no banco;
        public function update()
        {
            
        }

        // MÉTODO DE DELETE: apagar dados de hospedes no banco;
        public function delete()
        {
            
        }

    }
?>