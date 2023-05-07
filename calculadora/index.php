<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora - GTV</h1
><h2>O novo chat matemático da deepweb</h2>
    <form action="index.php" method="POST">
        <p>1º número: <input type="number" name="n1"></p>
        <select name="operador">
            <option value="null">-----</option>
            <option value="somar">Adição</option>
            <option value="subtrair">Subtração</option>
            <option value="multiplicar">Multiplicação</option>
            <option value="dividir">Divisão</option>
        </select>
        <p>2º número: <input type="number" name="n2"></p>
        <p><button type="submit" name="btn-calcular">Calcular</button></p>
    </form>

<?php
    include_once 'classes.php';
    include_once 'encapsulamento.php';

    if (isset($_POST['btn-calcular']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operador = $_POST['operador'];

        $conta = new Calculadora($n1,$n2);


        if (empty($n1) or empty($n2) or empty($operador))
        {
            echo "<script>alert('Preencha o formulário! ;-;')</script>";
        }
        else 
        {
            switch ($operador)
            {
                case 'somar':
                    $conta -> somar($n1,$n2);
                break;
                case 'subtrair':
                    $conta -> subtrair($n1,$n2);
                break;
                case 'multiplicar':
                    $conta -> multiplicar($n1,$n2);
                break;
                case 'dividir':
                    $conta -> dividir($n1,$n2);
                break;
                default:
                    echo "<script>alert('Escolha um operador! ;-;')</script>";
            }
        }
    }
    
?>
<a href="https://www.instagram.com/https_llpe/">Suporte</a>
</body>
</html>