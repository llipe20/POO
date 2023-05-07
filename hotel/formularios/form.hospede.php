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
<h3>Informações Pessoais</h3> <!-- FORMULÁRIO 'informações pessoais' -->
    <form action="../codigos/tratamento.php" method="POST">
        <p>Nome Completo: <input type="text" name="nome" placeholder="Kamila Araújo"></p>
        <p>CPF: <input type="text" name="cpf" placeholder="000.000.000-00"></p>
        <label>
          <input type="radio" name="sexo" value="masculino">
          Masculino
        </label>
        <label>
          <input type="radio" name="sexo" value="feminino">
          Feminino
        </label>
        <p>E-mail: <input type="email" name="email" placeholder="xxxxx@gmail.com"></p>
        <p>Telefone: <input type="text" name="fone" placeholder="(00) 0000-0000"></p>
        <p><button type="submit" name="btn-confirmar">Confirmar</button></p>
    </form>
    <p><a href="../codigos/index.php">Voltar</a></p>
</body>
</html>