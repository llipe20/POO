<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <pre>
    <?php
        include 'classe.livro.php';
        include_once 'classe.pessoa.php';

        $pessoa = array ();    // Objeto Pessoas;
        $pessoa[] = new Pessoa ('Felipe',19,'Masculino');   
        $pessoa[] = new Pessoa ('Kamila', 21, 'Feminino'); 

        $livro = array();    // Objeto Livros;
        $livro[] = new Livro ('Pânico 6','Jenna Ortega', 500, $pessoa[0]);
        $livro[] = new Livro ('Demon Slayer', 'Gotoge', 204, $pessoa[1]);
        $livro[] = new Livro ('Peaky Blinders', 'Thomas Shelby', 802, $pessoa[0]);

     
    ?>
    </pre>
</body>
</html>