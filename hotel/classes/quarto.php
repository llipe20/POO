<?php
    class Quarto
    {
        private $numero;
        private $andar;
        private $tipo;
        private $valor;
        private $status;
        private $desc;

         // MÉTODO CONSTRUTOR;
         public function __construct($numero,$andar,$tipo,$valor,$desc)
         {
            $this -> setNum($numero);
            $this -> setAndar($andar);
            $this -> setTipo($tipo);
            $this -> setValor($valor);
            $this -> setDesc($desc);
            $this -> setStatus(true);
         }
 
         // MÉTODOS GETTERS;
         public function getNum()
         {
             return $this -> numero;
         }
 
         public function getAndar()
         {
             return $this -> andar;
         }
 
         public function getTipo()
         {
             return $this -> tipo;
         }
 
         public function getValor()
         {
             return $this -> valor;
         }
 
         public function getDesc()
         {
             return $this -> desc;
         }

         public function getStatus()
         {
             return $this -> status;
         }


         // MÉTODOS SETTERS;
         public function setNum($x)
         {
              $this -> numero = $x;
         }
 
         public function setAndar($f)
         {
              $this -> andar = $f;
         }
 
         public function setTipo($y)
         {
              $this -> tipo = $y;
         }
 
         public function setValor($a)
         {
              $this -> valor = $a;
         }

         public function setDesc($p)
         {
              $this -> desc = $p;
         }

         public function setStatus($p)
         {
              $this -> status = $p;
         }

 
         // MÉTODO DE CREATE: inserir dados de quartos no banco;
         public function create()
         {
 
         }
 
         // MÉTODO DE READ: trazer, consultar dados de quartos no banco;
         public function read()
         {
             
         }
 
         // MÉTODO DE UPDATE: atualizar dados de quartos no banco;
         public function update()
         {
             
         }
 
         // MÉTODO DE DELETE: apagar dados de quartos no banco;
         public function delete()
         {
             
         }
 
    }
?>