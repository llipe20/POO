<?php
    // Recebendo dados do formulário referente ao hospedes;
    // Direcionando para formulario de reserva;

    if (isset ($_POST['btn-confirmar'])) 
    { 
       session_start();
       if (!empty($_POST['cpf']) and !empty($_POST['nome']) and !empty($_POST['sexo'])
           and !empty($_POST['email']) and !empty($_POST['fone']))
        {
            $cpf =  $_POST['cpf'];
            $nome = $_POST['nome'];
            $sexo = $_POST['sexo'];
            $email = $_POST['email'];
            $fone = $_POST['fone'];
            
           header("Location: ../formularios/form.reserva.php");
        }
        else
        {
           $_SESSION['completo'] = false;
           header("Location: ../formularios/form.hospede.php");
        }
    }

    // Recebendo dados do formulário referente ao quarto;
    // Direcionado para fomrulario de pagamento;

    if (isset ($_POST['btn-prox'])) 
    { 
       if ($_POST['quarto'] != 'null' and !empty($_POST['in']) and !empty($_POST['out']))
        {
            $quarto =  $_POST['quarto'];
            $in = $_POST['in'];
            $out = $_POST['out'];
        
           header("Location: ../formularios/form.paga.php");
        }
        else
        {
            $_SESSION['completo'] = false;
           header("Location: ../formularios/form.reserva.php");
        }
    }

    // Recebendo dados do formulário referente ao pagamento;
    // Direcionado para index;

    if (isset($_POST['btn-confirmar']))
    {   
        switch ($_SESSION['pag'])
        {
            case 'debito':
                if (!empty($_POST['cartao']) and !empty($_POST['senha']))
                {
                    $cartao = $_POST['cartao'];
                    $senha = $_POST['senha'];
                    $tipo = $_SESSION['pag'];

                    header('Location: ../classes/reserva.php');
                }
                else
                {
                    $_SESSION['completo'] = false;
                     header("Location: ../formularios/form.paga.php");
                }
            break;
            case 'credito':
                if (!empty($_POST['cartao']) and !empty($_POST['parcela']) and !empty($_POST['senha']))
                {
                    $cartao = $_POST['cartao'];
                    $parcela = $_POST['parcela'];
                    $senha = $_POST['senha'];
                    $tipo = $_SESSION['pag'];

                    header('Location: ../classes/reserva.php');
                }
                else
                {
                    $_SESSION['completo'] = false;
                     header("Location: ../formularios/form.paga.php");
                }
            break;

        }
    }
?>