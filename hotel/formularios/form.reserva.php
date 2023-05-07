<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrmersal Hotel</title>
</head>
<body>
    <?php
        session_start();
            if($_SESSION['completo'] == false)
            {
                echo 'Prencha os campos!!';
            }
    ?>
<h1>Nova Reserva</h1>
<h3>Informações da Reserva</h3> <!-- FORMULÁRIO 'reserva' -->

<form action="../codigos/tratamento.php" method="POST">
<label for="quarto">Tipo de quarto</label>
<select id="quarto" name="typeQuarto">
    <option value="null">-----</option>
    <option value="individual">Individual</option>
    <option value="duplo">Duplo Individual</option>
    <option value="duplo">Trio Individual</option>
    <option value="casal">Casal</option>
    <option value="familia">Família</option>
</select>
<p>Data de Inicio: <input type="datetime-local" name="in"></p> 
<p>Data de Encerramento: <input type="datetime-local" name="out"></p> 
<p><button type="submit" name="btn-prox">Próximo</button></p>
</form>
<p><a href="../formularios/form.hospede.php">Voltar</a></p>