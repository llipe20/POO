<?php

    include_once '../codigos/conexao.php';
    include_once '../codigos/tratamento.php';

    class Hospede
    {
        private $conn;

        // MÉTODO CONSTRUTOR;
        public function __construct($conn)
        {
            $this -> conn = $conn;
        }

        // MÉTODOS GET;
        public function getConn()
        {
            return $this -> conn;
        }
        public function setConn($conn)
        {
            $this -> conn = $conn;
        }

        // MÉTODO DE CREATE: inserir dados de hospedes no banco;
        public function create($cpf,$nome,$sexo,$email,$fone)
        {  
            $cpf = mysqli_escape_string($this->conn,$cpf);
            $nome = mysqli_escape_string($this->conn,$nome);
            $sexo = mysqli_escape_string($this->conn,$sexo);
            $email = mysqli_escape_string($this->conn,$email);
            $fone = mysqli_escape_string($this->conn,$fone);

            $sql = "INSERT INTO hospedes (idHospede,cpf,nome,sexo,email,fone) 
            VALUES (DEFAULT,'$cpf','$nome','$sexo','$email','$fone')";

            if (mysqli_query($this->conn, $sql)) {
                echo " salvo com sucesso!";
                mysqli_close($this->conn);
            } 
            else
            {
                echo "Erro ao salvar: ".mysqli_error($this->conn);
            }
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
