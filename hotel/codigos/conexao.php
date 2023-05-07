<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'hotel';

    $conn = mysqli_connect($server,$user,$password,$database);

    if (!isset($conn))
    {
        die ('Conexão falhou'.mysqli_connect_error());
    }
?>