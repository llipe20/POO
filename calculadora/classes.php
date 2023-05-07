<?php
    include_once 'encapsulamento.php';

    class Calculadora implements Calcular 
    {
        private $numero1;
        private $numero2;
        private $resultado;

                                     // MÉTODO CONSTRUTOR;
        public function __construct($n1,$n2)
        {
            $this -> setNum1($n1);
            $this -> setNum2($n2);
        }

                                       // MÉTODOS GETTERS;
        public function getNum1()
        {
            return $this -> numero1;
        }
        public function getNum2()
        {
            return $this -> numero2;
        }
        public function getResul()
        {
            return $this -> resultado;
        }
                                      // MÉTODOS SETTERS;
        public function setNum1($n1)
        {
            $this -> numero1 = $n1;
        }
        public function setNum2($n2)
        {
            $this -> numero2 = $n2;
        }
        public function setResul($r)
        {
            $this -> resultado = $r;
        }

        public function somar($n1, $n2)   // SOMAR
        {
            $soma = $n1 + $n2;
            $this -> setResul($soma);
            echo '<P>O resultado é: '.$this -> getResul().'</p>';

        }
        public function subtrair($n1, $n2)   // SUBTRAIR
        {
            $sub = $n1 - $n2;
            $this -> setResul($sub);
            echo '<P>O resultado é: '.$this -> getResul().'</p>';
        }
        public function multiplicar($n1, $n2)  // MULTIPLICAR
        {
            $mult = $n1 * $n2;
            $this -> setResul($mult);
            echo '<P>O resultado é: '.$this -> getResul().'</p>';
        }
        public function dividir($n1, $n2)    // DIVIDIR
        {
            $div = $n1 / $n2;
            $this -> setResul($div);
            echo '<P>O resultado é: '.$this -> getResul().'</p>';
        }
    }
?>