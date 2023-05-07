<?php
    class Reserva implements CRUD
    {
        private $checkin;
        private $checkout;
        private $fatura;
        private $situacao;
        private $pago;

         // MÉTODO CONSTRUTOR;
         public function __construct($checkin,$checkout,$pago)
         {
             $this -> setIn($checkin);
             $this -> setOut($checkout);
             $this -> setPago($pago);
         }
 
         // MÉTODOS GETTERS;
         public function getIn()
         {
             return $this -> checkin;
         }
 
         public function getOut()
         {
             return $this -> checkout;
         }
 
         public function getFatura()
         {
             return $this -> fatura;
         }
 
         public function getSituacao()
         {
             return $this -> situacao;
         }
 
         public function getPago()
         {
             return $this -> pago;
         }


         // MÉTODOS SETTERS;
         public function setIn($x)
         {
              $this -> checkin = $x;
         }
 
         public function setOut($f)
         {
              $this -> checkout = $f;
         }
 
         public function setFatura($y)
         {
              $this -> fatura = $y;
         }
 
         public function setSituacao($a)
         {
              $this -> situacao = $a;
         }

         public function setPago($p)
         {
              $this -> pago = $p;
         }

 
         // MÉTODO DE CREATE: inserir dados de reservas no banco;
         public function create()
         {
 
         }
 
         // MÉTODO DE READ: trazer, consultar dados de reservas no banco;
         public function read()
         {
             
         }
 
         // MÉTODO DE UPDATE: atualizar dados de reservas no banco;
         public function update()
         {
             
         }
 
         // MÉTODO DE DELETE: apagar dados de reservas no banco;
         public function delete()
         {
             
         }
 
    }
?>