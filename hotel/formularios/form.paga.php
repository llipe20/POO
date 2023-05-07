<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schmersal Hotel</title>
</head>
<body>
<h1>Nova Reserva</h1>

<h3>Pagamento</h3> <!-- FORMULÁRIO 'pagamento' -->
    <?php
        $valor = null;
        echo '<h4>Valor da reserva: '.$valor.'</h4>';
    ?>
    <form action="form.paga.php" method="POST">
        <label> Forma de pagamento: 
          <input type="radio" name="pag" value="debito">
          Débito
        </label>
        <label>
          <input type="radio" name="pag" value="credito">
          Crédito
        </label>
        <p><button type="submit" name="btn-confirmar">Confirmar</button></p>

    <?php

      if(isset($_POST['btn-confirmar']))
      {
        if(empty($_POST['pag']))
        {
            echo 'Prencha os campos!!';
        }
        else
        {
            $pag = $_POST['pag'];
            session_start();
            $_SESSION['pag'] = $pag;

          switch ($pag)
          {
            case 'debito':
              if($_SESSION['completo'] == false)
              {
              echo 'Prencha os campos!!';
              }
      ?>
              <form action="../codigos/tratamento.php" method="POST">
              <p>Nome Cartão: <input type="text" name="cartao" placeholder="Nubank"></p>
              <p>Senha: <input type="password" name="senha"></p>
              <p><button type="submit" name="btn-confirmar">Confirmar Pagamento</button></p>
      <?php
            break;

            case 'credito':

              if($_SESSION['completo'] == false)
              {
                echo 'Prencha os campos!!';
              }
      ?>
              <form action="../codigos/tratamento.php" method="POST">
              <p>Nome Cartão: <input type="text" name="cartao" placeholder="Inter"></p>
              <label> Parcelamento: 
                <input type="radio" name="parcela" value="1">
                1x
              </label>
              <label>
                <input type="radio" name="parcela" value="2">
                2x
              </label>
              <label>
                <input type="radio" name="parcela" value="3">
                3x
              </label>
              <p>Senha: <input type="password" name="senha"></p>
              <p><button type="submit" name="btn-confirmar">Confirmar Pagamento</button></p>
      <?php
          }
        }
      }
      ?>
       <p><a href="form.reserva.php">Voltar</a></p>

</body>
</html>